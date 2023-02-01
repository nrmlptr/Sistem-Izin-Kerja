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

		// =================================================================================================
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

		//buat metode yg digunakan untuk simpan validasi yang diinput oleh PIC, dengan mengudapte tabel subcont dan mengisi field validasi
		public function proses_simpan_validasi(){
			
			$this->load->model('M_subcont');

			// var_dump(implode(', ', $_POST['validasi']));die;

			$postData = $_POST;

			$validasiData = implode(', ', $postData['validasi']);

			if($validasiData == ''){
				$validasiData = 'Tidak Ada Syarat Wajib';
			}

			// var_dump($validasiData);die;

			//Kondisi Jika Kategori Pekerjaan yang dipilih memiliki syarat tambahan wajib
			// if($this->input->post('kategori_pekerjaan') == 'libatkan panas'){
			// 	$syaratWajib = implode(', ', $postData['syarat_wajib']);
			// 	$postData['syarat_wajib'] = $syaratWajib;
			// }elseif($this->input->post('kategori_pekerjaan')  == 'libatkan ruang terbatas' ){
			// 	$syaratWajib = implode(', ', $postData['syarat_wajib']);
			// 	$postData['syarat_wajib'] = $syaratWajib;
			// }elseif($this->input->post('kategori_pekerjaan') == 'libatkan ketinggian'){
			// 	$syaratWajib = implode(', ', $postData['syarat_wajib']);
			// 	$postData['syarat_wajib'] = $syaratWajib;
			// }else{
			// 	$postData['syarat_wajib'] = '';
			// }

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


		//buat fungsi yang akan digunakan untuk menampilkan dashboard untuk orang ke2
		public function konfirm_gambar(){
			$this->load->model('M_subcont');
			$data['list_subcont'] = $this->M_subcont->get_subcont();
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

		//buat metod yg digunkan untuk proses upload gambar
		public function proses_uploadgambar(){
			// var_dump($_FILES);die;

			// //proses upload
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 1000;
			$config['max_width']            = 1024;
			$config['max_height']           = 768;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambar'))
			{
				// var_dump("Gagal");die;
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload_form', $error);
					redirect('Dashboard/proseskonfirmGambar');
			}
			else
			{
				//var_dump("Berhasil");die;
				$dataUpload = array('upload_data' => $this->upload->data());

				$this->load->view('upload_success', $data);
			}
			//end upload

			//var_dump ($this->input->post('id_subcont'));die;
			$data['id_subcont'] = $this->input->post('id_subcont');
			$data['gambar'] = $this->upload->data('file_name');
			$data['checked']= $this->input->post('status');

			$this->load->model('M_subcont');
			$this->M_subcont->proses_uploadgambar($data);

			// var_dump($data);die;
		}

		//buat fungsi yang akan digunakan untuk manggil view yg menampilkan data untuk orang ke 3 (EHS)
		public function konfirm_form(){
			$this->load->model('M_subcont');
			$data['list_subcont'] = $this->M_subcont->get_subcont();
			//var_dump($data['list_subcont']);die;

			$this->load->view('template/header');
			$this->load->view('dashboard/v_dashboardEHS', $data);
			$this->load->view('template/footer');

		}

		//buat metod yg digunakan untuk menampilkan form ceklis yg akan disetujui oleh Dept EHs
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

			//  var_dump ($this->input->post('status'));die;
			$data['id_subcont'] = $this->input->post('id_subcont');
			$data['approved'] = $this->input->post('status');

			$this->load->model('M_subcont');
			$this->M_subcont->proses_setujuiform($data);
		}

		// ==============================================================================================================================

		//buat fungsi yang akan digunakan untuk menampilkan dashboard JSA untuk orang ke2
		// public function dashboardJSA_PIC(){
		// 	$this->load->model('M_subcont');
		// 	$data['list_jsa'] = $this->M_subcont->get_jsa();
		// 	// var_dump($data['list_jsa']);die;

		// 	$this->load->view('template/header');
		// 	$this->load->view('dashboard/v_dashboardJSA_PIC', $data);
		// 	$this->load->view('template/footer');
		// }

		// //buat fungsi yang akan digunakan untuk menampilkan dashboard JSA untuk orang ke3
		// public function dashboardJSA_EHS(){
		// 	$this->load->model('M_subcont');
		// 	$data['list_jsa'] = $this->M_subcont->get_jsa();
		// 	// var_dump($data['list_jsa']);die;

		// 	$this->load->view('template/header');
		// 	$this->load->view('dashboard/v_dashboardJSA_EHS', $data);
		// 	$this->load->view('template/footer');
		// }

		//================================================================================================================================

		//buat fungsi metode untuk lihat detail data subcont beserta jsa
		//function untuk menampilkan detail rekam medis pasien di menu rekam medis pasien role dokter
		// public function cekDetail($id_subcont){
		// 	//kirim ke view dalam bentuk array
		// 	$data = $this->M_subcont->getDetailIKS($id_subcont);
		// 	$this->data['subcont'] = $data['subcont'];
		// 	$this->data['jsa'] = $data['jsa'];

		// 	$this->load->view('template/header');
		// 	$this->load->view('dashboard/v_detail', $this->data);
		// 	$this->load->view('template/footer');
		// }

		public function cekDetail(){
			$this->load->view('template/header');

			$id_subcont = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$data['sbc']=$this->M_subcont->getSubcontById($id_subcont);

			// var_dump($data['sbc']);die;
			$this->load->view('dashboard/v_detail', $data);
			$this->load->view('template/footer');
		}

		// public function cetak_detail($id_subcont){
		// 	//load library
		// 	$this->load->library('dompdf_gen');

		// 	$data = $this->M_subcont->getDetailIKS($id_subcont);
		// 	$this->data['subcont'] = $data['subcont'];
		// 	$this->data['jsa'] = $data['jsa'];

		// 	$this->load->view('pdf/v_cetak_subcont', $this->data);

		// 	$paper_size = 'A4';
		// 	$orientation = 'potrait';

		// 	//get output html
		// 	$html = $this->output->get_output();
		// 	$this->dompdf->set_paper($paper_size, $orientation);

		// 	///convert to pdf
		// 	$this->dompdf->load_html($html);
		// 	$this->dompdf->render();
		// 	$this->dompdf->stream("Detail_Data_Subcont.pdf");
		// }//VERSI 1

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

		//================================================================================================================================
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

		//buat fungsi metode untuk lihat detail data subcont beserta jsa
		//function untuk menampilkan detail rekam medis pasien di menu rekam medis pasien role dokter
		// public function cekSecurity($id_subcont){
		// 	//kirim ke view dalam bentuk array
		// 	$data = $this->M_subcont->getDetailIKS($id_subcont);
		// 	$this->data['subcont'] = $data['subcont'];
		// 	$this->data['jsa'] = $data['jsa'];

		// 	$this->load->view('template/header');
		// 	$this->load->view('dashboard/v_detail_sec', $this->data);
		// 	$this->load->view('template/footer');
		// }

		public function cekSecurity(){
			$this->load->view('template/header');

			$id_subcont = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$data['sbc']=$this->M_subcont->getSubcontById($id_subcont);

			// var_dump($data['sbc']);die;
			$this->load->view('dashboard/v_detail_sec', $data);
			$this->load->view('template/footer');
		}



		//================================================================================================================================
		//buat metode untuk hapus data iks dengan id
		public function hapusDataById(){
			$id = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$this->M_subcont->hapusDataById($id);
		}


		//=================================================================================================================================
		//buat metode fungsi untuk perbarui data iks dan jsa
		public function perbaruiData($id){
			$id = $this->uri->segment(3);
			$dataSubcont = $this->M_subcont->getSubcontById($id);
			// var_dump($dataSubcont);die;


			// $dataSubcont = $this->M_subcont->getSubcontById($id);
			// $data['jsa'] = $this->M_subcont->getJSA($id);
			// var_dump($data['jsa']);die;
			// $dataLokasi = explode(', ', $dataSubcont['lokasi_pekerjaan']);
			// var_dump($dataLokasi);die;
			

			foreach($dataSubcont as $row){
				// $data['id_subcont'] = $row->id;
				//buat variabel untuk memecah string menjadi array kembali untuk lokasi pekerjaan
				$lokasi_pekerjaan = $row->lokasi_pekerjaan;
				$dataLokasi = explode(', ', $lokasi_pekerjaan);

				//buat variabel untuk memecah string menjadi array kembali untuk apd tambahan
				$apd_tambahan = $row->apd_tambahan;
				$dataAPDT = explode(', ', $apd_tambahan);

				//buat variabel untuk memecah string menjadi array kembali untuk kategori pekerjaan
				$kategori_pekerjaan = $row->kategori_pekerjaan;
				$dataKP = explode(', ', $kategori_pekerjaan);

				//buat variabel untuk syarat wajib di pecah menjadi array kembali
				$syaratWajib = explode(', ', $row->syarat_wajib);

				//buat variabel untuk memecah string menjadi array kembali untuk kategori pekerjaan
				$aspek = $row->aspek;
				$dataAspek = explode(', ', $aspek);
				// var_dump($dataAspek);die;

				//buat variabel untuk memecah string menjadi array kembali untuk kategori pekerjaan
				$dampak = $row->dampak;
				$dataDampak = explode(', ', $dampak);
				// var_dump($dataDampak);die;

				$dataAktivitas = explode(', ', $row->aktivitas_pekerjaan);

				
				
				
				$data['no_regis'] = $row->no_regis;  
				$data['tanggal_pengajuan'] = $row->tanggal_pengajuan;  
				$data['nama_perusahaan'] = $row->nama_perusahaan;  
				$data['alamat_perusahaan'] = $row->alamat_perusahaan;  
				$data['wkt_mulai'] = $row->wkt_mulai;  
				$data['wkt_selesai'] = $row->wkt_selesai;  
				$data['lokasi_pekerjaan'] = $dataLokasi;  
				$data['direktur_koordinat'] = $row->direktur_koordinat;  
				$data['pic_subcont'] = $row->pic_subcont;  
				$data['nohp_subcont'] = $row->nohp_subcont;  
				$data['jml_picsubcont'] = $row->jml_picsubcont;  
				$data['namamp_subcont'] = $row->namamp_subcont;  
				$data['pic_cbi'] = $row->pic_cbi; 
				$data['sie_pic_cbi'] = $row->sie_pic_cbi;  
				$data['nohp_cbi'] = $row->nohp_cbi;  
				$data['peralatan'] = $row->peralatan;  
				$data['apd_dipakai'] = $row->apd_dipakai;  
				$data['apd_tambahan'] = $dataAPDT;  
				$data['jenis_pekerjaan'] = $row->jenis_pekerjaan;
				$data['kategori_pekerjaan'] = $dataKP;
				$data['syarat_wajib'] = $syaratWajib;  
				$data['aktivitas_pekerjaan'] = $dataAktivitas;
				$data['aspek'] = $dataAspek;   
				$data['dampak'] = $dataDampak;   
			}

			//lanjut step jsa

			// $subcont_id = $this->M_subcont->update_IKSJSA('subcont',$data);

			// $data['jsa'] = $this->M_subcont->getJSA($id);
			// // var_dump($data['jsa']);die;

			// foreach($data as $list){

			// 	//buat variabel untuk memecah string menjadi array kembali
			// 	$dataAktivitas = explode(', ', $list->aktivitas_pekerjaan);


			// 	$data['aktivitas_pekerjaan'] = $dataAktivitas;

			// }


			

			
			$this->load->view('template/header');
			$this->load->view('dashboard/v_update', $data);
			$this->load->view('template/footer');
		}

	}
?>