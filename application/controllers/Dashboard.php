<?php
	class Dashboard extends CI_Controller{
		function __construct()
		{
			parent::__construct();
			if ($this->session->userdata('logged_in') == FALSE){
				redirect('Login/index');
			}
			$this->load->model('M_login');
			$this->load->model('M_subcont');

		}
	
		public function index(){
			$this->load->view('template/header');
			// $this->load->view('template/dashboard');
			$this->load->view('template/footer');
		}

		//===========================================================================================================================================
		//buat metode untuk menampilkan data grafik izin kerja per bulan saat ini
		public function grafikData(){
			$this->load->view('template/header');

			$data['tanggal'] = $this->M_subcont->getdataTanggal(); //data get tanggal saja untuk grafik
			$data['grafik'] = $this->M_subcont->getdataGrafik(); //data tampilan pada grafik
			// echo json_encode($data);
			$data['tabel'] = $this->M_subcont->getforTabel(); // data tampilan pada tabel
			

			// var_dump($data['grafik'] );die;
			$this->load->view('dashboard/v_grafikdata', $data);
			$this->load->view('template/footer');
		}

		//buat metode untuk tampilkan grafik history data izin kerja tiap bulannya
		public function detailGrafik($bulan) {
			$this->load->view('template/header');
			$data['judul'] = 'Detail Grafik Izin Kerja';
			$data['bulan'] = $bulan;
			$data['detailGrafik'] = $this->M_subcont->getDetailGrafik($bulan);

			// var_dump($data['detailGrafik']);die;
			
			$this->load->view('dashboard/v_detailGrafik', $data);
			$this->load->view('template/footer');
		}		

		// ==========================================================================================================================================
		//buat metode yng digunakan untuk membuka form validasi data ketika button di tekan
		public function prosesvalidasiData(){
			// -> tes apakah button berfungsi 
			$this->load->view('template/header');

			$id_subcont = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$data['sbc']=$this->M_subcont->getSubcontById($id_subcont);

			// var_dump($data['sbc']);die;
			$this->load->view('dashboard/v_validasi', $data);
			$this->load->view('template/footer');
		}

		//buat metode yg digunakan untuk simpan validasi yang diinput oleh PIC, dengan mengupdate tabel iks dan mengisi field validasi
		public function proses_simpan_validasi(){
			
			$this->load->model('M_subcont');

			// var_dump(implode(', ', $_POST['validasi']));die;

			$postData = $_POST;

			$validasiData = implode(', ', $postData['validasi']);

			if($validasiData == ''){
				$validasiData = 'Tidak Ada Syarat Wajib';
			}

			// var_dump($validasiData);die;

			//Buat variabel postdata dengan array untuk lokasi_pekerjaan agar bisa save ke db 
			$postData['kategori_pekerjaan'] = implode(', ', $_POST['kategori_pekerjaan']);

			// var_dump($postData['kategori_pekerjaan']);die;


			$data = array(
				'id_subcont' => $postData['id_subcont'],
				'validasi' => $validasiData
			);

			// var_dump($data);die;

			$this->M_subcont->simpan_data_validasi($data);


			// ===========================================================================================
		}

		// ==========================================================================================================================================
		//buat fungsi yang akan digunakan untuk menampilkan dashboard untuk orang ke2
		public function konfirm_gambar(){
			$this->load->model('M_subcont');
			$data['list_subcont'] = $this->M_subcont->get_subcont();
			// $data['log_activity'] = $this->M_subcont->getLogIKS();
			//var_dump($data['list_subcont']);die;

			$this->load->view('template/header');
			$this->load->view('dashboard/v_dashboardPIC', $data);
			$this->load->view('template/footer');
		}

		//buat metode yng digunakan untuk membuka form upload gambar ketika button di tekan
		public function proseskonfirmGambar(){
			// -> tes apakah button berfungsi // echo "Ini tempat proses upload gambar";
			$this->load->view('template/header');

			$id_subcont = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$data['sbc']=$this->M_subcont->getSubcontById($id_subcont);

			// var_dump($data['sbc']);die;
			$this->load->view('dashboard/v_upload_gambar', $data);
			$this->load->view('template/footer');
		}
		
		//metode untuk proses upload gambar ke sistem
		public function proses_uploadgambar(){
			// Panggil Model M_subcont
			$this->load->model('M_subcont');

			// nerima data dari view
			$uploadData['id_subcont'] = $this->input->post('subcont_id');
			// $uploadData['checked']= $this->input->post('status');

			// Hitung Jumlah File/Gambar yang dipilih
			$jumlahData = count($_FILES['gambar']['name']);

			// Lakukan Perulangan dengan maksimal ulang Jumlah File yang dipilih
			for ($i=0; $i < $jumlahData ; $i++):

				//Inisialisasi nama,type,dll
				$_FILES['file']['name']     = $_FILES['gambar']['name'][$i];
				$_FILES['file']['type']     = $_FILES['gambar']['type'][$i];
				$_FILES['file']['tmp_name'] = $_FILES['gambar']['tmp_name'][$i];
				$_FILES['file']['size']     = $_FILES['gambar']['size'][$i];

				//Konfigurasi Upload
				$config['upload_path']          = './uploads/'; //path folder
				$config['allowed_types']        = 'gif|jpg|png|jpeg'; //type gambar yang dapat di upload

				// Memanggil Library Upload dan Setting Konfigurasi
				$this->load->library('upload', $config);
				$this->upload->initialize($config);

				if($this->upload->do_upload('file')){ // Jika Berhasil Upload

					$fileData = $this->upload->data(); // Lakukan Upload Data
	
					// Membuat Variable untuk dimasukkan ke Database
					$uploadData[$i]['judul'] = $fileData['file_name']; // ini udah ga perlu sebenarnya

					// setiap upload data akan insert ke table
					$data = [

						'judul'			=> $fileData['file_name'],
						'subcont_id'	=> $uploadData['id_subcont']
					];

					$this->M_subcont->proses_uploadgambar($data);
				}
			endfor; // Penutup For

			// var_dump($uploadData);die;

			$data2 = array(
				'status' => 'checked'
			);

			$updateCheked = $this->M_subcont->updateChecked($uploadData['id_subcont'], $data2);
			//contoh panggil helper log
            helper_log("update", "PIC Project by ");
            //silahkan di ganti2 aja kalimatnya

			if($updateCheked > 0){
				redirect('Dashboard/konfirm_gambar');
			}else{ // Jika Tidak Berhasil Insert
				redirect('Dashboard/proseskonfirmGambar');
			}
		}

		// ==========================================================================================================================================

		//buat fungsi yang akan digunakan untuk manggil view yg menampilkan data untuk orang ke 3 (EHS)
		public function konfirm_form(){
			$this->load->model('M_subcont');
			$data['list_subcont'] = $this->M_subcont->get_subcont();
			//var_dump($data['list_subcont']);die;

			$this->load->view('template/header');
			$this->load->view('dashboard/v_dashboardEHS', $data);
			$this->load->view('template/footer');

		}

		//buat metod yg digunakan untuk menampilkan form ceklis yg akan disetujui oleh Dept EHS
		public function prosesSetujui(){
			// -> tes apakah button berfungsi // echo "Ini tempat proses setujui";
			$this->load->view('template/header');

			$id_subcont = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$data['sbc']=$this->M_subcont->getSubcontById($id_subcont);

			//var_dump($data['sbc']);die;
			$this->load->view('dashboard/v_setujuiform', $data);
			$this->load->view('template/footer');
		}

		//buat metod yg berfungsi untuk memproses ceklis yg sudah disimpan oleh EHS
		public function proses_setujuiForm(){

			if($_POST['status'] == 'rejected'){
				$data['id_subcont'] = $this->input->post('id_subcont');
				$data['rejected'] = $this->input->post('status');
			}elseif($_POST['status'] == 'approved'){
				$data['id_subcont'] = $this->input->post('id_subcont');
				$data['approved'] = $this->input->post('status');
			}

			// var_dump($_POST['status']);die;
			// var_dump ($this->input->post('status'));die;
			// $data['id_subcont'] = $this->input->post('id_subcont');
			// $data['approved'] = $this->input->post('status');

			$this->load->model('M_subcont');
			$this->M_subcont->proses_setujuiform($data);
		}

		//===========================================================================================================================================
		//buat fungsi metode untuk lihat detail data iks beserta jsa
		public function cekDetail(){
			$this->load->view('template/header');

			$id_subcont = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$data['sbc']=$this->M_subcont->getSubcontById($id_subcont);

			// var_dump($data['sbc']);die;
			$this->load->view('dashboard/v_detail', $data);
			$this->load->view('template/footer');
		}

		//metode untuk cetak detail menjadi pdf sebagai tiket masuk subcont ke cbi
		public function cetak_detail($id_subcont){
			//load library
			$this->load->library('dompdf_gen');

			$id_subcont = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$data['sbc']=$this->M_subcont->getSubcontById($id_subcont);


			$this->load->view('pdf/v_cetak_subcont', $data);

			$paper_size = 'A4';
			$orientation = 'potrait';

			//get output html
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orientation);

			///convert to pdf
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("Detail_Data_Subcont.pdf");
		}

		//===========================================================================================================================================
		//buat fungsi metode untuk halaman akses security
		//berfungsi hanya untuk melihat data guna mencocokan data di sistem dengan data cetak yang dimiliki subcont
		public function konfirm_subcont(){
			$this->load->model('M_subcont');
			// $data['list_all'] = $this->M_subcont->get_all_data();
			$data['list_all'] = $this->M_subcont->get_subcont();
			// var_dump($data['list_all']);die;

			$this->load->view('template/header');
			$this->load->view('dashboard/v_dashboard_sec', $data);
			$this->load->view('template/footer');

		}

		//buat fungsi metode untuk lihat detail data iks beserta jsa pada role satpam
		public function cekSecurity(){
			$this->load->view('template/header');

			$id_subcont = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$data['sbc']=$this->M_subcont->getSubcontById($id_subcont);

			// var_dump($data['sbc']);die;
			$this->load->view('dashboard/v_detail_sec', $data);
			$this->load->view('template/footer');
		}

		//============================================================================================================================================
		//buat metode untuk hapus data iks dengan id
		public function hapusDataById(){
			$id = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$this->M_subcont->hapusDataById($id);
		}

		//============================================================================================================================================
		//buat metod yg digunakan untuk menampilkan form ceklis sudah melakukan briefing oleh Dept EHS
		public function prosesBriefing(){
			// -> tes apakah button berfungsi // echo "Ini tempat proses setujui";
			$this->load->view('template/header');

			$id_subcont = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$data['sbc']=$this->M_subcont->getSubcontById($id_subcont);

			//var_dump($data['sbc']);die;
			$this->load->view('dashboard/v_briefing', $data);
			$this->load->view('template/footer');
		}

		//buat metod yg berfungsi untuk memproses ceklis yg sudah disimpan oleh EHS
		public function proses_briefing(){

			//  var_dump ($this->input->post('require_ehs'));die;
			$data['id_subcont'] = $this->input->post('id_subcont');
			$data['briefing'] = $this->input->post('require_ehs');

			// var_dump ($this->input->post('require_ehs'));die;

			$this->load->model('M_subcont');
			$this->M_subcont->proses_briefingform($data);
		}

		//=========================================== metode untuk data subcont aktif saja ===========================================================
		//buat fungsi yang akan digunakan untuk menampilkan dashboard untuk orang ke2
		public function dataAktif(){
			$this->load->model('M_subcont');
			$data['subcontAktif'] = $this->M_subcont->getdataAktif();
			// var_dump($data['subcontAktif']);die;

			$this->load->view('template/header');
			$this->load->view('dashboard/v_dataAktifEHS', $data);
			$this->load->view('template/footer');
		}

		//============================================================================================================================================
		//buat metode untuk tampilkan detail data izin kerja pada tabel 
		public function detailTabel(){

			$id_bulan = $this->uri->segment(3);
			$this->load->model('M_subcont');
			// $data['dataTabeldetail'] = $this->M_subcont->get();
			$data['detailtabel'] = $this->M_subcont->getfordetailTabel($id_bulan);

			// var_dump($data['detailtabel']);die;

			$this->load->view('template/header');
			$this->load->view('dashboard/v_detailtabel', $data);
			$this->load->view('template/footer');
		}

		// buat metode untuk mencetak data detail izin kerja dengan format pdf 
		public function printdataDetail(){
			$this->load->library('dompdf_gen');

			// $id_subcont = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$data['printData']=$this->M_subcont->getfordetailTabel();
			// var_dump($data['printData']);die;


			$this->load->view('pdf/v_printdetailData', $data);

			$paper_size = 'A4';
			$orientation = 'potrait';

			//get output html
			$html = $this->output->get_output();
			$this->dompdf->set_paper($paper_size, $orientation);

			///convert to pdf
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			$this->dompdf->stream("Rincian_Total_Data_Izin_Kerja.pdf");
		}
	}
?>