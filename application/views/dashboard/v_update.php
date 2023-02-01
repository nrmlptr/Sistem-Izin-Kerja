<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>FORM IKS - PT CBI</title>
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
        </style>

        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url('assets/sbadmin/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?php echo base_url('assets/sbadmin/');?>css/sb-admin-2.min.css" rel="stylesheet">
        <script src="<?php echo base_url('assets/sbadmin');?>/js/sweetalert2.all.min.js"></script>
    </head>

    <body class="bg-gradient-white">

        <div class="container">
            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                        <p>IKS Form</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                        <p>JSA Form</p>
                    </div>
                    <div class="stepwizard-step">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                        <p>Finish</p>
                    </div>
                </div>
            </div>
            <form role="form" action="<?php echo base_url('Home/simpan_IKSJSA');?>" method="POST">
                <input type="hidden" name="id_subcont" >
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Step 1 : IKS Form</h3>
                            <div class="form-group">
                                <label class="control-label">Nomor Registrasi</label>
                                <input type="text" name="no_regis" value="<?= $no_regis?>" class="form-control" id="no_regis" readonly/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tanggal Pengisian Form</label>
                                <input type="date" name="tanggal_pengajuan" class="form-control" id="tanggal_pengajuan" for="tanggal_pengajuan" value="<?= $tanggal_pengajuan;?>" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nama Perusahaan</label>
                                <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" for="nama_perusahaan" value="<?= $nama_perusahaan?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Alamat Perusahaan</label>
                                <textarea class="form-control" id="alamat_perusahaan" for="alamat_perusahaan" name="alamat_perusahaan" rows="3"><?= $alamat_perusahaan?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tanggal Mulai Bekerja</label>
                                <input type="date" name="wkt_mulai" class="form-control" id="wkt_mulai" for="wkt_mulai" value="<?= $wkt_mulai?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Tanggal Selesai Bekerja</label>
                                <input type="date" name="wkt_selesai" class="form-control" id="wkt_selesai" for="wkt_selesai" value="<?= $wkt_selesai?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Lokasi Pekerjaan</label>
                                <div class="form-group clearfix">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Area Office" <?php in_array ('Area Office', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck1" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck1">
                                            Area Office
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Area Taman" <?php in_array ('Area Taman', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck2" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck2">
                                            Area Taman
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung A - Assembling" <?php in_array ('Gedung A - Assembling', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck3" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck3">
                                            Gedung A - Assembling 
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung A - Charging" <?php in_array ('Gedung A - Charging', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck4" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck4">
                                            Gedung A - Charging
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung B - Grid Casting" <?php in_array ('Gedung B - Grid Casting', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck5" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck5">
                                            Gedung B - Grid Casting
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung B - Lead Powder Pasting" <?php in_array ('Gedung B - Lead Powder Pasting', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck6" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck6">
                                            Gedung B - Lead Powder Pasting
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung C - Formation" <?php in_array ('Gedung C - Formation', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck7" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck7">
                                            Gedung C - Formation
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung D - Assembling" <?php in_array ('Gedung D - Assembling', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck8" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck8">
                                            Gedung D - Assembling
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung D - Tooling" <?php in_array ('Gedung D - Tooling', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck9" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck9">
                                            Gedung D - Tooling
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung D - Workshop" <?php in_array ('Gedung D - Workshop', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck10" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck10">
                                            Gedung D - Workshop
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung E - Ballmill" id="defaultCheck11" <?php in_array ('Gedung E - Ballmill', $lokasi_pekerjaan) ? print "checked" : ""; ?> name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck11">
                                            Gedung E - Ballmill
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung E - Punchgrid" <?php in_array ('Gedung E - Punchgrid', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck12" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck12">
                                            Gedung E - Punchgrid
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung F - Formation" <?php in_array ('Gedung F - Formation', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck13" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck13">
                                            Gedung F - Formation
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung F - Charging" <?php in_array ('Gedung F - Charging', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck14" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck14">
                                            Gedung F - Charging
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Gedung G - Assembling" <?php in_array ('Gedung G - Assembling', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck15" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck15">
                                            Gedung G - Assembling
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=" Warehouse Komponen" <?php in_array ('Warehouse Komponen', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck16" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck16">
                                            Warehouse Komponen
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Warehouse Finishgood" <?php in_array ('Warehouse Finishgood', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck17" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck17">
                                            Warehouse Finishgood
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="ehs" <?php in_array ('ehs', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck18" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck18">
                                            EHS (Acid dil, demin water, WWT)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="TPS" <?php in_array ('TPS', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck19" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck19">
                                            TPS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Maintenance" <?php in_array ('Maintenance', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck20" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck20">
                                            Maintenance
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="utility_gp" <?php in_array ('utility_gp', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck21" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck21">
                                            Utility (Genset, Powerhouse)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="utility_dsck" <?php in_array ('utility_dsck', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck22" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck22">
                                            Utility (Dust Collector, Scrubber, Cooling Tower dan Kompressor)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="All Area Pabrik" <?php in_array ('All Area Pabrik', $lokasi_pekerjaan) ? print "checked" : ""; ?> id="defaultCheck23" name="lokasi_pekerjaan[]">
                                        <label class="form-check-label" for="defaultCheck23">
                                            All Area Pabrik
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <small style="color: red;">Jika lokasi pekerjaan lebih dari 1, silahkan ceklis sesuai dengan banyaknya lokasi yang akan dituju.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nama Direktur / Koordinator Subcont</label>
                                <input type="text" name="direktur_koordinat" class="form-control" id="direktur_koordinat" for="direktur_koordinat" value="<?= $direktur_koordinat?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nama PIC Subcont</label>
                                <input type="text" name="pic_subcont" class="form-control" id="pic_subcont" for="pic_subcont" value="<?= $pic_subcont?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nomor Handphone PIC Subcont</label>
                                <input type="number" name="nohp_subcont" class="form-control" id="nohp_subcont" for="nohp_subcont" value="<?= $nohp_subcont?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Jumlah PIC Subcont yang akan Bekerja</label>
                                <input type="number" name="jml_picsubcont" class="form-control" id="jml_picsubcont" for="jml_picsubcont" value="<?= $jml_picsubcont?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nama Pekerja (MP Subcont)</label>
                                <input type="text" name="namamp_subcont" class="form-control" id="namamp_subcont" for="namamp_subcont" value="<?= $namamp_subcont?>">
                                <div id="MPSubcontHelp" class="form-text"><small style="color: red;">Silahkan isi sesuai nama yang tertera di KTP, Jika lebih dari 1 pekerja pisahkan dengan tanda koma.</small></div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nama PIC PT CBI</label>
                                <input type="text" name="pic_cbi" class="form-control" id="pic_cbi" for="pic_cbi" value="<?= $pic_cbi?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Seksie PIC PT CBI</label>
                                <input type="text" name="sie_pic_cbi" class="form-control" id="sie_pic_cbi" for="sie_pic_cbi" value="<?= $sie_pic_cbi?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Nomor Handphone PIC PT CBI</label>
                                <input type="number" name="nohp_cbi" class="form-control" id="nohp_cbi" for="nohp_cbi" value="<?= $nohp_cbi?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Peralatan Kerja yang Dibawa</label>
                                <input type="text" name="peralatan" class="form-control" id="peralatan" for="peralatan" value="<?= $peralatan?>">
                                <div id="peralatanHelp" class="form-text">
                                    <small style="color: red;">Jika peralatan lebih dari 1 pisahkan dengan tanda koma.</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">APD yang Wajib Dipakai</label>
                                <input type="text" class="form-control" for="apd_dipakai" id="apd_dipakai" name="apd_dipakai" value="Mask/Respirator and Saftey Shoes" readonly>
                            </div>
                            <div class="form-group">
                                <label class="control-label">APD Tambahan</label>
                                <div class="form-group clearfix">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan1" name="apd_tambahan[]" value="Helmet" <?php in_array ('Helmet', $apd_tambahan) ? print "checked" : ""; ?>>
                                        <label class="form-check-label" for="apdtambahan1">
                                            Helmet
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan2" name="apd_tambahan[]" value="Safety Glass" <?php in_array ('Safety Glass', $apd_tambahan) ? print "checked" : ""; ?>>
                                        <label class="form-check-label" for="apdtambahan2">
                                            Safety Glass
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"  id="apdtambahan3" name="apd_tambahan[]" value="Safety Googles" <?php in_array ('Safety Googles', $apd_tambahan) ? print "checked" : ""; ?>>
                                        <label class="form-check-label" for="apdtambahan3">
                                            Safety Googles
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"  id="apdtambahan4" name="apd_tambahan[]" value="Face Shield" <?php in_array ('Face Shield', $apd_tambahan) ? print "checked" : ""; ?>>
                                        <label class="form-check-label" for="apdtambahan4">
                                            Face Shield
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"  id="apdtambahan5" name="apd_tambahan[]" value="Earplug" <?php in_array ('Earplug', $apd_tambahan) ? print "checked" : ""; ?>>
                                        <label class="form-check-label" for="apdtambahan5">
                                            Earplug
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan6" name="apd_tambahan[]" value="Earmuff" <?php in_array ('Earmuff', $apd_tambahan) ? print "checked" : ""; ?>>
                                        <label class="form-check-label" for="apdtambahan6">
                                            Earmuff
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan7" name="apd_tambahan[]" value="Full Body Harness" <?php in_array ('Full Body Harness', $apd_tambahan) ? print "checked" : ""; ?>>
                                        <label class="form-check-label" for="apdtambahan7">
                                            Full Body Harness
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan8" name="apd_tambahan[]" value="Sarung Lengan" <?php in_array ('Sarung Lengan', $apd_tambahan) ? print "checked" : ""; ?>>
                                        <label class="form-check-label" for="apdtambahan8">
                                            Sarung Lengan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan9" name="apd_tambahan[]" value="Sarung Tangan" <?php in_array ('Sarung Tangan', $apd_tambahan) ? print "checked" : ""; ?>>
                                        <label class="form-check-label" for="apdtambahan9">
                                            Sarung Tangan
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan10" name="apd_tambahan[]" value="APRON" <?php in_array ('APRON', $apd_tambahan) ? print "checked" : ""; ?>>
                                        <label class="form-check-label" for="apdtambahan10">
                                            APRON
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="apdtambahan11" name="apd_tambahan[]" value="APAR" <?php in_array ('APAR', $apd_tambahan) ? print "checked" : ""; ?>>
                                        <label class="form-check-label" for="apdtambahan11">
                                            APAR
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <small style="color: red;">Jika APD Tambahan lebih dari 1, silahkan ceklis sesuai dengan banyaknya APD yang dibawa.</small>
                                    </div>  
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Jenis Pekerjaan</label>
                                <input type="text" name="jenis_pekerjaan" class="form-control" id="jenis_pekerjaan" for="jenis_pekerjaan" value="<?= $jenis_pekerjaan?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Kategori Pekerjaan</label>
                                <div class="form-group clearfix">
                                    <div class="form-check">
                                        <input class="form-check-input detail" type="checkbox" id="defaultCheck24" name="kategori_pekerjaan[0]" value="umum" <?php in_array ('umum', $kategori_pekerjaan) ? print "checked" : ""; ?>>
                                        <label class="form-check-label" for="defaultCheck24">
                                            Umum
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input detail" type="checkbox"  id="defaultCheck25" name="kategori_pekerjaan[1]" value="libatkan panas" <?php in_array('libatkan panas', $kategori_pekerjaan) ? print "checked" : "";?>>
                                        <label class="form-check-label" for="defaultCheck25">
                                            Melibatkan Panas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input detail" type="checkbox"  id="defaultCheck26" name="kategori_pekerjaan[2]" value="libatkan ruang terbatas" <?php in_array('libatkan ruang terbatas', $kategori_pekerjaan) ? print "checked" : "";?>>
                                        <label class="form-check-label" for="defaultCheck26">
                                            Melibatkan Ruang Terbatas
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input detail" type="checkbox"  id="defaultCheck27" name="kategori_pekerjaan[3]" value="libatkan listrik tegangan tinggi" <?php in_array('libatkan listrik tegangan tinggi', $kategori_pekerjaan) ? print "checked" : "";?>>
                                        <label class="form-check-label" for="defaultCheck27">
                                            Melibatkan Listrik Tegangan Menengah Tinggi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input detail" type="checkbox" id="defaultCheck28" name="kategori_pekerjaan[4]" value="libatkan ketinggian" <?php in_array('libatkan ketinggian', $kategori_pekerjaan) ? print "checked" : "";?>>
                                        <label class="form-check-label" for="defaultCheck28">
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
                                                        <h3 class="box-title">SYARAT WAJIB</h3>
                                                        <p style="color: red;">Silahkan Ceklis Semua Syarat Wajib</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Wajib tersedia APAR" <?php in_array('Wajib tersedia APAR', $syarat_wajib) ? print "checked" : "";?> id="conditional-1">
                                                            <label class="form-check-label" for="conditional-1">
                                                                Wajib tersedia APAR
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Wajib proteksi area kerja" <?php in_array('Wajib proteksi area kerja', $syarat_wajib) ? print "checked" : "";?> id="conditional-2">
                                                            <label class="form-check-label" for="conditional-2">
                                                                Wajib dipasang pembatas (safety line)/ Cover area kerja 
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Bebas Area bahan mudah terbakar" <?php in_array('Bebas Area bahan mudah terbakar', $syarat_wajib) ? print "checked" : "";?> id="conditional-3">
                                                            <label class="form-check-label" for="conditional-3">
                                                                Area bebas dari cairan, debu, kain, B3 yang mudah terbakar
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Lindungi dengan TERPAL" <?php in_array('Lindungi dengan TERPAL', $syarat_wajib) ? print "checked" : "";?> id="conditional-4">
                                                            <label class="form-check-label" for="conditional-4">
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
                                                        <h3 class="box-title">SYARAT WAJIB</h3>
                                                        <p style="color: red;">Silahkan Ceklis Semua Syarat Wajib</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Min 2 Pekerja" <?php in_array('Min 2 Pekerja', $syarat_wajib) ? print "checked" : "";?> id="conditional-5">
                                                            <label class="form-check-label" for="conditional-5">
                                                                Minimal melibatkan 2 orang pekerja
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Wajib pastikan oksigen tersediaa" <?php in_array('Wajib pastikan oksigen tersediaa', $syarat_wajib) ? print "checked" : "";?> id="conditional-6">
                                                            <label class="form-check-label" for="conditional-6">
                                                                Wajib memastikan ketersediaan oksigen
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="atur waktu maksimal kerja" <?php in_array('atur waktu maksimal kerja', $syarat_wajib) ? print "checked" : "";?> id="conditional-7">
                                                            <label class="form-check-label" for="conditional-7">
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
                                                    <div class="col-sm-10">
                                                        <h3 class="box-title">SYARAT WAJIB</h3>
                                                        <p style="color: red;">Silahkan Ceklis Semua Syarat Wajib</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Min 2 Pekerja" <?php in_array('Min 2 Pekerja', $syarat_wajib) ? print "checked" : "";?> id="conditional-8">
                                                            <label class="form-check-label" for="conditional-8">
                                                                Minimal melibatkan 2 orang pekerja
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="cek scaffolding/tangga" <?php in_array('cek scaffolding/tangga', $syarat_wajib) ? print "checked" : "";?> id="conditional-9">
                                                            <label class="form-check-label" for="conditional-9">
                                                                Lakukan pengecekan alat kerja : scaffolding/ tangga.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="cek body harness dan helm" <?php in_array('cek body harness dan helm', $syarat_wajib) ? print "checked" : "";?> id="conditional-10">
                                                            <label class="form-check-label" for="conditional-10">
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
                                                    <div class="col-sm-10">
                                                        <h3 class="box-title">SYARAT WAJIB</h3>
                                                        <p style="color: red;">Silahkan Ceklis Semua Syarat Wajib</p>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Min 2 Pekerja" <?php in_array('Min 2 Pekerja', $syarat_wajib) ? print "checked" : "";?> id="conditional-11">
                                                            <label class="form-check-label" for="conditional-11">
                                                                Minimal melibatkan 2 orang pekerja.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="PIC memiliki sertifikat Teknisi K3 Listrik" <?php in_array('PIC memiliki sertifikat Teknisi K3 Listrik', $syarat_wajib) ? print "checked" : "";?> id="conditional-12">
                                                            <label class="form-check-label" for="conditional-12">
                                                                PIC harus mempunyai sertifikat Teknisi K3 Listrik.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Area memiliki penerangan yang cukup" <?php in_array('Area memiliki penerangan yang cukup', $syarat_wajib) ? "checked" : "";?>id="conditional-13">
                                                            <label class="form-check-label" for="conditional-13">
                                                                Area kerja harus mempunya penerangan yang cukup.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Area bebas genangan air" <?php in_array('Area bebas genangan air',$syarat_wajib) ? print "checked" : "";?> id="conditional-14">
                                                            <label class="form-check-label" for="conditional-14">
                                                                Area kerja harus bebas genangan air.
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Lengkap dengan LOTO sesuai Standar" <?php in_array('Lengkap dengan LOTO sesuai Standar', $syarat_wajib) ? print "checked" : "";?> id="conditional-15">
                                                            <label class="form-check-label" for="conditional-15">
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
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Step 2 : JSA Form</h3>
                            <div class="form-group">
                                <div class="row mb-3">
                                    <div class="col-sm-12">
                                        <table class="table" border="2">
                                            <thead>
                                                <tr>
                                                    <th>Aktivitas Pekerjaan</th>                      
                                                    <th>ASPEK LK3</th>
                                                    <th>DAMPAK LK3</th>
                                                    <th>Standar Pengamanan</th>
                                                </tr>
                                            </thead>
                                            <tbody id="form-jsa">
                                                <tr>
                                                    <td>
                                                        <div class="col-sm-12">
                                                            <input type="hidden" name="id_jsa">
                                                            <textarea class="form-control" id="aktivitas_pekerjaan" for="aktivitas_pekerjaan" name="aktivitas_pekerjaan[]" rows="3"></textarea>
                                                            <small style="color: red;">Isi Form ini dengan urutan pekerjaan yang akan dilakukan di PT CBI.</small> 
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group clearfix">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek1" name="aspek[]" value="JATUH DARI KETINGGIAN" <?php in_array('JATUH DARI KETINGGIAN', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek1">
                                                                JATUH DARI KETINGGIAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek2" name="aspek[]" value="TERSENGAT LISTRIK" <?php in_array('TERSENGAT LISTRIK', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek2">
                                                                TERSENGAT LISTRIK
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek3" name="aspek[]" value="TERJEPIT" <?php in_array('TERJEPIT', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek3">
                                                                TERJEPIT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek4" name="aspek[]" value="TERGELINCIR" <?php in_array('TERGELINCIR', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek4">
                                                                TERGELINCIR
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek5" name="aspek[]" value="TERKENA PERCIKAN LAS" <?php in_array('TERKENA PERCIKAN LAS', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek5">
                                                                TERKENA PERCIKAN LAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek6" name="aspek[]" value="GETARAN MEKANIS ALAT" <?php in_array('GETARAN MEKANIS ALAT', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek6">
                                                                GETARAN MEKANIS ALAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek7" name="aspek[]" value="TERPAPAR UAP" <?php in_array('TERPAPAR UAP', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek7">
                                                                TERPAPAR UAP
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek8" name="aspek[]" value="TERKENA PERCIKAN CAIRAN KIMIA" <?php in_array('TERKENA PERCIKAN CAIRAN KIMIA', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek8">
                                                                TERKENA PERCIKAN CAIRAN KIMIA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek9" name="aspek[]" value="TERSAYAT" <?php in_array('TERSAYAT', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek9">
                                                                    TERSAYAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek10" name="aspek[]" value="KEBAKARAN" <?php in_array('KEBAKARAN', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek10">
                                                                    KEBAKARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek11" name="aspek[]" value="LIMBAH B3 DAN NON B3" <?php in_array('LIMBAH B3 DAN NON B3', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek11">
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
                                                                <input class="form-check-input" type="checkbox" id="dampakl" name="dampak[]" value="PENCEMARAN LINGKUNGAN" <?= ($dampak[0] == 'PENCEMARAN LINGKUNGAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampakl">
                                                                    PENCEMARAN LINGKUNGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak2" name="dampak[]" value="KEMATIAN / FATALITY" <?= ($dampak[0] == 'KEMATIAN / FATALITY') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak2">
                                                                    KEMATIAN / FATALITY
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak3" name="dampak[]" value="PATAH TULANG" <?= ($dampak[0] == 'PATAH TULANG') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak3">
                                                                    PATAH TULANG
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak4" name="dampak[]" value="LUKA PADA TUBUH" <?= ($dampak[0] == 'LUKA PADA TUBUH') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak4">
                                                                    LUKA PADA TUBUH
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak5" name="dampak[]" value="LUKA PADA JARI / TANGAN" <?= ($dampak[0] == 'LUKA PADA JARI / TANGAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak5">
                                                                    LUKA PADA JARI / TANGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak6" name="dampak[]" value="LUKA PADA MATA" <?= ($dampak[0] == 'LUKA PADA MATA') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak6">
                                                                    LUKA PADA MATA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak7" name="dampak[]" value="LUKA BAKAR" <?= ($dampak[0] == 'LUKA BAKAR') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak7">
                                                                    LUKA BAKAR 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak8" name="dampak[]" value="KRAM PADA TANGAN / KAKI" <?= ($dampak[0] == 'KRAM PADA TANGAN / KAKI') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak8">
                                                                    KRAM PADA TANGAN / KAKI
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak9" name="dampak[]" value="KERUSAKAN FASILITAS" <?= ($dampak[0] == 'KERUSAKAN FASILITAS') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak9">
                                                                    KERUSAKAN FASILITAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak10" name="dampak[]" value="GANGGUAN PENDENGARAN" <?= ($dampak[0] == 'GANGGUAN PENDENGARAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak10">
                                                                    GANGGUAN PENDENGARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak11" name="dampak[]" value="GANGGUAN PERNAFASAN" <?= ($dampak[0] == 'GANGGUAN PERNAFASAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak11">
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
                                                            <textarea class="form-control" id="standar_pengamanan" for="standar_pengamanan" name="standar_pengamanan[]" rows="3"  required></textarea>   
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
                                                                <input class="form-check-input" type="checkbox" id="aspek12" name="aspek[]" value="JATUH DARI KETINGGIAN" <?php in_array('JATUH DARI KETINGGIAN', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek12">
                                                                JATUH DARI KETINGGIAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek13" name="aspek[]" value="TERSENGAT LISTRIK" <?php in_array('TERSENGAT LISTRIK', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek13">
                                                                TERSENGAT LISTRIK
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek14" name="aspek[]" value="TERJEPIT" <?php in_array('TERJEPIT', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek14">
                                                                TERJEPIT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek15" name="aspek[]" value="TERGELINCIR" <?php in_array('TERGELINCIR', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek15">
                                                                TERGELINCIR
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek16" name="aspek[]" value="TERKENA PERCIKAN LAS" <?php in_array('TERKENA PERCIKAN LAS', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek16">
                                                                TERKENA PERCIKAN LAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek17" name="aspek[]" value="GETARAN MEKANIS ALAT" <?php in_array('GETARAN MEKANIS ALAT', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek17">
                                                                GETARAN MEKANIS ALAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek18" name="aspek[]" value="TERPAPAR UAP" <?php in_array('TERPAPAR UAP', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek18">
                                                                TERPAPAR UAP
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek19" name="aspek[]" value="TERKENA PERCIKAN CAIRAN KIMIA" <?php in_array('TERKENA PERCIKAN CAIRAN KIMIA', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek19">
                                                                TERKENA PERCIKAN CAIRAN KIMIA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek20" name="aspek[]" value="TERSAYAT" <?php in_array('TERSAYAT', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek20">
                                                                    TERSAYAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek21" name="aspek[]" value="KEBAKARAN" <?php in_array('KEBAKARAN', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek21">
                                                                    KEBAKARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek22" name="aspek[]" value="LIMBAH B3 DAN NON B3" <?php in_array('LIMBAH B3 DAN NON B3', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek22">
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
                                                                <input class="form-check-input" type="checkbox" id="dampakl2" name="dampak[]" value="PENCEMARAN LINGKUNGAN"  <?= ($dampak[1] == 'PENCEMARAN LINGKUNGAN') ? "checked" : "";?> >
                                                                <label class="form-check-label" for="dampakl2">
                                                                    PENCEMARAN LINGKUNGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak13" name="dampak[]" value="KEMATIAN / FATALITY" <?= ($dampak[1] == 'KEMATIAN / FATALITY') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak13">
                                                                    KEMATIAN / FATALITY
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak14" name="dampak[]" value="PATAH TULANG" <?= ($dampak[1] == 'PATAH TULANG') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak14">
                                                                    PATAH TULANG
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak15" name="dampak[]" value="LUKA PADA TUBUH" <?= ($dampak[1] == 'LUKA PADA TUBUH') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak15">
                                                                    LUKA PADA TUBUH
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak16" name="dampak[]" value="LUKA PADA JARI / TANGAN" <?= ($dampak[1] == 'LUKA PADA JARI / TANGAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak16">
                                                                    LUKA PADA JARI / TANGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak17" name="dampak[]" value="LUKA PADA MATA" <?= ($dampak[1] == 'LUKA PADA MATA') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak17">
                                                                    LUKA PADA MATA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak18" name="dampak[]" value="LUKA BAKAR" <?= ($dampak[1] == 'LUKA BAKAR') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak18">
                                                                    LUKA BAKAR 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak19" name="dampak[]" value="KRAM PADA TANGAN / KAKI" <?= ($dampak[1] == 'KRAM PADA TANGAN / KAKI') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak19">
                                                                    KRAM PADA TANGAN / KAKI
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak20" name="dampak[]" value="KERUSAKAN FASILITAS" <?= ($dampak[1] == 'KERUSAKAN FASILITAS') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak20">
                                                                    KERUSAKAN FASILITAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak21" name="dampak[]" value="GANGGUAN PENDENGARAN" <?= ($dampak[1] == 'GANGGUAN PENDENGARAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak21">
                                                                    GANGGUAN PENDENGARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak22" name="dampak[]" value="GANGGUAN PERNAFASAN" <?= ($dampak[1] == 'GANGGUAN PERNAFASAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak22">
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
                                                                <input class="form-check-input" type="checkbox" id="aspek23" name="aspek[]" value="JATUH DARI KETINGGIAN" <?php in_array('JATUH DARI KETINGGIAN', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek23">
                                                                JATUH DARI KETINGGIAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek24" name="aspek[]" value="TERSENGAT LISTRIK" <?php in_array('TERSENGAT LISTRIK', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek24">
                                                                TERSENGAT LISTRIK
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek25" name="aspek[]" value="TERJEPIT" <?php in_array('TERJEPIT', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek25">
                                                                TERJEPIT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek26" name="aspek[]" value="TERGELINCIR" <?php in_array('TERGELINCIR', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek26">
                                                                TERGELINCIR
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek27" name="aspek[]" value="TERKENA PERCIKAN LAS" <?php in_array('TERKENA PERCIKAN LAS', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek27">
                                                                TERKENA PERCIKAN LAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek28" name="aspek[]" value="GETARAN MEKANIS ALAT" <?php in_array('GETARAN MEKANIS ALAT', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek28">
                                                                GETARAN MEKANIS ALAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek29" name="aspek[]" value="TERPAPAR UAP" <?php in_array('TERPAPAR UAP', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek29">
                                                                TERPAPAR UAP
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek30" name="aspek[]" value="TERKENA PERCIKAN CAIRAN KIMIA" <?php in_array('TERKENA PERCIKAN CAIRAN KIMIA', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek30">
                                                                TERKENA PERCIKAN CAIRAN KIMIA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek31" name="aspek[]" value="TERSAYAT" <?php in_array('TERSAYAT', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek31">
                                                                    TERSAYAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek32" name="aspek[]" value="KEBAKARAN" <?php in_array('KEBAKARAN', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek32">
                                                                    KEBAKARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek33" name="aspek[]" value="LIMBAH B3 DAN NON B3" <?php in_array('LIMBAH B3 DAN NON B3', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek33">
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
                                                                <input class="form-check-input" type="checkbox" id="dampak23" name="dampak[]" value="PENCEMARAN LINGKUNGAN" <?= ($dampak[2] == 'PENCEMARAN LINGKUNGAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak23">
                                                                    PENCEMARAN LINGKUNGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak24" name="dampak[]" value="KEMATIAN / FATALITY" <?= ($dampak[2] == 'KEMATIAN / FATALITY') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak24">
                                                                    KEMATIAN / FATALITY
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak25" name="dampak[]" value="PATAH TULANG" <?= ($dampak[2] == 'PATAH TULANG') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak25">
                                                                    PATAH TULANG
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak26" name="dampak[]" value="LUKA PADA TUBUH" <?= ($dampak[2] == 'LUKA PADA TUBUH') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak26">
                                                                    LUKA PADA TUBUH
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak27" name="dampak[]" value="LUKA PADA JARI / TANGAN" <?= ($dampak[2] == 'LUKA PADA JARI / TANGAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak27">
                                                                    LUKA PADA JARI / TANGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak28" name="dampak[]" value="LUKA PADA MATA" <?= ($dampak[2] == 'LUKA PADA MATA') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak28">
                                                                    LUKA PADA MATA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak29" name="dampak[]" value="LUKA BAKAR" <?= ($dampak[2] == 'LUKA BAKAR') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak29">
                                                                    LUKA BAKAR 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak30" name="dampak[]" value="KRAM PADA TANGAN / KAKI" <?= ($dampak[2] == 'KRAM PADA TANGAN / KAKI') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak30">
                                                                    KRAM PADA TANGAN / KAKI
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak31" name="dampak[]" value="KERUSAKAN FASILITAS" <?= ($dampak[2] == 'KERUSAKAN FASILITAS') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak31">
                                                                    KERUSAKAN FASILITAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak32" name="dampak[]" value="GANGGUAN PENDENGARAN" <?= ($dampak[2] == 'GANGGUAN PENDENGARAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak32">
                                                                    GANGGUAN PENDENGARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak33" name="dampak[]" value="GANGGUAN PERNAFASAN" <?= ($dampak[2] == 'GANGGUAN PERNAFASAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak33">
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
                                                                <input class="form-check-input" type="checkbox" id="aspek34" name="aspek[]" value="JATUH DARI KETINGGIAN" <?php in_array('JATUH DARI KETINGGIAN', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek34">
                                                                JATUH DARI KETINGGIAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek35" name="aspek[]" value="TERSENGAT LISTRIK" <?php in_array('TERSENGAT LISTRIK', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek35">
                                                                TERSENGAT LISTRIK
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek36" name="aspek[]" value="TERJEPIT" <?php in_array('TERJEPIT', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek36">
                                                                TERJEPIT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="aspek37" name="aspek[]" value="TERGELINCIR" <?php in_array('TERGELINCIR', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek37">
                                                                TERGELINCIR
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek38" name="aspek[]" value="TERKENA PERCIKAN LAS" <?php in_array('TERKENA PERCIKAN LAS', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek38">
                                                                TERKENA PERCIKAN LAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek39" name="aspek[]" value="GETARAN MEKANIS ALAT" <?php in_array('GETARAN MEKANIS ALAT', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek39">
                                                                GETARAN MEKANIS ALAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek40" name="aspek[]" value="TERPAPAR UAP" <?php in_array('TERPAPAR UAP', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek40">
                                                                TERPAPAR UAP
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek41" name="aspek[]" value="TERKENA PERCIKAN CAIRAN KIMIA" <?php in_array('TERKENA PERCIKAN CAIRAN KIMIA', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek41">
                                                                TERKENA PERCIKAN CAIRAN KIMIA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek42" name="aspek[]" value="TERSAYAT" <?php in_array('TERSAYAT', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek42">
                                                                    TERSAYAT
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek43" name="aspek[]" value="KEBAKARAN" <?php in_array('KEBAKARAN', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek43">
                                                                    KEBAKARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="aspek44" name="aspek[]" value="LIMBAH B3 DAN NON B3" <?php in_array('LIMBAH B3 DAN NON B3', $aspek) ? print "checked" : "";?>>
                                                                <label class="form-check-label" for="aspek44">
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
                                                                <input class="form-check-input" type="checkbox" id="dampak34" name="dampak[]" value="PENCEMARAN LINGKUNGAN" <?= ($dampak[3] == 'PENCEMARAN LINGKUNGAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak34">
                                                                    PENCEMARAN LINGKUNGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak35" name="dampak[]" value="KEMATIAN / FATALITY" <?= ($dampak[3] == 'KEMATIAN / FATALITY') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak35">
                                                                    KEMATIAN / FATALITY
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak36" name="dampak[]" value="PATAH TULANG" <?= ($dampak[3] == 'PATAH TULANG') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak36">
                                                                    PATAH TULANG
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"  id="dampak37" name="dampak[]" value="LUKA PADA TUBUH" <?= ($dampak[3] == 'LUKA PADA TUBUH') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak37">
                                                                    LUKA PADA TUBUH
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak38" name="dampak[]" value="LUKA PADA JARI / TANGAN" <?= ($dampak[3] == 'LUKA PADA JARI / TANGAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak38">
                                                                    LUKA PADA JARI / TANGAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak39" name="dampak[]" value="LUKA PADA MATA" <?= ($dampak[3] == 'LUKA PADA MATA') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak39">
                                                                    LUKA PADA MATA
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak40" name="dampak[]" value="LUKA BAKAR" <?= ($dampak[3] == 'LUKA BAKAR') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak40">
                                                                    LUKA BAKAR 
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak41" name="dampak[]" value="KRAM PADA TANGAN / KAKI" <?= ($dampak[3] == 'KRAM PADA TANGAN / KAKI') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak41">
                                                                    KRAM PADA TANGAN / KAKI
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak42" name="dampak[]" value="KERUSAKAN FASILITAS" <?= ($dampak[3] == 'KERUSAKAN FASILITAS') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak42">
                                                                    KERUSAKAN FASILITAS
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak43" name="dampak[]" value="GANGGUAN PENDENGARAN" <?= ($dampak[3] == 'GANGGUAN PENDENGARAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak43">
                                                                    GANGGUAN PENDENGARAN
                                                                </label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="dampak44" name="dampak[]" value="GANGGUAN PERNAFASAN" <?= ($dampak[3] == 'GANGGUAN PERNAFASAN') ? "checked" : "";?>>
                                                                <label class="form-check-label" for="dampak44">
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
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Step 3</h3>
                            <button class="btn btn-success btn-lg pull-right" type="submit">Simpan!</button>
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

                $(".detail").click(function() {
                    checkConditional()
                    checkConditional2()
                    checkConditional3()
                    checkConditional4()
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
            });

        </script>

    </body>

</html>