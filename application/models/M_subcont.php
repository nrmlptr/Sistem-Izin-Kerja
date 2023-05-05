<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class M_subcont extends CI_Model{
        
        //metode yang dibuat untuk mengambil data dari tabel iks pada db secara keseluruhan
        public function get_subcont(){
            $this->db->order_by('id_subcont', 'DESC');
            $query = $this->db->get('iks');
            return $query->result();  
        }

        //metode untuk ambil data izin kerja yang aktif per hari ini saja pada role ehs
        public function getdataAktif(){
            $current_date = date("Y-m-d"); //buat ambil tanggal saat ini nantinya di bandingin sama tanggal di data

            $this->db->select('*');
            $this->db->from('iks');
            // $this->db->order_by('id_subcont', 'DESC');
            $this->db->where('iks.wkt_mulai',$current_date); //select agar data yang muncul hanya data yang sesuai dengan inputan tanggal saat tersebut
            $query = $this->db->get();
            return $query->result();  
        }

        //metode untuk tracking pengguna yang akses izin kerja baik untuk pic project atau ehs
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



//====================================================== GRAFIK SETTING  =============================================
        public function getdataTanggal(){
            $this->db->select('*');
            $this->db->from('iks');
            $this->db->distinct('tanggal_pengajuan');
            $this->db->group_by('tanggal_pengajuan'); // menambahkan group by
            $query = $this->db->get();
        
            $dataTanggal = array();
            foreach ($query->result() as $row) {
                $dataTanggal[] = array(
                    // 'material_id' => $row->material_id,
                    'tanggal_pengajuan' => $row->tanggal_pengajuan
                );
            }
        
            // var_dump($dataTanggal);die;
            return $dataTanggal;
        }

        // masih revisi karena kategori belum di case when
        // function getdataGrafik() {
        //     $this->db->select('tanggal_pengajuan, kategori_pekerjaan, COUNT(*) as jumlah');
        //     $this->db->from('iks');
        //     $this->db->group_by('tanggal_pengajuan, kategori_pekerjaan');
        //     $query = $this->db->get();
        
        //     $data = array();
        //     foreach ($query->result() as $row) {
        //         $data[] = array(
        //             'kategori_pekerjaan' => $row->kategori_pekerjaan,
        //             'tanggal_pengajuan' => $row->tanggal_pengajuan,
        //             'jumlah' => $row->jumlah
        //         );
        //     }
        
        //     return $data;
        // }

        //data tampil per 1 bulan sesuai dengan bulan saat ini
        function getdataGrafik(){
            $bulan_ini = date('Y-m'); // mendapatkan bulan saat ini dalam format YYYY-MM
            $this->db->select("tanggal_pengajuan, 
                       CASE 
                           WHEN kategori_pekerjaan = 'umum' THEN 'umum'
                           WHEN kategori_pekerjaan LIKE '%panas%' THEN 'libatkan panas'
                           WHEN kategori_pekerjaan LIKE '%ketinggian%' THEN 'libatkan ketinggian'
                           WHEN kategori_pekerjaan LIKE '%ruang terbatas%' THEN 'libatkan ruang terbatas'
                           WHEN kategori_pekerjaan LIKE '%listrik tegangan tinggi%' THEN 'libatkan listrik tegangan tinggi'
                           ELSE kategori_pekerjaan 
                       END AS kategori_pekerjaan, 
                       COUNT(*) as jumlah"
                    );
            $this->db->from('iks');
            $this->db->where('tanggal_pengajuan >=', $bulan_ini.'-01'); // memfilter data mulai dari tanggal 1 bulan ini
            $this->db->where('tanggal_pengajuan <', date('Y-m-d', strtotime($bulan_ini.'+1 month')).'-01'); // memfilter data sampai dengan tanggal 1 bulan depan
            $this->db->group_by('tanggal_pengajuan, kategori_pekerjaan');
            $query = $this->db->get();
        
            $data = array();
            foreach ($query->result() as $row) {
                $data[] = array(
                    'kategori_pekerjaan' => $row->kategori_pekerjaan,
                    'tanggal_pengajuan' => $row->tanggal_pengajuan,
                    'jumlah' => $row->jumlah
                );
            }
        
            return $data;
        }   


        //tampil grafik per bulan sesuai dg bulan yg di klik (untuk melihat history bulan sblmnya pd tabel detail)
        function getDetailGrafik($bulan)
        {
            $this->db->select("tanggal_pengajuan, 
                CASE 
                    WHEN kategori_pekerjaan = 'umum' THEN 'umum'
                    WHEN kategori_pekerjaan LIKE '%panas%' THEN 'libatkan panas'
                    WHEN kategori_pekerjaan LIKE '%ketinggian%' THEN 'libatkan ketinggian'
                    WHEN kategori_pekerjaan LIKE '%ruang terbatas%' THEN 'libatkan ruang terbatas'
                    WHEN kategori_pekerjaan LIKE '%listrik tegangan tinggi%' THEN 'libatkan listrik tegangan tinggi'
                    ELSE kategori_pekerjaan 
                END AS kategori_pekerjaan, 
                COUNT(*) as jumlah"
            );
            $this->db->from('iks');
            $this->db->where('MONTH(tanggal_pengajuan)', date('m', strtotime($bulan))); // memfilter data berdasarkan bulan
            $this->db->group_by('tanggal_pengajuan, kategori_pekerjaan');
            $query = $this->db->get();

            $data = array();
            foreach ($query->result() as $row) {
                $data[] = array(
                    'kategori_pekerjaan' => $row->kategori_pekerjaan,
                    'tanggal_pengajuan' => $row->tanggal_pengajuan,
                    'jumlah' => $row->jumlah
                );
            }

            return $data;
        }


        // model untuk detail tabel izin kerja yang disetujui dan tidak
        function getforTabel(){
            $this->db->select('MONTH(tanggal_pengajuan) AS bulan, 
                SUM(CASE WHEN status = "approved" THEN 1 ELSE 0 END) AS jumlah_approved, 
                SUM(CASE WHEN status = "rejected" THEN 1 ELSE 0 END) AS jumlah_rejected, 
                COUNT(*) AS jumlah_total');
            $this->db->from('iks');
            $this->db->group_by('bulan');
            $query = $this->db->get();

            $data = array();
            foreach ($query->result() as $row) {
                $nama_bulan = date('F', mktime(0, 0, 0, $row->bulan, 1, 2000));
                $data[] = array(
                    'bulan' => $nama_bulan,
                    'jumlah_approved' => $row->jumlah_approved,
                    'jumlah_rejected' => $row->jumlah_rejected,
                    'jumlah_total' => $row->jumlah_total
                );
            }


            return $data;

        }

        // model untuk detail izin kerja perbulan ada berapa based on kategori pekerjaan
        function getfordetailTabel(){
            $this->db->select("MONTH(tanggal_pengajuan) as bulan,
                SUM(CASE WHEN kategori_pekerjaan = 'umum' THEN 1 ELSE 0 END) as umum,
                SUM(CASE WHEN kategori_pekerjaan LIKE '%ketinggian%' THEN 1 ELSE 0 END) as libatkan_ketinggian,
                SUM(CASE WHEN kategori_pekerjaan LIKE '%panas%' THEN 1 ELSE 0 END) as libatkan_panas,
                SUM(CASE WHEN kategori_pekerjaan LIKE '%ruang terbatas%' THEN 1 ELSE 0 END) as libatkan_ruang_terbatas,
                SUM(CASE WHEN kategori_pekerjaan LIKE '%listrik tegangan tinggi%' THEN 1 ELSE 0 END) as libatkan_listrik_tegangan_tinggi
            ");
            $this->db->from('iks');
            // $this->db->where('MONTH(tanggal_pengajuan)', $id_bulan);
            $this->db->group_by('bulan');
            $this->db->order_by('bulan', 'asc');
            $query = $this->db->get();
        
            $data = array();
            foreach ($query->result() as $row) {
                $nama_bulan = date('F', mktime(0, 0, 0, $row->bulan, 1, 2000));
                $data[] = array(
                    // 'id' => $row->id,
                    'bulan' => $nama_bulan,
                    'umum' => $row->umum,
                    'libatkan_ketinggian' => $row->libatkan_ketinggian,
                    'libatkan_panas' => $row->libatkan_panas,
                    'libatkan_ruang_terbatas' => $row->libatkan_ruang_terbatas,
                    'libatkan_listrik_tegangan_tinggi' => $row->libatkan_listrik_tegangan_tinggi
                );
            }
        
            return $data;
        }        
    }

?>