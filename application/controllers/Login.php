<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Login extends CI_Controller {

		public function index()
		{
			$this->load->view('auth/v_login.php');
		}

		//=============================================================================================================================
		//metode yang dibuat berfungsi untuk memvalidasi apakah data yang dimasukan ketika login benar ada atau tidak
		public function verifyLogin(){
			//inputan oleh user
			$username =  $this->input->post('username');
			$password =  $this->input->post('upass');


			//bandingkan inputan dengan data tersimpan dalam DB
			$this->load->model('M_login');
			$getUser = $this->M_login->verifyAkun($username,$password);
			//var_dump($getUser);die;
			if(!$getUser){
				redirect('Login/index');    //kondisi jika data username dan pw tidak ada dalm tabel users di db, maka akan diarahkan kembali pada halaman login (tidak bisa akses dashboard)
			}else{
				// echo "Berhasil Masuk";
				$datauser = array(
					'username' => $username,
					'akses' => $getUser->akses,
					'logged_in' => TRUE
				);

				$this->session->set_userdata($datauser);  //buat session untuk hak izin akses
				// redirect('Dashboard/table');


				//buat 
				if($getUser->akses == 1){
				    redirect('Dashboard/konfirm_gambar');
				}elseif($getUser->akses == 2){
				    redirect('Dashboard/konfirm_form');
				}elseif($getUser->akses == 3){
				    redirect('Dashboard/konfirm_subcont');
				}
			}
		}

		//=============================================================================================================================================================================================
		public function logout(){
			$this->session->sess_destroy();
			redirect('Login/index');
		}



	}

?>