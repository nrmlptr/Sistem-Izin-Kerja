<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model{

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
    //buat metode untuk simpan data iksjsa yg sudah diisi subcont
    public function proses_simpan($postData){
        $run = $this->db->insert('iks', $postData);
        if($run == 1){
            redirect('Home/show_regis/');  
        }else{
            redirect('home/form_IKSJSA/');
        }
    }


    //==================================================================================================
    public function ambil_data($keyword=null){
		// $this->db->select('*');
        $this->db->distinct();
		$this->db->from('iks');
		if(!empty($keyword)){
			$this->db->like('no_regis',$keyword);
		}
		return $this->db->get()->result_array();
	}
}

?>