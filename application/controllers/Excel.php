<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Excel extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('M_Excel');
        }

        public function index(){
            if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                $filter = $_GET['filter']; // Ambil data filter yang dipilih user
                if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                    $tgl = $_GET['tanggal'];
                    $label = 'Data Subcont Tanggal '.date('d-m-y', strtotime($tgl));
                    $url_export = 'excel/export?filter=1&tanggal='.$tgl;
                    $iks = $this->M_Excel->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di Model Excel
                }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                    $bulan = $_GET['bulan'];
                    $tahun = $_GET['tahun'];
                    $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                    $label = 'Data Subcont Bulan '.$nama_bulan[$bulan].' '.$tahun;
                    $url_export = 'excel/export?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                    $iks = $this->M_Excel->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di Model Excel
                }else{ // Jika filter nya 3 (per tahun)
                    $tahun = $_GET['tahun'];
                    $label = 'Data Subcont Tahun '.$tahun;
                    $url_export = 'excel/export?filter=3&tahun='.$tahun;
                    $iks = $this->M_Excel->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di Model Excel
                }
            }else{ // Jika user tidak mengklik tombol tampilkan
                $label = 'Semua Data Subcont';
                $url_export = 'excel/export';
                $iks = $this->M_Excel->view_all(); // Panggil fungsi view_all yang ada di Model Excel
            }
            $data['label'] = $label;
            $data['url_export'] = base_url('index.php/'.$url_export);
            $data['iks'] = $iks;
            $data['option_tahun'] = $this->M_Excel->option_tahun();
            $this->load->view('excel/v_excels', $data);
        }


        public function export(){
            // Load plugin PHPExcel nya
            include APPPATH.'third_party/PHPExcel/PHPExcel.php';
            // Panggil class PHPExcel nya
            $excel = new PHPExcel();
            // Settingan awal file excel
            $excel->getProperties()->setCreator('EHS Dept')
                    ->setLastModifiedBy('EHS Dept')
                    ->setTitle("Data Subcont")
                    ->setSubject("Subcont")
                    ->setDescription("Laporan Semua Data Subcont")
                    ->setKeywords("Data Subcont");
            // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
            $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
            );
            // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
            $style_row = array(
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
            );
            if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
                $filter = $_GET['filter']; // Ambil data filter yang dipilih user
                if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                    $tgl = $_GET['tanggal'];
                    $label = 'Data Subcont Tanggal '.date('d-m-y', strtotime($tgl));
                    $iks = $this->M_Excel->view_by_date($tgl); // Panggil fungsi view_by_date yang ada di Model Excel
                }else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                    $bulan = $_GET['bulan'];
                    $tahun = $_GET['tahun'];
                    $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                    $label = 'Data Subcont Bulan '.$nama_bulan[$bulan].' '.$tahun;
                    $iks = $this->M_Excel->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di Model Excel
                }else{ // Jika filter nya 3 (per tahun)
                    $tahun = $_GET['tahun'];
                    $label = 'Data Subcont Tahun '.$tahun;
                    $iks = $this->M_Excel->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di Model Excel
                }
            }else{ // Jika user tidak mengklik tombol tampilkan
                $label = 'Semua Data Subcont';
                $iks = $this->M_Excel->view_all(); // Panggil fungsi view_all yang ada di Model Excel
            }
            $excel->setActiveSheetIndex(0);
            $excel->getActiveSheet()->setCellValue('A1', "DATA IZIN KERJA SUBCONT"); // Set kolom A1 dengan tulisan "DATA IZIN KERJA SUBCONT"
            $excel->getActiveSheet()->mergeCells('A1:E1'); // Set Merge Cell pada kolom A1 sampai E1
            $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
            $excel->getActiveSheet()->setCellValue('A2', $label); // Set kolom A2 sesuai dengan yang pada variabel $label
            $excel->getActiveSheet()->mergeCells('A2:E2'); // Set Merge Cell pada kolom A2 sampai E2
            // Buat header tabel nya pada baris ke 4
            $excel->getActiveSheet()->setCellValue('A4', "No Registrasi"); // Set kolom A4 dengan tulisan "No Registrasi"
            $excel->getActiveSheet()->setCellValue('B4', "Nama Perusahaan"); // Set kolom A4 dengan tulisan "Nama Perusahaan"
            $excel->getActiveSheet()->setCellValue('C4', "Alamat Perusahaan"); // Set kolom B4 dengan tulisan "Alamat Perusahaan"
            $excel->getActiveSheet()->setCellValue('D4', "Tanggal Mulai Bekerja"); // Set kolom C4 dengan tulisan "Tanggal Mulai Bekerja"
            $excel->getActiveSheet()->setCellValue('E4', "Tanggal Selesai Bekerja"); // Set kolom D4 dengan tulisan "Tanggal Selesai Bekerja"
            $excel->getActiveSheet()->setCellValue('F4', "Lokasi Pekerjaan"); // Set kolom E4 dengan tulisan "Lokasi Pekerjaan"
            $excel->getActiveSheet()->setCellValue('G4', "Direktur Koordinat"); // Set kolom A4 dengan tulisan "Direktur Koordinat"
            $excel->getActiveSheet()->setCellValue('H4', "Nama PIC Subcont"); // Set kolom B4 dengan tulisan "Nama PIC Subcont"
            $excel->getActiveSheet()->setCellValue('I4', "Nomor HP PIC Subcont"); // Set kolom A4 dengan tulisan "Nomor HP PIC Subcont"
            $excel->getActiveSheet()->setCellValue('J4', "Jumlah Pekerja Subcont"); // Set kolom C4 dengan tulisan "Jumlah Pekerja Subcont"
            $excel->getActiveSheet()->setCellValue('K4', "Nama(MP) Subcont"); // Set kolom D4 dengan tulisan "Nama(MP) Subcont"
            $excel->getActiveSheet()->setCellValue('L4', "Nama PIC PT.CBI"); // Set kolom E4 dengan tulisan "Nama PIC PT.CBI"
            $excel->getActiveSheet()->setCellValue('M4', "Seksie PIC PT.CBI"); // Set kolom A4 dengan tulisan "Seksie PIC PT.CBI"
            $excel->getActiveSheet()->setCellValue('N4', "Nomor HP PIC PT.CBI"); // Set kolom B4 dengan tulisan "Nomor HP PIC PT.CBI"
            $excel->getActiveSheet()->setCellValue('O4', "Peralatan"); // Set kolom C4 dengan tulisan "Peralatan"
            $excel->getActiveSheet()->setCellValue('P4', "APD Wajib"); // Set kolom D4 dengan tulisan "APD Wajib"
            $excel->getActiveSheet()->setCellValue('Q4', "APD Tambahan"); // Set kolom E4 dengan tulisan "APD Tambahan"
            $excel->getActiveSheet()->setCellValue('R4', "Jenis Pekerjaan"); // Set kolom A4 dengan tulisan "Jenis Pekerjaan"
            $excel->getActiveSheet()->setCellValue('S4', "Kategori Pekerjaan"); // Set kolom B4 dengan tulisan "Kategori Pekerjaan"
            $excel->getActiveSheet()->setCellValue('T4', "Syarat Wajib"); // Set kolom C4 dengan tulisan "Syarat Wajib"
            $excel->getActiveSheet()->setCellValue('U4', "Aktivitas Pekerjaan"); // Set kolom B4 dengan tulisan "Kategori Pekerjaan"
            $excel->getActiveSheet()->setCellValue('V4', "Aspek"); // Set kolom C4 dengan tulisan "Syarat Wajib"
            $excel->getActiveSheet()->setCellValue('W4', "Dampak"); // Set kolom B4 dengan tulisan "Kategori Pekerjaan"
            $excel->getActiveSheet()->setCellValue('X4', "Standar Pengamanan"); // Set kolom C4 dengan tulisan "Syarat Wajib"
            $excel->getActiveSheet()->setCellValue('Y4', "Validasi"); // Set kolom B4 dengan tulisan "Validasi"
            $excel->getActiveSheet()->setCellValue('Z4', "Status"); // Set kolom C4 dengan tulisan "Status"
            // Apply style header yang telah kita buat tadi ke masing-masing kolom header
            $excel->getActiveSheet()->getStyle('A4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('B4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('C4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('D4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('E4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('F4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('G4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('H4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('I4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('J4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('K4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('L4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('M4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('N4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('O4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('P4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('Q4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('R4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('S4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('T4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('U4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('V4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('W4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('X4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('Y4')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('Z4')->applyFromArray($style_col);
            // Set height baris ke 1, 2, 3 dan 4
            $excel->getActiveSheet()->getRowDimension('1')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('2')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('3')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('4')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('5')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('6')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('7')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('8')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('9')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('10')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('11')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('12')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('13')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('14')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('15')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('16')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('17')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('18')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('19')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('20')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('21')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('22')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('23')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('24')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('25')->setRowHeight(20);
            $excel->getActiveSheet()->getRowDimension('26')->setRowHeight(20);
            $no = 1; // Untuk penomoran tabel, di awal set dengan 1
            $numrow = 5; // Set baris pertama untuk isi tabel adalah baris ke 5
            foreach($iks as $data){ // Lakukan looping pada variabel subcont
                $tgl = date('d-m-Y', strtotime($data->wkt_mulai)); // Ubah format tanggal jadi dd-mm-yyyy
                $tgl2 = date('d-m-Y', strtotime($data->wkt_selesai)); // Ubah format tanggal jadi dd-mm-yyyy
                $excel->getActiveSheet()->setCellValue('A'.$numrow, $data->no_regis);
                $excel->getActiveSheet()->setCellValue('B'.$numrow, $data->nama_perusahaan);
                $excel->getActiveSheet()->setCellValue('C'.$numrow, $data->alamat_perusahaan);
                $excel->getActiveSheet()->setCellValue('D'.$numrow, $tgl);
                $excel->getActiveSheet()->setCellValue('E'.$numrow, $tgl2);
                $excel->getActiveSheet()->setCellValue('F'.$numrow, $data->lokasi_pekerjaan);
                $excel->getActiveSheet()->setCellValue('G'.$numrow, $data->direktur_koordinat);
                $excel->getActiveSheet()->setCellValue('H'.$numrow, $data->pic_subcont);
                $excel->getActiveSheet()->setCellValue('I'.$numrow, $data->nohp_subcont);
                $excel->getActiveSheet()->setCellValue('J'.$numrow, $data->jml_picsubcont);
                $excel->getActiveSheet()->setCellValue('K'.$numrow, $data->namamp_subcont);
                $excel->getActiveSheet()->setCellValue('L'.$numrow, $data->pic_cbi);
                $excel->getActiveSheet()->setCellValue('M'.$numrow, $data->sie_pic_cbi);
                $excel->getActiveSheet()->setCellValue('N'.$numrow, $data->nohp_cbi);
                $excel->getActiveSheet()->setCellValue('O'.$numrow, $data->peralatan);
                $excel->getActiveSheet()->setCellValue('P'.$numrow, $data->apd_dipakai);
                $excel->getActiveSheet()->setCellValue('Q'.$numrow, $data->apd_tambahan);
                $excel->getActiveSheet()->setCellValue('R'.$numrow, $data->jenis_pekerjaan);
                $excel->getActiveSheet()->setCellValue('S'.$numrow, $data->kategori_pekerjaan);
                $excel->getActiveSheet()->setCellValue('T'.$numrow, $data->syarat_wajib);
                $excel->getActiveSheet()->setCellValue('U'.$numrow, $data->aktivitas_pekerjaan);
                $excel->getActiveSheet()->setCellValue('V'.$numrow, $data->aspek);
                $excel->getActiveSheet()->setCellValue('W'.$numrow, $data->dampak);
                $excel->getActiveSheet()->setCellValue('X'.$numrow, $data->standar_pengamanan);
                $excel->getActiveSheet()->setCellValue('Y'.$numrow, $data->validasi);
                $excel->getActiveSheet()->setCellValue('Z'.$numrow, $data->status);
                // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
                $excel->getActiveSheet()->getStyle('A'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('B'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('C'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('D'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('F'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('G'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('H'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('I'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('J'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('K'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('L'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('M'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('N'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('O'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('P'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('Q'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('R'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('S'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('T'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('U'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('V'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('W'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('X'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('Y'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('Z'.$numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getRowDimension($numrow)->setRowHeight(20);
                $no++; // Tambah 1 setiap kali looping
                $numrow++; // Tambah 1 setiap kali looping
            }
            // Set width kolom
            $excel->getActiveSheet()->getColumnDimension('A')->setWidth(15); // Set width kolom A
            $excel->getActiveSheet()->getColumnDimension('B')->setWidth(18); // Set width kolom B
            $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
            $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
            $excel->getActiveSheet()->getColumnDimension('E')->setWidth(20); // Set width kolom E
            $excel->getActiveSheet()->getColumnDimension('F')->setWidth(20); // Set width kolom E
            $excel->getActiveSheet()->getColumnDimension('G')->setWidth(15); // Set width kolom A
            $excel->getActiveSheet()->getColumnDimension('H')->setWidth(18); // Set width kolom B
            $excel->getActiveSheet()->getColumnDimension('I')->setWidth(25); // Set width kolom C
            $excel->getActiveSheet()->getColumnDimension('J')->setWidth(20); // Set width kolom D
            $excel->getActiveSheet()->getColumnDimension('K')->setWidth(20); // Set width kolom E
            $excel->getActiveSheet()->getColumnDimension('L')->setWidth(15); // Set width kolom A
            $excel->getActiveSheet()->getColumnDimension('M')->setWidth(18); // Set width kolom B
            $excel->getActiveSheet()->getColumnDimension('N')->setWidth(25); // Set width kolom C
            $excel->getActiveSheet()->getColumnDimension('O')->setWidth(20); // Set width kolom D
            $excel->getActiveSheet()->getColumnDimension('P')->setWidth(20); // Set width kolom E
            $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(15); // Set width kolom A
            $excel->getActiveSheet()->getColumnDimension('R')->setWidth(18); // Set width kolom B
            $excel->getActiveSheet()->getColumnDimension('S')->setWidth(25); // Set width kolom C
            $excel->getActiveSheet()->getColumnDimension('T')->setWidth(20); // Set width kolom D
            $excel->getActiveSheet()->getColumnDimension('U')->setWidth(20); // Set width kolom E
            $excel->getActiveSheet()->getColumnDimension('V')->setWidth(20); // Set width kolom D
            $excel->getActiveSheet()->getColumnDimension('w')->setWidth(25); // Set width kolom C
            $excel->getActiveSheet()->getColumnDimension('x')->setWidth(20); // Set width kolom D
            $excel->getActiveSheet()->getColumnDimension('y')->setWidth(20); // Set width kolom E
            $excel->getActiveSheet()->getColumnDimension('z')->setWidth(20); // Set width kolom D
            // Set orientasi kertas jadi LANDSCAPE
            $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
            // Set judul file excel nya
            $excel->getActiveSheet()->setTitle("Laporan Data Subcont");
            $excel->getActiveSheet();
            // Proses file excel
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="Data Subcont.xls"'); // Set nama file excel nya
            header('Cache-Control: max-age=0');
            $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
            $write->save('php://output');
        }
    }
?>