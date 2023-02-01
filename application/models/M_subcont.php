<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_subcont extends CI_Model{
        
        //metode yang dibuat untuk mengambil data dari tabel iks pada db secara keseluruhan
        public function get_subcont(){

            $query = $this->db->get('iks');
            return $query->result();  
        }

        //buat metode yg berfungsi untuk mendapatkan data berdasarkan id yang ada
        public function getSubcontById($id_subcont){
            //fungsi ini berguna untuk mendapatkan satu persatu data
            //dengan memanggil id setiap data
            $query = $this->db->get_where('iks', array('id_subcont' => $id_subcont));
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
        //metode fungsi untuk memproses gambar yg akan di upload dan mengubah status dari draft, menjadi checked
        public function proses_uploadgambar($data){
            $data = array(
                'gambar' => $data['gambar'],
                'status' => 'checked',
                'id_subcont' => $data['id_subcont']
            );

            $this->db->where('id_subcont', $data['id_subcont']);
            $run = $this->db->update('iks', $data);

            if($run){
                redirect('Dashboard/konfirm_gambar');
            }else{
                echo "Gagal Upload Gambar";
                redirect('Dashboard/proseskonfirmGambar');
            }
        }

        //================================================================================================================================================================
        //buat metod baru untuk query ubah status dari checked jadi approved
        public function proses_setujuiform($data){
            $data = array(
                'status' => 'approved',
                'id_subcont' => $data['id_subcont']
            );

            $this->db->where('id_subcont', $data['id_subcont']);
            $run = $this->db->update('iks', $data);

            // var_dump($data);die;
            if($run){
                redirect('Dashboard/konfirm_form');
            }else{
                echo "Gagal Menyetujui";
                redirect('Dashboard/prosesSetujui');
            }
        }

        // ================================================================================================================================================================
        //metode yang dibuat untuk mengambil data dari tabel jsa pada db secara keseluruhan
        //jangan lupa join karena diambil dari beberpa tabel
        // public function get_jsa(){
        //     $this->db->select('jsa.*, jsa.aktivitas_pekerjaan as aktivitas, subcont.no_regis,subcont.tanggal_pengajuan,subcont.nama_perusahaan,subcont.alamat_perusahaan,subcont.wkt_mulai,subcont.wkt_selesai,subcont.direktur_koordinat,subcont.pic_cbi,subcont.jenis_pekerjaan');
        //     $this->db->from('jsa');
        //     $this->db->join('subcont','subcont.id_subcont = jsa.subcont_id');
        //     return $this->db->get()->result_array();
        // }
        
        // ================================================================================================================================================================
        //buat metode query untuk mengambil data detail pada tabel subcont dan jsa
        // public function getDetailIKS($id_subcont){
        //     //mengambil data dari dokter yg skrg sedang aktif
        //     $this->db->select('iks.*, iks.aktivitas_pekerjaan as aktivitas, subcont.no_regis,subcont.tanggal_pengajuan,subcont.nama_perusahaan,subcont.alamat_perusahaan,subcont.wkt_mulai,subcont.wkt_selesai,subcont.direktur_koordinat,subcont.pic_cbi,subcont.jenis_pekerjaan,subcont.lokasi_pekerjaan,subcont.nohp_subcont,subcont.sie_pic_cbi,subcont.nohp_cbi');
        //     $this->db->from('jsa');
        //     $this->db->join('subcont','subcont.id_subcont = jsa.subcont_id');
        //     $this->db->where(['subcont.id_subcont' => $id_subcont]);
        //     $jsa = $this->db->get()->row_array();
    
        //     $subcont = $this->db->get_where('subcont', ['id_subcont' => $id_subcont])->row_array();
                
        //     return ['subcont' => $subcont, 'jsa' => $jsa];
        // }

        //=================================================================================================================================
        //buat metode query untuk mengambil data dari tabel subcont dan tabel jsa 
        //jadi yang nantinya muncul di view itu data subcont yang ada foreign dengan jsa, jika tidak, maka tidak akan muncul.
        // public function get_all_data(){
        //     $this->db->select('jsa.*, jsa.aktivitas_pekerjaan as aktivitas, subcont.no_regis,subcont.tanggal_pengajuan,subcont.nama_perusahaan,subcont.alamat_perusahaan,subcont.wkt_mulai,subcont.wkt_selesai,subcont.lokasi_pekerjaan,subcont.direktur_koordinat,subcont.pic_subcont,subcont.nohp_subcont,subcont.jml_picsubcont,subcont.namamp_subcont,subcont.pic_cbi,subcont.sie_pic_cbi,subcont.nohp_cbi,subcont.peralatan,subcont.apd_dipakai,subcont.apd_tambahan,subcont.jenis_pekerjaan,subcont.kategori_pekerjaan,subcont.syarat_wajib,subcont.validasi,subcont.status');
        //     $this->db->from('jsa');
        //     $this->db->join('subcont','subcont.id_subcont = jsa.subcont_id');
        //     return $this->db->get()->result_array();
        // }

        //===================================================================================================================================
        public function hapusDataById($id){
            $this->db->delete('iks', array('id_subcont' => $id));
            redirect('dashboard/konfirm_form');
        }

        //membuat fungsi metode query untuk dapat data dari tabel jsa
        // public function getJSA($id_subcont){
        //     $query = $this->db->get_where('jsa', array('subcont_id' => $id_subcont));
        //     return $query->result_array();
        //     // $query = $this->db->get('jsa');
        //     // return $query->result();  
        // }

        // function TampilIKSJSA($id_subcont) 
        // {
        //     $this->db->order_by('subcont_id', 'ASC');
        //     return $this->db->from('jsa')
        //     ->join('subcont', 'subcont.id_subcont=jsa.subcont_id')
        //     ->get()
        //     ->result();
        // }  



    }

?>