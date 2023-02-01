<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model{
    
    //metode yang dibuat untuk mengambil data dari tabel subcont pada db secara keseluruhan
    public function get_subcont(){

        $query = $this->db->get('subcont');
        return $query->result();  
    }

    //buat metode yg berfungsi untuk mendapatkan data berdasarkan id yang ada
    public function getSubcontById($id_subcont){
        //fungsi ini berguna untuk mendapatkan satu persatu data
        //dengan memanggil id setiap data
        $query = $this->db->get_where('subcont', array('id_subcont' => $id_subcont));
    	return $query->result();
    }

    // buat metode untuk membuat nomor regis otomatis
    function get_noregis(){
        $q = $this->db->query("SELECT MAX(RIGHT(no_regis,4)) AS kd_max FROM iks WHERE DATE(tanggal_pengajuan)=CURDATE()");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('dmy').$kd;
    }

    // function TampilNoRegis() 
    // {
    //     $query = $this->db->get('iks');
    //     $this->db->order_by('no_regis', 'ASC');
    //     return $query->result();  
    // }  
        
    //==================================================================================================

    //bikin metod baru untuk query simpan izin kerja form ke db
    // public function simpan_data_IKS($postData){
        
    //     $run = $this->db->insert('subcont', $postData);
    //     if($run){
    //         echo("berhasil Simpan");
    //         // redirect('Home/form_jsa/'.$postData['id_subcont']);
    //     }else{
    //         echo("Gagal Simpan");
    //     }
    // }

    public function proses_simpan($postData){
        $run = $this->db->insert('iks', $postData);
        if($run == 1){
            redirect('Home/show_regis/');  
        }else{
            redirect('home/form_IKSJSA/');
        }
    }


    //==================================================================================================


    //bikin metod baru untuk query simpan izin kerja dan jsa form ke db
    // public function qsimpan_IKSJSA($postData, $dataJSA){
    //     $run = $this->db->insert('subcont', $postData);
    //     if($run){
    //         return $this->db->insert_id();
    //         $sql = $this->db->insert('jsa', $dataJSA);
    //         if($sql){
    //             redirect('Login/index');
    //         }
    //         // echo("Berhasil Kirim Data IKS ");
    //         // redirect('Login/index');
    //     }else{
    //         // echo("Gagal Kirim Data IKS ");
    //         redirect('Home/form_IKSJSA');
    //     }

    //     // return $this->db->insert_id();
    // }

    // function qsimpan_IKSJSA($postData ,$dataJSA){
    //     $query = $this->db->insert($postData, $dataJSA);
    //     return $this->db->insert_id();// return last insert id
    // }
    
    //buat metode untuk query simpan ke tabel jsa
    // public function insertJSA($dataJSA){
       
    //     if($sql){
    //          echo("dan Data JSA");
    //         // redirect('Login/index');
    //     }else{
    //         echo("Dan JSA");
    //         // redirect('Home/form_IKSJSA');
    //     }

    // }

}

?>