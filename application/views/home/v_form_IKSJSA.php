<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>FORM Izin Kerja Subcont - PT CBI</title>
        <style>
            body{ 
            margin-top:40px; 
            }

            .stepwizard-step p {
                margin-top: 10px;
            }

            .stepwizard-row {
                display: table-row;
            }

            .stepwizard {
                display: table;
                width: 100%;
                position: relative;
            }

            .stepwizard-step button[disabled] {
                opacity: 1 !important;
                filter: alpha(opacity=100) !important;
            }

            .stepwizard-row:before {
                top: 14px;
                bottom: 0;
                position: absolute;
                content: " ";
                width: 100%;
                height: 1px;
                background-color: #ccc;
                z-order: 0;

            }

            .stepwizard-step {
                display: table-cell;
                text-align: center;
                position: relative;
            }

            .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
            }
            
            input{
             display: block;
            }
        </style>

        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url('assets/sbadmin/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <!-- <link href="<?php echo base_url('assets/bootstrap/');?>css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="<?php echo base_url('assets/sbadmin/');?>css/sb-admin-2.min.css" rel="stylesheet">
        <script src="<?php echo base_url('assets/sbadmin');?>/js/sweetalert2.all.min.js"></script>
    </head>

    <body class="bg-gradient-white">

        <div class="container">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" style="color: black;"style="color: black;"type="button" class="btn btn-primary btn-circle">1</a>
                        <p style="color: black;">IKS Form</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" style="color: black;"type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p style="color: black;">JSA Form</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" style="color: black;"type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p style="color: black;">Finish</p>
                    </div>
                </div>
            </div>
            <form role="form" id="form" action="<?php echo base_url('Home/simpan_data');?>" method="POST" name="formIKSJSA">
                <input type="hidden" name="id_subcont">
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3 style="color:black;"> Step 1 : IKS Form</h3>
                            <small style="color: red;">Pastikan Mengisi Semua Formulir dengan Sesuai, Hindari Kesalahan dalam Pengisian Formulir.</small>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Nomor Registrasi</label>
                                <input type="text" name="no_regis" value="<?php echo $no_regis?>" class="form-control col-sm-4" id="no_regis" readonly/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Tanggal Pengisian Form</label>
                                <input type="date" name="tanggal_pengajuan" class="form-control col-sm-5" id="tanggal_pengajuan" for="tanggal_pengajuan" value="<?php echo date("Y-m-d");?>" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Nama Perusahaan</label><font color="red">*</font>
                                <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" for="nama_perusahaan" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Alamat Perusahaan</label><font color="red">*</font>
                                <textarea class="form-control" id="alamat_perusahaan" for="alamat_perusahaan" name="alamat_perusahaan" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Tanggal Mulai Bekerja</label><font color="red">*</font>
                                <input type="date" name="wkt_mulai" class="form-control col-sm-5" id="wkt_mulai" for="wkt_mulai" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Tanggal Selesai Bekerja</label><font color="red">*</font>
                                <input type="date" name="wkt_selesai" class="form-control col-sm-5" id="wkt_selesai" for="wkt_selesai" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Lokasi Pekerjaan</label><font color="red">*</font>
                                <div class="form-group clearfix">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Area Office" id="defaultCheck1" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  style="color: black;" for="defaultCheck1">
                                            Area Office
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Area Taman" id="defaultCheck2" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck2">
                                            Area Taman
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung A - Assembling" id="defaultCheck3" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck3">
                                            Gedung A - Assembling 
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung A - Charging" id="defaultCheck4" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck4">
                                            Gedung A - Charging
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung B - Grid Casting" id="defaultCheck5" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck5">
                                            Gedung B - Grid Casting
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung B - Lead Powder Pasting" id="defaultCheck6" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck6">
                                            Gedung B - Lead Powder Pasting
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung C - Formation" id="defaultCheck7" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck7">
                                            Gedung C - Formation
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung D - Assembling" id="defaultCheck8" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck8">
                                            Gedung D - Assembling
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung D - Tooling" id="defaultCheck9" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck9">
                                            Gedung D - Tooling
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung D - Workshop" id="defaultCheck10" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck10">
                                            Gedung D - Workshop
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung E - Lead Powder Pasting" id="defaultCheck11" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck11">
                                            Gedung E - Lead Powder Pasting
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=" Gedung E - Punchgrid" id="defaultCheck12" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck12">
                                            Gedung E - Punchgrid
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung F - Formation" id="defaultCheck13" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck13">
                                            Gedung F - Formation
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung F - Charging" id="defaultCheck14" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck14">
                                            Gedung F - Charging
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung G - Assembling" id="defaultCheck15" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck15">
                                            Gedung G - Assembling
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=" Warehouse Komponen" id="defaultCheck16" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck16">
                                            Warehouse Komponen
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=" Warehouse Finishgood" id="defaultCheck17" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck17">
                                            Warehouse Finishgood
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="ehs" id="defaultCheck18" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck18">
                                            EHS (Acid dil, demin water, WWT)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="TPS" id="defaultCheck19" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck19">
                                            TPS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Maintenance" id="defaultCheck20" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck20">
                                            Maintenance
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="utility_gp" id="defaultCheck21" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck21">
                                            Utility (Genset, Powerhouse)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="utility_dsck" id="defaultCheck22" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck22">
                                            Utility (Dust Collector, Scrubber, Cooling Tower dan Kompressor)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="All Area Pabrik" id="defaultCheck23" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck23">
                                            All Area Pabrik
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <small style="color: red;">Jika lokasi pekerjaan lebih dari 1, silahkan ceklis sesuai dengan banyaknya lokasi yang akan dituju.</small>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Nama Direktur / Koordinator Subcont</label><font color="red">*</font>
                                <input type="text" name="direktur_koordinat" class="form-control" id="direktur_koordinat" for="direktur_koordinat" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Nama PIC Subcont</label><font color="red">*</font>
                                <input type="text" name="pic_subcont" class="form-control" id="pic_subcont" for="pic_subcont" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Nomor Handphone PIC Subcont</label><font color="red">*</font>
                                <input type="number" name="nohp_subcont" class="form-control col-sm-6" id="nohp_subcont" for="nohp_subcont" onkeypress="return hanyaAngka(event)" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Jumlah (MP Subcont) yang akan Bekerja</label><font color="red">*</font>
                                <input type="number" name="jml_picsubcont" class="form-control col-sm-3" id="jml_picsubcont" for="jml_picsubcont" onkeypress="return hanyaAngka(event)" required>
                            </div>
                            <div class="form-group" id="namamp-section">
                                <!-- <label class="control-label" style="color: black;">Nama Pekerja (MP Subcont)</label><font color="red">*</font>
                                <div id="MPSubcontHelp" class="form-text"><small style="color: red;">Silahkan isi sesuai nama yang tertera di KTP.</small></div> -->
                                <!-- <input type="text" name="namamp_subcont" class="form-control" id="namamp_subcont" for="namamp_subcont" required> -->
                                <!-- <div id="MPSubcontHelp" class="form-text"><small style="color: red;">Silahkan isi sesuai nama yang tertera di KTP, Jika lebih dari 1 pekerja pisahkan dengan tanda koma.</small></div> -->
                            </div>
                            <!-- <button id="btn" type="button" class="btn btn-info">Tambah Nama Pekerja</button>            -->
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Nama PIC PT CBI</label><font color="red">*</font>
                                <input type="text" name="pic_cbi" class="form-control" id="pic_cbi" for="pic_cbi" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Seksie PIC PT CBI</label><font color="red">*</font>
                                <input type="text" name="sie_pic_cbi" class="form-control col-sm-4" id="sie_pic_cbi" for="sie_pic_cbi" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Nomor Handphone PIC PT CBI</label><font color="red">*</font>
                                <input type="number" name="nohp_cbi" class="form-control col-sm-6" id="nohp_cbi" for="nohp_cbi" onkeypress="return hanyaAngka(event)" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Peralatan Kerja yang Dibawa</label><font color="red">*</font>
                                <input type="text" name="peralatan" class="form-control" id="peralatan" for="peralatan" required>
                                <div id="peralatanHelp" class="form-text">
                                    <small style="color: red;">Jika peralatan lebih dari 1 pisahkan dengan tanda koma.</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">APD yang Wajib Dipakai</label>
                                <input type="text" class="form-control col-sm-7" for="apd_dipakai" id="apd_dipakai" name="apd_dipakai" value="Mask/Respirator and Safety Shoes" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">APD Tambahan</label><font color="red">*</font>
                                <div class="form-group clearfix">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan1" name="apd_tambahan[]" value="Helmet">
                                        <label class="form-check-label" style="color: black;"  for="apdtambahan1">
                                            Helmet
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan2" name="apd_tambahan[]" value="Safety Glass">
                                        <label class="form-check-label" style="color: black;"  for="apdtambahan2">
                                            Safety Glass
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"  id="apdtambahan3" name="apd_tambahan[]" value="Safety Googles">
                                        <label class="form-check-label" style="color: black;"  for="apdtambahan3">
                                            Safety Googles
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"  id="apdtambahan4" name="apd_tambahan[]" value="Face Shield">
                                        <label class="form-check-label" style="color: black;"  for="apdtambahan4">
                                            Face Shield
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"  id="apdtambahan5" name="apd_tambahan[]" value="Earplug">
                                        <label class="form-check-label" style="color: black;"  for="apdtambahan5">
                                            Earplug
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan6" name="apd_tambahan[]" value="Earmuff">
                                        <label class="form-check-label" style="color: black;"  for="apdtambahan6">
                                            Earmuff
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan7" name="apd_tambahan[]" value="Full Body Harness">
                                        <label class="form-check-label" style="color: black;"  for="apdtambahan7">
                                            Full Body Harness
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan8" name="apd_tambahan[]" value="Sarung Lengan">
                                        <label class="form-check-label" style="color: black;"  for="apdtambahan8">
                                            Sarung Lengan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan9" name="apd_tambahan[]" value="Sarung Tangan">
                                        <label class="form-check-label" style="color: black;"  for="apdtambahan9">
                                            Sarung Tangan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan10" name="apd_tambahan[]" value="APRON">
                                        <label class="form-check-label" style="color: black;"  for="apdtambahan10">
                                            APRON
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <small style="color: red;">Jika APD Tambahan lebih dari 1, silahkan ceklis sesuai dengan banyaknya APD yang dibawa.</small>
                                    </div>  
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Jenis Pekerjaan</label><font color="red">*</font>
                                <input type="text" name="jenis_pekerjaan" class="form-control col-sm-7" id="jenis_pekerjaan" for="jenis_pekerjaan"  required>
                            </div>
                            <div class="form-group">
                                <label class="control-label" style="color: black;">Kategori Pekerjaan</label><font color="red">*</font>
                                <div class="form-group clearfix">
                                    <div class="form-check">
                                        <input class="form-check-input detail" type="checkbox" id="defaultCheck24" name="kategori_pekerjaan[0]" value="umum">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck24">
                                            Umum
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input detail" type="checkbox"  id="defaultCheck25" name="kategori_pekerjaan[1]" value="libatkan panas">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck25">
                                            Melibatkan Panas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input detail" type="checkbox"  id="defaultCheck26" name="kategori_pekerjaan[2]" value="libatkan ruang terbatas">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck26">
                                            Melibatkan Ruang Terbatas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input detail" type="checkbox"  id="defaultCheck27" name="kategori_pekerjaan[3]" value="libatkan listrik tegangan tinggi">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck27">
                                            Melibatkan Listrik Tegangan Menengah Tinggi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input detail" type="checkbox" id="defaultCheck28" name="kategori_pekerjaan[4]" value="libatkan ketinggian">
                                        <label class="form-check-label" style="color: black;"  for="defaultCheck28">
                                            Melibatkan Ketinggian
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <small style="color: red;">Jika Kategori Pekerjaan lebih dari 1, silahkan ceklis sesuai dengan banyaknya Kategori Pekerjaan yang akan dilakukan.</small>
                                    </div>  
                                </div>
                            </div>
                            <!-- FORM TAMBAHAN SYARAT WAJIB -->
                            <div class="col-md-6 d-none" id="conditional-input">
                                <div class="row" style="margin-right: 2px">
                                    <div class="box box-warning box-solid">
                                        <table class='table table-bordered'>
                                            <div id="form-input">
                                                <div class="row mb-3 form-group">
                                                    <div class="col-sm-15">
                                                        <h5 class="box-title" style="color: black;">SYARAT WAJIB KATEGORI MELIBATKAN PANAS</h5>
                                                        <p style="color: red;">Ceklis Semua Syarat Wajib dan Wajib Melakukan Safety Induction dengan PIC EHS</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Wajib tersedia APAR" id="conditional-1">
                                                            <label class="form-check-label" style="color: black;"  for="conditional-1">
                                                                Wajib tersedia APAR
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Wajib proteksi area kerja" id="conditional-2">
                                                            <label class="form-check-label" style="color: black;"  for="conditional-2">
                                                                Wajib dipasang pembatas (safety line)/ Cover area kerja 
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Bebas Area bahan mudah terbakar" id="conditional-3">
                                                            <label class="form-check-label" style="color: black;"  for="conditional-3">
                                                                Area bebas dari cairan, debu, kain, B3 yang mudah terbakar
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Lindungi dengan TERPAL" id="conditional-4">
                                                            <label class="form-check-label" style="color: black;"  for="conditional-4">
                                                                Singkirkan benda yang mudah terbakar / lindungi dengan TERPAL 
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-none" id="conditional-input-2">
                                <div class="row" style="margin-right: 2px">
                                    <div class="box box-warning box-solid">
                                        <table class='table table-bordered'>
                                            <div id="form-input">
                                                <div class="row mb-3 form-group">
                                                    <div class="col-sm-13">
                                                        <h5 class="box-title" style="color: black;">SYARAT WAJIB RUANG TERBATAS</h5>
                                                        <p style="color: red;">Ceklis Semua Syarat Wajib dan Wajib Melakukan Safety Induction dengan PIC EHS</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Min 2 Pekerja" id="conditional-5">
                                                            <label class="form-check-label" style="color: black;"  for="conditional-5">
                                                                Minimal melibatkan 2 orang pekerja
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Wajib pastikan oksigen tersedia" id="conditional-6">
                                                            <label class="form-check-label" style="color: black;"  for="conditional-6">
                                                                Wajib memastikan ketersediaan oksigen
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="atur waktu maksimal kerja" id="conditional-7">
                                                            <label class="form-check-label" style="color: black;"  for="conditional-7">
                                                                Lakukan pengaturan waktu kerja maksimal di area terbatas
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-none" id="conditional-input-3">
                                <div class="row" style="margin-right: 2px">
                                    <div class="box box-warning box-solid">
                                        <table class='table table-bordered'>
                                            <div id="form-input">
                                                <div class="row mb-3 form-group">
                                                    <div class="col-sm-50">
                                                        <h5 class="box-title" style="color: black;">SYARAT WAJIB LIBATKAN KETINGGIAN</h5>
                                                        <p style="color: red;">Ceklis Semua Syarat Wajib dan Wajib Melakukan Safety Induction dengan PIC EHS</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Min 2 Pekerja" id="conditional-8" >
                                                            <label class="form-check-label" style="color: black;"  for="conditional-8">
                                                                Minimal melibatkan 2 orang pekerja
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="cek scaffolding/tangga" id="conditional-9" >
                                                            <label class="form-check-label" style="color: black;"  for="conditional-9">
                                                                Lakukan pengecekan alat kerja : scaffolding/ tangga.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="cek body harness dan helm" id="conditional-10" >
                                                            <label class="form-check-label" style="color: black;"  for="conditional-10">
                                                                Lakukan pengecekan body harness dan helm 
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-none" id="conditional-input-4">
                                <div class="row" style="margin-right: 2px">
                                    <div class="box box-warning box-solid">
                                        <table class='table table-bordered'>
                                            <div id="form-input">
                                                <div class="row mb-3 form-group">
                                                    <div class="col-sm-50">
                                                        <h5 class="box-title" style="color: black;">SYARAT WAJIB LIBATKAN LISTRIK TEGANGAN MENENGAH TINGGI</h5>
                                                        <p style="color: red;">Ceklis Semua Syarat Wajib dan Wajib Melakukan Safety Induction dengan PIC EHS</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Min 2 Pekerja" id="conditional-11" >
                                                            <label class="form-check-label" style="color: black;"  for="conditional-11">
                                                                Minimal melibatkan 2 orang pekerja.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="PIC memiliki sertifikat Teknisi K3 Listrik" id="conditional-12" >
                                                            <label class="form-check-label" style="color: black;"  for="conditional-12">
                                                                PIC harus mempunyai sertifikat Teknisi K3 Listrik.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Area memiliki penerangan yang cukup" id="conditional-13" >
                                                            <label class="form-check-label" style="color: black;"  for="conditional-13">
                                                                Area kerja harus mempunyai penerangan yang cukup.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Area bebas genangan air" id="conditional-14" >
                                                            <label class="form-check-label" style="color: black;"  for="conditional-14">
                                                                Area kerja harus bebas genangan air.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Lengkap dengan LOTO sesuai Standar" id="conditional-15" >
                                                            <label class="form-check-label" style="color: black;"  for="conditional-15">
                                                                Pastikan dilengkapi LOTO sesuai standar.
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-none" id="conditional-input-5">
                                <div class="row" style="margin-right: 2px">
                                    <div class="box box-warning box-solid">
                                        <table class='table table-bordered'>
                                            <div id="form-input">
                                                <div class="row mb-3 form-group">
                                                    <div class="col-sm-15">
                                                        <!-- <h3 class="box-title" style="color: black;">SYARAT WAJIB</h3> -->
                                                        <!-- <p style="color: red;">Silahkan Ceklis Semua Syarat Wajib dan Wajib Melakukan Safety Induction dengan PIC EHS</p> -->
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Kategori Umum : Tidak Ada Syarat Wajib" id="conditional-16">
                                                            <label class="form-check-label" for="conditional-16" style="color: red;">
                                                               Kategori Umum : Tidak Ada Syarat Wajib
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-warning btn-lg pull-left"><a href="<?= base_url('Login/index');?>" style="color: white;"> Cancel <i class="far fa-window-close"></i></a></button>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" > Next <i class="fa fa-forward"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3 style="color: black;"> Step 2 : JSA Form</h3>
                            <div class="form-group">
                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <table class="table" border="2">
                                            <thead>
                                                <tr>
                                                    <th style="color: black;">Aktivitas Pekerjaan</th>                      
                                                    <th style="color: black;">ASPEK LK3</th>
                                                    <th style="color: black;">DAMPAK LK3</th>
                                                    <th style="color: black;">Standar Pengamanan</th>
                                                </tr>
                                            </thead>
                                            <tbody id="form-jsa">
                                                <tr>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <!-- <input type="hidden" name="id_jsa"> -->
                                                            <textarea class="form-control" id="aktivitas_pekerjaan" for="aktivitas_pekerjaan" name="aktivitas_pekerjaan[]" rows="3" required></textarea>
                                                            <small style="color: red;">Isi Form ini dengan urutan pekerjaan yang akan dilakukan di PT CBI.</small> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group clearfix"></div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek1" name="aspek[]" value="JATUH DARI KETINGGIAN">
                                                                <label class="form-check-label" style="color: black;"  for="aspek1">
                                                                JATUH DARI KETINGGIAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek2" name="aspek[]" value="TERSENGAT LISTRIK">
                                                                <label class="form-check-label" style="color: black;"  for="aspek2">
                                                                TERSENGAT LISTRIK
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek3" name="aspek[]" value="TERJEPIT">
                                                                <label class="form-check-label" style="color: black;"  for="aspek3">
                                                                TERJEPIT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek4" name="aspek[]" value="TERGELINCIR">
                                                                <label class="form-check-label" style="color: black;"  for="aspek4">
                                                                TERGELINCIR
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek5" name="aspek[]" value="TERKENA PERCIKAN LAS">
                                                                <label class="form-check-label" style="color: black;"  for="aspek5">
                                                                TERKENA PERCIKAN LAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek6" name="aspek[]" value="GETARAN MEKANIS ALAT">
                                                                <label class="form-check-label" style="color: black;"  for="aspek6">
                                                                GETARAN MEKANIS ALAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek7" name="aspek[]" value="TERPAPAR UAP">
                                                                <label class="form-check-label" style="color: black;"  for="aspek7">
                                                                TERPAPAR UAP
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek8" name="aspek[]" value="TERKENA PERCIKAN CAIRAN KIMIA">
                                                                <label class="form-check-label" style="color: black;"  for="aspek8">
                                                                TERKENA PERCIKAN CAIRAN KIMIA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek9" name="aspek[]" value="TERSAYAT">
                                                                <label class="form-check-label" style="color: black;"  for="aspek9">
                                                                    TERSAYAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek10" name="aspek[]" value="KEBAKARAN">
                                                                <label class="form-check-label" style="color: black;"  for="aspek10">
                                                                    KEBAKARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek11" name="aspek[]" value="LIMBAH B3 DAN NON B3">
                                                                <label class="form-check-label" style="color: black;"  for="aspek11">
                                                                    LIMBAH B3 DAN NON B3
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <small style="color: red;">Jika ASPEK LK3 lebih dari 1, silahkan ceklis sesuai kondisi.</small>
                                                            </div>  
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group clearfix">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampakl" name="dampak[]" value="PENCEMARAN LINGKUNGAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampakl">
                                                                    PENCEMARAN LINGKUNGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak2" name="dampak[]" value="KEMATIAN / FATALITY">
                                                                <label class="form-check-label" style="color: black;"  for="dampak2">
                                                                    KEMATIAN / FATALITY
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak3" name="dampak[]" value="PATAH TULANG">
                                                                <label class="form-check-label" style="color: black;"  for="dampak3">
                                                                    PATAH TULANG
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak4" name="dampak[]" value="LUKA PADA TUBUH">
                                                                <label class="form-check-label" style="color: black;"  for="dampak4">
                                                                    LUKA PADA TUBUH
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak5" name="dampak[]" value="LUKA PADA JARI / TANGAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak5">
                                                                    LUKA PADA JARI / TANGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak6" name="dampak[]" value="LUKA PADA MATA">
                                                                <label class="form-check-label" style="color: black;"  for="dampak6">
                                                                    LUKA PADA MATA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak7" name="dampak[]" value="LUKA BAKAR">
                                                                <label class="form-check-label" style="color: black;"  for="dampak7">
                                                                    LUKA BAKAR 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak8" name="dampak[]" value="KRAM PADA TANGAN / KAKI">
                                                                <label class="form-check-label" style="color: black;"  for="dampak8">
                                                                    KRAM PADA TANGAN / KAKI
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak9" name="dampak[]" value="KERUSAKAN FASILITAS">
                                                                <label class="form-check-label" style="color: black;"  for="dampak9">
                                                                    KERUSAKAN FASILITAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak10" name="dampak[]" value="GANGGUAN PENDENGARAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak10">
                                                                    GANGGUAN PENDENGARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak11" name="dampak[]" value="GANGGUAN PERNAFASAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak11">
                                                                    GANGGUAN PERNAFASAN
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <small style="color: red;">Jika DAMPAK LK3 lebih dari 1, silahkan ceklis sesuai kondisi.</small>
                                                            </div>  
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <textarea class="form-control" id="standar_pengamanan" for="standar_pengamanan" name="standar_pengamanan[]" rows="3"></textarea>   
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tbody id="form-jsa">
                                                <tr>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <!-- <input type="hidden" name="id_jsa"> -->
                                                            <textarea class="form-control" id="aktivitas_pekerjaan" for="aktivitas_pekerjaan" name="aktivitas_pekerjaan[]" rows="3"></textarea>
                                                            <small style="color: red;">Isi Form ini dengan urutan pekerjaan yang akan dilakukan di PT CBI.</small> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group clearfix">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek12" name="aspek[]" value="JATUH DARI KETINGGIAN">
                                                                <label class="form-check-label" style="color: black;"  for="aspek12">
                                                                JATUH DARI KETINGGIAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek13" name="aspek[]" value="TERSENGAT LISTRIK">
                                                                <label class="form-check-label" style="color: black;"  for="aspek13">
                                                                TERSENGAT LISTRIK
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek14" name="aspek[]" value="TERJEPIT">
                                                                <label class="form-check-label" style="color: black;"  for="aspek14">
                                                                TERJEPIT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek15" name="aspek[]" value="TERGELINCIR">
                                                                <label class="form-check-label" style="color: black;"  for="aspek15">
                                                                TERGELINCIR
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek16" name="aspek[]" value="TERKENA PERCIKAN LAS">
                                                                <label class="form-check-label" style="color: black;"  for="aspek16">
                                                                TERKENA PERCIKAN LAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek17" name="aspek[]" value="GETARAN MEKANIS ALAT">
                                                                <label class="form-check-label" style="color: black;"  for="aspek17">
                                                                GETARAN MEKANIS ALAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek18" name="aspek[]" value="TERPAPAR UAP">
                                                                <label class="form-check-label" style="color: black;"  for="aspek18">
                                                                TERPAPAR UAP
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek19" name="aspek[]" value="TERKENA PERCIKAN CAIRAN KIMIA">
                                                                <label class="form-check-label" style="color: black;"  for="aspek19">
                                                                TERKENA PERCIKAN CAIRAN KIMIA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek20" name="aspek[]" value="TERSAYAT">
                                                                <label class="form-check-label" style="color: black;"  for="aspek20">
                                                                    TERSAYAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek21" name="aspek[]" value="KEBAKARAN">
                                                                <label class="form-check-label" style="color: black;"  for="aspek21">
                                                                    KEBAKARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek22" name="aspek[]" value="LIMBAH B3 DAN NON B3">
                                                                <label class="form-check-label" style="color: black;"  for="aspek22">
                                                                    LIMBAH B3 DAN NON B3
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <small style="color: red;">Jika ASPEK LK3 lebih dari 1, silahkan ceklis sesuai kondisi.</small>
                                                            </div>  
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group clearfix">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampakl2" name="dampak[]" value="PENCEMARAN LINGKUNGAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampakl2">
                                                                    PENCEMARAN LINGKUNGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak13" name="dampak[]" value="KEMATIAN / FATALITY">
                                                                <label class="form-check-label" style="color: black;"  for="dampak13">
                                                                    KEMATIAN / FATALITY
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak14" name="dampak[]" value="PATAH TULANG">
                                                                <label class="form-check-label" style="color: black;"  for="dampak14">
                                                                    PATAH TULANG
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak15" name="dampak[]" value="LUKA PADA TUBUH">
                                                                <label class="form-check-label" style="color: black;"  for="dampak15">
                                                                    LUKA PADA TUBUH
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak16" name="dampak[]" value="LUKA PADA JARI / TANGAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak16">
                                                                    LUKA PADA JARI / TANGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak17" name="dampak[]" value="LUKA PADA MATA">
                                                                <label class="form-check-label" style="color: black;"  for="dampak17">
                                                                    LUKA PADA MATA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak18" name="dampak[]" value="LUKA BAKAR">
                                                                <label class="form-check-label" style="color: black;"  for="dampak18">
                                                                    LUKA BAKAR 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak19" name="dampak[]" value="KRAM PADA TANGAN / KAKI">
                                                                <label class="form-check-label" style="color: black;"  for="dampak19">
                                                                    KRAM PADA TANGAN / KAKI
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak20" name="dampak[]" value="KERUSAKAN FASILITAS">
                                                                <label class="form-check-label" style="color: black;"  for="dampak20">
                                                                    KERUSAKAN FASILITAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak21" name="dampak[]" value="GANGGUAN PENDENGARAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak21">
                                                                    GANGGUAN PENDENGARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak22" name="dampak[]" value="GANGGUAN PERNAFASAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak22">
                                                                    GANGGUAN PERNAFASAN
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <small style="color: red;">Jika DAMPAK LK3 lebih dari 1, silahkan ceklis sesuai kondisi.</small>
                                                            </div>  
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <textarea class="form-control" id="standar_pengamanan" for="standar_pengamanan" name="standar_pengamanan[]" rows="3"></textarea>   
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tbody id="form-jsa">
                                                <tr>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <!-- <input type="hidden" name="id_jsa"> -->
                                                            <textarea class="form-control" id="aktivitas_pekerjaan" for="aktivitas_pekerjaan" name="aktivitas_pekerjaan[]" rows="3"></textarea>
                                                            <small style="color: red;">Isi Form ini dengan urutan pekerjaan yang akan dilakukan di PT CBI.</small> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group clearfix">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek23" name="aspek[]" value="JATUH DARI KETINGGIAN">
                                                                <label class="form-check-label" style="color: black;"  for="aspek23">
                                                                JATUH DARI KETINGGIAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek24" name="aspek[]" value="TERSENGAT LISTRIK">
                                                                <label class="form-check-label" style="color: black;"  for="aspek24">
                                                                TERSENGAT LISTRIK
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek25" name="aspek[]" value="TERJEPIT">
                                                                <label class="form-check-label" style="color: black;"  for="aspek25">
                                                                TERJEPIT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek26" name="aspek[]" value="TERGELINCIR">
                                                                <label class="form-check-label" style="color: black;"  for="aspek26">
                                                                TERGELINCIR
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek27" name="aspek[]" value="TERKENA PERCIKAN LAS">
                                                                <label class="form-check-label" style="color: black;"  for="aspek27">
                                                                TERKENA PERCIKAN LAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek28" name="aspek[]" value="GETARAN MEKANIS ALAT">
                                                                <label class="form-check-label" style="color: black;"  for="aspek28">
                                                                GETARAN MEKANIS ALAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek29" name="aspek[]" value="TERPAPAR UAP">
                                                                <label class="form-check-label" style="color: black;"  for="aspek29">
                                                                TERPAPAR UAP
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek30" name="aspek[]" value="TERKENA PERCIKAN CAIRAN KIMIA">
                                                                <label class="form-check-label" style="color: black;"  for="aspek30">
                                                                TERKENA PERCIKAN CAIRAN KIMIA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek31" name="aspek[]" value="TERSAYAT">
                                                                <label class="form-check-label" style="color: black;"  for="aspek31">
                                                                    TERSAYAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek32" name="aspek[]" value="KEBAKARAN">
                                                                <label class="form-check-label" style="color: black;"  for="aspek32">
                                                                    KEBAKARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek33" name="aspek[]" value="LIMBAH B3 DAN NON B3">
                                                                <label class="form-check-label" style="color: black;"  for="aspek33">
                                                                    LIMBAH B3 DAN NON B3
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <small style="color: red;">Jika ASPEK LK3 lebih dari 1, silahkan ceklis sesuai kondisi.</small>
                                                            </div>  
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group clearfix">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak23" name="dampak[]" value="PENCEMARAN LINGKUNGAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak23">
                                                                    PENCEMARAN LINGKUNGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak24" name="dampak[]" value="KEMATIAN / FATALITY">
                                                                <label class="form-check-label" style="color: black;"  for="dampak24">
                                                                    KEMATIAN / FATALITY
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak25" name="dampak[]" value="PATAH TULANG">
                                                                <label class="form-check-label" style="color: black;"  for="dampak25">
                                                                    PATAH TULANG
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak26" name="dampak[]" value="LUKA PADA TUBUH">
                                                                <label class="form-check-label" style="color: black;"  for="dampak26">
                                                                    LUKA PADA TUBUH
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak27" name="dampak[]" value="LUKA PADA JARI / TANGAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak27">
                                                                    LUKA PADA JARI / TANGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak28" name="dampak[]" value="LUKA PADA MATA">
                                                                <label class="form-check-label" style="color: black;"  for="dampak28">
                                                                    LUKA PADA MATA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak29" name="dampak[]" value="LUKA BAKAR">
                                                                <label class="form-check-label" style="color: black;"  for="dampak29">
                                                                    LUKA BAKAR 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak30" name="dampak[]" value="KRAM PADA TANGAN / KAKI">
                                                                <label class="form-check-label" style="color: black;"  for="dampak30">
                                                                    KRAM PADA TANGAN / KAKI
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak31" name="dampak[]" value="KERUSAKAN FASILITAS">
                                                                <label class="form-check-label" style="color: black;"  for="dampak31">
                                                                    KERUSAKAN FASILITAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak32" name="dampak[]" value="GANGGUAN PENDENGARAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak32">
                                                                    GANGGUAN PENDENGARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak33" name="dampak[]" value="GANGGUAN PERNAFASAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak33">
                                                                    GANGGUAN PERNAFASAN
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <small style="color: red;">Jika DAMPAK LK3 lebih dari 1, silahkan ceklis sesuai kondisi.</small>
                                                            </div>  
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <textarea class="form-control" id="standar_pengamanan" for="standar_pengamanan" name="standar_pengamanan[]" rows="3"></textarea>   
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tbody id="form-jsa">
                                                <tr>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <!-- <input type="hidden" name="id_jsa"> -->
                                                            <textarea class="form-control" id="aktivitas_pekerjaan" for="aktivitas_pekerjaan" name="aktivitas_pekerjaan[]" rows="3"></textarea>
                                                            <small style="color: red;">Isi Form ini dengan urutan pekerjaan yang akan dilakukan di PT CBI.</small> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group clearfix">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek34" name="aspek[]" value="JATUH DARI KETINGGIAN">
                                                                <label class="form-check-label" style="color: black;"  for="aspek34">
                                                                JATUH DARI KETINGGIAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek35" name="aspek[]" value="TERSENGAT LISTRIK">
                                                                <label class="form-check-label" style="color: black;"  for="aspek35">
                                                                TERSENGAT LISTRIK
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek36" name="aspek[]" value="TERJEPIT">
                                                                <label class="form-check-label" style="color: black;"  for="aspek36">
                                                                TERJEPIT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek37" name="aspek[]" value="TERGELINCIR">
                                                                <label class="form-check-label" style="color: black;"  for="aspek37">
                                                                TERGELINCIR
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek38" name="aspek[]" value="TERKENA PERCIKAN LAS">
                                                                <label class="form-check-label" style="color: black;"  for="aspek38">
                                                                TERKENA PERCIKAN LAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek39" name="aspek[]" value="GETARAN MEKANIS ALAT">
                                                                <label class="form-check-label" style="color: black;"  for="aspek39">
                                                                GETARAN MEKANIS ALAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek40" name="aspek[]" value="TERPAPAR UAP">
                                                                <label class="form-check-label" style="color: black;"  for="aspek40">
                                                                TERPAPAR UAP
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek41" name="aspek[]" value="TERKENA PERCIKAN CAIRAN KIMIA">
                                                                <label class="form-check-label" style="color: black;"  for="aspek41">
                                                                TERKENA PERCIKAN CAIRAN KIMIA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek42" name="aspek[]" value="TERSAYAT">
                                                                <label class="form-check-label" style="color: black;"  for="aspek42">
                                                                    TERSAYAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek43" name="aspek[]" value="KEBAKARAN">
                                                                <label class="form-check-label" style="color: black;"  for="aspek43">
                                                                    KEBAKARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek44" name="aspek[]" value="LIMBAH B3 DAN NON B3">
                                                                <label class="form-check-label" style="color: black;"  for="aspek44">
                                                                    LIMBAH B3 DAN NON B3
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <small style="color: red;">Jika ASPEK LK3 lebih dari 1, silahkan ceklis sesuai kondisi.</small>
                                                            </div>  
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group clearfix">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak34" name="dampak[]" value="PENCEMARAN LINGKUNGAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak34">
                                                                    PENCEMARAN LINGKUNGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak35" name="dampak[]" value="KEMATIAN / FATALITY">
                                                                <label class="form-check-label" style="color: black;"  for="dampak35">
                                                                    KEMATIAN / FATALITY
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak36" name="dampak[]" value="PATAH TULANG">
                                                                <label class="form-check-label" style="color: black;"  for="dampak36">
                                                                    PATAH TULANG
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak37" name="dampak[]" value="LUKA PADA TUBUH">
                                                                <label class="form-check-label" style="color: black;"  for="dampak37">
                                                                    LUKA PADA TUBUH
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak38" name="dampak[]" value="LUKA PADA JARI / TANGAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak38">
                                                                    LUKA PADA JARI / TANGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak39" name="dampak[]" value="LUKA PADA MATA">
                                                                <label class="form-check-label" style="color: black;"  for="dampak39">
                                                                    LUKA PADA MATA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak40" name="dampak[]" value="LUKA BAKAR">
                                                                <label class="form-check-label" style="color: black;"  for="dampak40">
                                                                    LUKA BAKAR 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak41" name="dampak[]" value="KRAM PADA TANGAN / KAKI">
                                                                <label class="form-check-label" style="color: black;"  for="dampak41">
                                                                    KRAM PADA TANGAN / KAKI
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak42" name="dampak[]" value="KERUSAKAN FASILITAS">
                                                                <label class="form-check-label" style="color: black;"  for="dampak42">
                                                                    KERUSAKAN FASILITAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak43" name="dampak[]" value="GANGGUAN PENDENGARAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak43">
                                                                    GANGGUAN PENDENGARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak44" name="dampak[]" value="GANGGUAN PERNAFASAN">
                                                                <label class="form-check-label" style="color: black;"  for="dampak44">
                                                                    GANGGUAN PERNAFASAN
                                                                </label>
                                                            </div>
                                                            <div class="form-group">
                                                                <small style="color: red;">Jika DAMPAK LK3 lebih dari 1, silahkan ceklis sesuai kondisi.</small>
                                                            </div>  
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <textarea class="form-control" id="standar_pengamanan" for="standar_pengamanan" name="standar_pengamanan[]" rows="3"></textarea>   
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="button_validasi_jsa">

                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" onclick="validasi_rows()">Next <i class="fa fa-forward"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3 style="color: black;"> Step 3 : Finish</h3>
                            <button class="btn btn-success btn-lg pull-right" type="submit" onclick="return confirm('Apakah Yakin Akan Mengirimkan Data?')"> Simpan! <i class="fas fa-save"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url('assets/sbadmin/');?>vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url('assets/sbadmin/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url('assets/sbadmin/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url('assets/sbadmin/');?>js/sb-admin-2.min.js"></script>

        <script type="text/javascript">
            // Script Validasi
            function validasi_rows() {
                
                // console.log(input_aktivitas)
                // console.log(input_standar)

                // if (arr_aktivitas.length != arr_standar.length) {
                //     alert('afh iyah?')
                // }
            }
        </script>

        <script type="text/javascript">
            //script untuk form wizard
            $(document).ready(function () {

                var navListItems = $('div.setup-panel div a'),
                        allWells = $('.setup-content'),
                        allNextBtn = $('.nextBtn');

                allWells.hide();

                navListItems.click(function (e) {
                    e.preventDefault();
                    var $target = $($(this).attr('href')),
                            $item = $(this);

                    if (!$item.hasClass('disabled')) {
                        navListItems.removeClass('btn-primary').addClass('btn-default');
                        $item.addClass('btn-primary');
                        allWells.hide();
                        $target.show();
                        $target.find('input:eq(0)').focus();
                    }
                });

                allNextBtn.click(function(){
                    var curStep = $(this).closest(".setup-content"),
                        curStepBtn = curStep.attr("id"),
                        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                        curInputs = curStep.find("input[type='text'],input[type='url']"),
                        isValid = true;

                    $(".form-group").removeClass("has-error");
                    for(var i=0; i<curInputs.length; i++){
                        if (!curInputs[i].validity.valid){
                            isValid = false;
                            $(curInputs[i]).closest(".form-group").addClass("has-error");
                        }
                    }

                    // script validasi JSA
                    var input_aktivitas = document.getElementsByName('aktivitas_pekerjaan[]');
                    var arr_aktivitas = [];
                    for (var i = 0; i < input_aktivitas.length; i++) {
                        arr_aktivitas.push(input_aktivitas[i].value);
                    }

                    var input_standar = document.getElementsByName('standar_pengamanan[]');
                    var arr_standar = [];
                    for (var j = 0; j < input_standar.length; j++) {
                        arr_standar.push(input_standar[j].value);
                    }

                    var fix_arr_aktivitas = arr_aktivitas.filter((str) => str !== '');
                    var fix_arr_standar = arr_standar.filter((str) => str !== '');

                    console.log(fix_arr_aktivitas);
                    console.log(fix_arr_standar);

                    if (fix_arr_aktivitas.length != fix_arr_standar.length) {
                        isValid = false;
                        alert('JSA BELUM LENGKAP, SILAHKAN LENGKAPI!');
                    }
                    // end script

                    if (isValid)
                        nextStepWizard.removeAttr('disabled').trigger('click');
                });

                $('div.setup-panel div a.btn-primary').trigger('click');
            });


            //script untuk kategori pekerjaan
            $(document).ready(function() {
                checkConditional()
                checkConditional2()
                checkConditional3()
                checkConditional4()
                checkConditional5()

                $(".detail").click(function() {
                    checkConditional()
                    checkConditional2()
                    checkConditional3()
                    checkConditional4()
                    checkConditional5()
                });

                //Fungsi untuk cek kondisi jika pilih libatkan panas
                function checkConditional() {
                    if ($("input[name='kategori_pekerjaan[1]']:checked").val() == "libatkan panas") {
                        $("#conditional-input").removeClass('d-none');
                    } else{
                        $("#conditional-input").addClass('d-none');
                    }
                }
                
                // Fungsi untuk cek kondisi jika pilih libatkan ruang terbatas
                function checkConditional2() {
                    if ($("input[name='kategori_pekerjaan[2]']:checked").val() == "libatkan ruang terbatas") {
                        $("#conditional-input-2").removeClass('d-none');
                    } else{
                        $("#conditional-input-2").addClass('d-none');
                    }
                }

                // Fungsi untuk cek kondisi jika pilih libatkan ketinggian
                function checkConditional3() {
                    if ($("input[name='kategori_pekerjaan[4]']:checked").val() == "libatkan ketinggian") {
                        $("#conditional-input-3").removeClass('d-none');
                    } else{
                        $("#conditional-input-3").addClass('d-none');
                    }
                }

                // Fungsi untuk cek kondisi jika pilih libatkan listrik tegangan tinggi
                function checkConditional4() {
                    if ($("input[name='kategori_pekerjaan[3]']:checked").val() == "libatkan listrik tegangan tinggi") {
                        $("#conditional-input-4").removeClass('d-none');
                    } else{
                        $("#conditional-input-4").addClass('d-none');
                    }
                }

                // Fungsi untuk cek kondisi jika pilih umum
                function checkConditional5() {
                    if ($("input[name='kategori_pekerjaan[0]']:checked").val() == "umum") {
                        $("#conditional-input-5").removeClass('d-none');
                    } else{
                        $("#conditional-input-5").addClass('d-none');
                    }
                }
            });


            //script coba coba untuk nama pekerja
            // (function() {
            //     var counter = 0;
            //     var btn = document.getElementById('btn');
            //     var form = document.getElementById('form-grup-namamp');
            //     var addInput = function() {
            //         counter++;
            //         var input = document.createElement("input");
            //         input.id = 'input-' + counter;
            //         input.type = 'text';
            //         input.class = 'form-control';
            //         input.name = 'namamp_subcont[]';
            //         input.placeholder = 'Nama Pekerja Subcont ' + counter;
            //         form.appendChild(input);
            //         };
            //     btn.addEventListener('click', function() {
            //     addInput();
            //     }.bind(this));
            // })();

            //script untuk namamp based on jumlah mp
            let jml_picsubcont = document.getElementById("jml_picsubcont");

            jml_picsubcont.addEventListener("keyup", function(){
                let jumlah = jml_picsubcont.value;

                $("#namamp-section").html("");
                for (let index = 0; index < jumlah; index++){
                    $("#namamp-section").append(
                        `
                            <label class="control-label" style="color: black;">Nama Pekerja (MP Subcont)</label><font color="red">*</font>
                            <input type="text" name="namamp_subcont[]" class="form-control" id="namamp_subcont" for="namamp_subcont" required>
                            <div id="MPSubcontHelp" class="form-text"><small style="color: red;">Silahkan isi sesuai nama yang tertera di KTP.</small></div>
                            <br>
                        `
                    )
                }
            });


            //SCRIPT UNTUK INPUT ANGKA SAJA PADA KOLOM NOMOR
            function hanyaAngka(event) {
                var angka = (event.which) ? event.which : event.keyCode
                if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                    return false;
                return true;
            }

            jQuery(function($) {
                var requiredCheckboxes = $(':checkbox[required]');
                requiredCheckboxes.on('change', function(e) {
                    var checkboxGroup = requiredCheckboxes.filter('[name="' + $(this).attr('name') + '"]');
                    var isChecked = checkboxGroup.is(':checked');
                    checkboxGroup.prop('required', !isChecked);
                });
                requiredCheckboxes.trigger('change');
            });

            

        </script>

    </body>

</html>