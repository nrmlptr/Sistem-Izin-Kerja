<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_subcont extends CI_Model{
        
        //metode yang dibuat untuk mengambil data dari tabel iks pada db secara keseluruhan
        public function get_subcont(){
            $this->db->order_by('id_subcont', 'DESC');
            $query = $this->db->get('iks');
            return $query->result();  
        }

        public function getLogIKS($subcont_id){
            $this->db->select('log_time, log_user, log_tipe, log_desc');
            $this->db->from('tabel_log');
            $this->db->where('subcont_id', $subcont_id);
            $query = $this->db->get();
            return $query->result();
            // $query = $this->db->get('tabel_log');
            // return $query->result();  
        }

        //buat metode yg berfungsi untuk mendapatkan data berdasarkan id yang ada
        public function getSubcontById($id_subcont){
            //fungsi ini berguna untuk mendapatkan satu persatu data
            //dengan memanggil id setiap data
            $query = $this->db->get_where('iks', array('id_subcont' => $id_subcont));
            return $query->result();
        }

        //metode dibuat untuk ambil gambar yg ada ditabel gambar berdasarkan id subcont yg tercantum
        public function getGambar($subcont_id){
            $this->db->select('judul');
            $this->db->from('gambar');
            $this->db->where('subcont_id', $subcont_id);
            $query = $this->db->get();
            return $query->result();
        }
 
        //================================================================================================================================================================
        //buat metode baru untuk query mengisi data validasi oleh orang kedua (PIC)
        public function simpan_data_validasi($postData){
            $data = array(
                'validasi' => $postData['validasi'],
                'id_subcont' => $postData['id_subcont']
            );

            $this->db->where('id_subcont', $postData['id_subcont']);
            $run = $this->db->update('iks', $postData);

            // var_dump($postData);die;
            
            if($run){
                // echo "berhasil validasi";
                redirect('Dashboard/Konfirm_gambar');
            }else{
                echo "Gagal Validasi Data";
                redirect('Dashboard/prosesvalidasiData');
            }
        }
        //================================================================================================================================================================
        //insert gambar ke database tabel gambar 
        function proses_uploadgambar($data) {
            $this->db->insert('gambar', $data);
        }

        //================================================================================================================================================================
        //metode untuk ubah status dari draft jadi checked ketika gambar diupload ketabel gambar
        function updateChecked($id, $data) {
            $this->db->where('id_subcont', $id);
            $this->db->update('iks', $data);

            return $this->db->affected_rows();
        }

        //================================================================================================================================================================
        //buat metod baru untuk query ubah status dari checked jadi approved
        public function proses_setujuiform($data){
            
            $data = array(
                'status' => $_POST['status'],
                'id_subcont' => $data['id_subcont']
            );
            
            // var_dump($data);die;
            $this->db->where('id_subcont', $data['id_subcont']);
            $run = $this->db->update('iks', $data);

           //contoh panggil helper log
           if($_POST['status'] == 'approved'){
            helper_log("approved", "|| PIC EHS by ");
           }else{
            helper_log("rejected", "|| PIC EHS by ");
           };
          

           
           //silahkan di ganti2 aja kalimatnya
            // var_dump($data);die;
            if($run){
                redirect('Dashboard/konfirm_form');
            }else{
                echo "Gagal Menyetujui";
                redirect('Dashboard/prosesSetujui');
            }
        }

        //===================================================================================================================================
        //metode query untuk apus iksjsa by id
        public function hapusDataById($id){
            $this->db->delete('iks', array('id_subcont' => $id));
            redirect('dashboard/konfirm_form');
        }

        //================================================================================================================================================================
        //buat metod baru untuk query untuk beri tanda data sudah dibriefing
        public function proses_briefingform($data){
            $data = array(
                'require_ehs' => 'briefing',
                'id_subcont' => $data['id_subcont']
            );

            $this->db->where('id_subcont', $data['id_subcont']);
            $run = $this->db->update('iks', $data);

            // var_dump($data);die;
            if($run){
                redirect('Dashboard/konfirm_form');
            }else{
                echo "Gagal Menyetujui";
                redirect('Dashboard/prosesBriefing');
            }
        }



    }

?>