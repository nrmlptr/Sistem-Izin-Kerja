<html>
<head>
  <title>Export Excel Subcont</title>
    <!-- <script src="<?php echo base_url('assets/sbadmin/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" /> <!--Include file bootstrap.min.css-->
    <link href="<?php echo base_url('assets/sbadmin/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet"> <!-- Include file bootstrap-datepicker.min.css -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script> <!-- Load file jquery -->
</head>
<body style="padding: 0 20px;">
  <h2>Data Izin Kerja Subcont - PT CBI</h2><hr>
    <form method="get" action="">
        <div class="row">
      <div class="col-sm-3 col-md-2">
            <div class="form-group">
            <label>Filter Berdasarkan</label>
                <select name="filter" id="filter" class="form-control">
                    <option value="">Pilih</option>
                    <option value="1">Per Tanggal</option>
                    <option value="2">Per Bulan</option>
                    <option value="3">Per Tahun</option>
                </select>
            </div>
      </div>
    </div>
        <div class="row" id="form-tanggal">
      <div class="col-sm-3 col-md-2">
        <div class="form-group">
          <label>Tanggal</label>
                <input type="text" name="tanggal" class="form-control datepicker" autocomplete="off" />
        </div>
      </div>
    </div>
        <div class="row">
      <div class="col-sm-3 col-md-2" id="form-bulan">
        <div class="form-group">
          <label>Bulan</label>
          <select name="bulan" class="form-control">
                    <option value="">Pilih</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
        </div>
      </div>
      <div class="col-sm-3 col-md-2" id="form-tahun">
        <div class="form-group">
          <label>Tahun</label>
          <select name="tahun" class="form-control">
                    <option value="">Pilih</option>
                    <?php
            foreach($option_tahun as $data){ // Ambil data tahun dari model yang dikirim dari controller
              echo '<option value="'.$data->tahun.'">'.$data->tahun.'</option>';
            }
                    ?>
                </select>
        </div>
      </div>
    </div>
        <button type="submit" class="btn btn-primary">SHOW <i class="fa fa-eye"></i></button>
        <a href="index" class="btn btn-default">Reset Filter</a>
        <a href="<?= base_url('dashboard/konfirm_form');?>" class="btn btn-info">BACK <i class="fa fa-home"></i></a>
    </form>
    <hr />
    <b><?php echo $label; ?></b><br /><br />
    <a href="<?php echo $url_export; ?>" class="btn btn-success btn-xs">EXPORT DATA   <i class="fa fa-print"></i></a><br /><br />
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nomor Registrasi</th>
                <th scope="col">Nama Perusahaan</th>
                <th scope="col">Alamat Perusahaan</th>
                <th scope="col">Tanggal Mulai Bekerja</th>
                <th scope="col">Tanggal Selesai Bekerja</th>
                <th scope="col">Lokasi Pekerjaan</th>
                <th scope="col">Direktur Koordinat</th>
                <th scope="col">PIC Subcont</th>
                <th scope="col">No HP PIC Subcont</th>
                <th scope="col">Jumlah Pekerja PIC Subcont</th>
                <th scope="col">Nama(MP Subcont)</th>
                <th scope="col">PIC PT.CBI</th>
                <th scope="col">Seksie PIC PT.CBI</th>
                <th scope="col">No HP PIC PT.CBI</th>
                <th scope="col">Peralatan</th>
                <th scope="col">APD Wajib</th>
                <th scope="col">APD Tambahan</th>
                <th scope="col">Jenis Pekerjaan</th>
                <th scope="col">Kategori Pekerjaan</th>
                <th scope="col">Syarat Wajib</th>
                <th scope="col">Aktivitas Pekerjaan</th>
                <th scope="col">Aspek</th>
                <th scope="col">Dampak</th>
                <th scope="col">Standar Pengamanan</th>
                <th scope="col">Validasi</th>
                <th scope="col">Status</th>
                <th scope="col">Require PIC EHS</th>
            </tr>
            <?php
            if( ! empty($iks)){
            $no = 1;
            foreach($iks as $data){
                $tgl = date('d-m-Y', strtotime($data->wkt_mulai));
                $tgl2 = date('d-m-Y', strtotime($data->wkt_selesai));
                echo "<tr>";
                    echo "<td>".$no++."</td>";
                    echo "<td>".$data->no_regis."</td>";
                    echo "<td>".$data->nama_perusahaan."</td>";
                    echo "<td>".$data->alamat_perusahaan."</td>";
                    echo "<td>".$tgl."</td>";
                    echo "<td>".$tgl2."</td>";
                    echo "<td>".$data->lokasi_pekerjaan."</td>";
                    echo "<td>".$data->direktur_koordinat."</td>";
                    echo "<td>".$data->pic_subcont."</td>";
                    echo "<td>".$data->nohp_subcont."</td>";
                    echo "<td>".$data->jml_picsubcont."</td>";
                    echo "<td>".$data->namamp_subcont."</td>";
                    echo "<td>".$data->pic_cbi."</td>";
                    echo "<td>".$data->sie_pic_cbi."</td>";
                    echo "<td>".$data->nohp_cbi."</td>";
                    echo "<td>".$data->peralatan."</td>";
                    echo "<td>".$data->apd_dipakai."</td>";
                    echo "<td>".$data->apd_tambahan."</td>";
                    echo "<td>".$data->jenis_pekerjaan."</td>";
                    echo "<td>".$data->kategori_pekerjaan."</td>";
                    echo "<td>".$data->syarat_wajib."</td>";
                    echo "<td>".$data->aktivitas_pekerjaan."</td>";
                    echo "<td>".$data->aspek."</td>";
                    echo "<td>".$data->dampak."</td>";
                    echo "<td>".$data->standar_pengamanan."</td>";
                    echo "<td>".$data->validasi."</td>";
                    echo "<td>".$data->status."</td>";
                    echo "<td>".$data->require_ehs."</td>";

                echo "</tr>";
                // $no++;
            }
            }
            ?>
        </table>
    </div>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script> <!-- Load file bootstrap.min.js -->
    <script src="<?php echo base_url('assets/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script> <!-- Load file bootstrap-datepicker.min.js -->
    <script>
        $(document).ready(function(){ // Ketika halaman selesai di load
            setDatePicker() // Panggil fungsi setDatePicker
            $('#form-tanggal, #form-bulan, #form-tahun').hide(); // Sebagai default kita sembunyikan form filter tanggal, bulan & tahunnya
            $('#filter').change(function(){ // Ketika user memilih filter
                if($(this).val() == '1'){ // Jika filter nya 1 (per tanggal)
                    $('#form-bulan, #form-tahun').hide(); // Sembunyikan form bulan dan tahun
                    $('#form-tanggal').show(); // Tampilkan form tanggal
                }else if($(this).val() == '2'){ // Jika filter nya 2 (per bulan)
                    $('#form-tanggal').hide(); // Sembunyikan form tanggal
                    $('#form-bulan, #form-tahun').show(); // Tampilkan form bulan dan tahun
                }else{ // Jika filternya 3 (per tahun)
                    $('#form-tanggal, #form-bulan').hide(); // Sembunyikan form tanggal dan bulan
                    $('#form-tahun').show(); // Tampilkan form tahun
                }
                $('#form-tanggal input, #form-bulan select, #form-tahun select').val(''); // Clear data pada textbox tanggal, combobox bulan & tahun
            })
        })
        function setDatePicker(){
            $(".datepicker").datepicker({
            format: "yyyy-mm-dd",
            todayHighlight: true,
            autoclose: true
            }).attr("readonly", "readonly").css({"cursor":"pointer", "background":"white"});
        }
    </script>
</table>
</body>
</html>



