<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class M_Excel extends CI_Model {
        public function view_by_date($date){
            $this->db->where('DATE(wkt_mulai)', $date); // Tambahkan where tanggal nya
                
            return $this->db->get('iks')->result();// Tampilkan data subcont sesuai tanggal yang diinput oleh user pada filter
        }
            
        public function view_by_month($month, $year){
                $this->db->where('MONTH(wkt_mulai)', $month); // Tambahkan where bulan
                $this->db->where('YEAR(wkt_mulai)', $year); // Tambahkan where tahun
                
            return $this->db->get('iks')->result(); // Tampilkan data izin kerja sesuai bulan dan tahun yang diinput oleh user pada filter
        }
            
        public function view_by_year($year){
                $this->db->where('YEAR(wkt_mulai)', $year); // Tambahkan where tahun
                
            return $this->db->get('iks')->result(); // Tampilkan data izin kerja sesuai tahun yang diinput oleh user pada filter
        }
            
        public function view_all(){
            return $this->db->get('iks')->result(); // Tampilkan semua data izin kerja
        }
        
        public function option_tahun(){
            $this->db->select('YEAR(wkt_mulai) AS tahun'); // Ambil Tahun dari field tgl
            $this->db->from('iks'); // select ke tabel iks
            $this->db->order_by('YEAR(wkt_mulai)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
            $this->db->group_by('YEAR(wkt_mulai)'); // Group berdasarkan tahun pada field tgl
            
            return $this->db->get()->result(); // Ambil data pada tabel iks sesuai kondisi diatas
        }
    }
?>