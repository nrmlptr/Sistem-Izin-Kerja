<?php

	class Home extends CI_Controller{
        function __construct(){
            parent::__construct();
            $this->load->model('M_home');
        }

		public function index(){
			$this->load->view('template/header');
			$this->load->view('template/dashboard');
			$this->load->view('template/footer');
		}

		//=====================================================================================================================================
		//buat metod untuk tampilkan form IKSJA
		public function form_IKSJSA(){
			$x['no_regis']=$this->M_home->get_noregis();

			// $this->load->view('template/header');
			$this->load->view('home/v_form_IKSJSA', $x);
			// $this->load->view('home/v_form_IKSJSA');
			// $this->load->view('template/footer');
		}

		//======================================================================================================================================

		//buat metode untuk proses simpan
		public function simpan_data(){
			$this->load->model('M_home');

			// var_dump(implode(', ', $_POST['syarat_wajib']));die;

			$postData = $_POST;

			$syaratWajib = implode(', ', $postData['syarat_wajib']);

			$NamaPS = implode(', ', $postData['namamp_subcont']);

			// //Buat variabel postdata dengan array apd_tambahan agar bisa save apd tambahan 
			$postData['apd_tambahan'] = implode(', ', $_POST['apd_tambahan']);

			// //Buat variabel postdata dengan array untuk lokasi_pekerjaan agar bisa save ke db 
			$postData['lokasi_pekerjaan'] = implode(', ', $_POST['lokasi_pekerjaan']);

			// //Buat variabel postdata dengan array untuk lokasi_pekerjaan agar bisa save ke db 
			$postData['kategori_pekerjaan'] = implode(', ', $_POST['kategori_pekerjaan']);

			// //Buat variabel postdata dengan array untuk lokasi_pekerjaan agar bisa save ke db 
			$postData['aspek'] = implode(', ', $_POST['aspek']);

			// //Buat variabel postdata dengan array untuk lokasi_pekerjaan agar bisa save ke db 
			$postData['dampak'] = implode(', ', $_POST['dampak']);
			
			// //Buat variabel postdata dengan array untuk lokasi_pekerjaan agar bisa save ke db 
			$postData['aktivitas_pekerjaan'] = implode(', ', $_POST['aktivitas_pekerjaan']);

			// //Buat variabel postdata dengan array untuk lokasi_pekerjaan agar bisa save ke db 
			$postData['standar_pengamanan'] = implode(', ', $_POST['standar_pengamanan']);


			
			// var_dump($postData['kategori_pekerjaan']);die;

			$data = array(
				'id_subcont' => $postData['id_subcont'],
				'no_regis' =>$postData['no_regis'],
				'tanggal_pengajuan' =>$postData['tanggal_pengajuan'],
				'nama_perusahaan' => $postData['nama_perusahaan'],
				'alamat_perusahaan' =>$postData['alamat_perusahaan'],
				'wkt_mulai' => $postData['wkt_mulai'],
				'wkt_selesai' => $postData['wkt_selesai'],
				'lokasi_pekerjaan' => $postData['lokasi_pekerjaan'],
				'direktur_koordinat' => $postData['direktur_koordinat'],
				'pic_subcont' => $postData['pic_subcont'],
				'nohp_subcont' => $postData['nohp_subcont'],
				'jml_picsubcont'=> $postData['jml_picsubcont'],
				'namamp_subcont' => $NamaPS,
				'pic_cbi' => $postData['pic_cbi'],
				'sie_pic_cbi' => $postData['sie_pic_cbi'],
				'nohp_cbi' => $postData['nohp_cbi'],
				'peralatan' => $postData['peralatan'],
				'apd_dipakai' => $postData['apd_dipakai'],
				'apd_tambahan' => $postData['apd_tambahan'],
				'jenis_pekerjaan' => $postData['jenis_pekerjaan'],
				'kategori_pekerjaan' => $postData['kategori_pekerjaan'],
				'syarat_wajib' => $syaratWajib,
				'aktivitas_pekerjaan' => $postData['aktivitas_pekerjaan'],
				'aspek' => $postData['aspek'],
				'dampak' => $postData['dampak'],
				'standar_pengamanan' => $postData['standar_pengamanan'],
				'require_ehs' =>'',
				'status' => 'draft'
			);
			
			// var_dump($data);die;

			$this->M_home->proses_simpan($data);
		}

		public function show_regis(){
			// $no_regis = $this->M_home->TampilNoRegis();
			// $this->data['no_regis'] = $no_regis;
			// var_dump($no_regis);die;
			// $this->template->load('template', 'berobat/v_antrian', $this->data);
			// $this->load->view('home/v_noreg', $this->data);
			$this->load->view('home/v_noreg');
		}


		//============================================================buat fungsi untuk tracking data izin kerja tanpa login ===================
		public function traceIK(){
			// $this->load->model('M_subcont');
			// $data['dataIK'] = $this->M_subcont->get_subcont();
			// // var_dump($data['dataIK']);die;

			// $this->load->view('template/headers');
			// $this->load->view('dashboard/v_trace', $data);
			// $this->load->view('template/footer');

			$this->load->model('M_home');
			$keyword = $this->input->get('keyword');
			$data = $this->M_home->ambil_data($keyword);
			$data = array(
				'keyword'	=> $keyword,
				'data'		=> $data
			);

			// var_dump($data);die;

			$this->load->view('template/headers');
			$this->load->view('home/v_trace', $data);
			$this->load->view('template/footer');
			// $this->load->view('search',$data);
		}

		//buat fungsi metode untuk lihat detail data iks beserta jsa pada role subcont tanpa perlu login
		public function detailTrace(){
			$this->load->view('template/headers');

			$id_subcont = $this->uri->segment(3);
			$this->load->model("M_subcont");
			$data['ik']=$this->M_subcont->getSubcontById($id_subcont);

			// var_dump($data['ik']);die;
			$this->load->view('dashboard/v_detailTrace', $data);
			$this->load->view('template/footer');
		}
		

	}
?>