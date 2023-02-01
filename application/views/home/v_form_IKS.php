<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FORM IKS - PT CBI</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/sbadmin/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/sbadmin/');?>css/sb-admin-2.min.css" rel="stylesheet">
    <script src="<?php echo base_url('assets/sbadmin');?>/js/sweetalert2.all.min.js"></script>
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row">
            <div class="card my-5" style="width: 600rem;">
                <div class="card-header">
                    <h3 class="card-title">FORM IZIN KERJA SUBCONT</h3>
                    <p>E-Form ini merupakan ijin kerja yang wajib diisi oleh subcont sebelum bekerja di PT CBI</p>
                </div>
                <form action="<?php echo base_url('Home/proses_simpan_IKS');?>" method="POST">
                    <input type="hidden" name="id_subcont" value="">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="no_regis" class="col-sm-2 col-form-label">Nomor Registrasi</label>
                            <div class="col-sm-3">
                            <input type="text" name="no_regis" value="<?php echo $no_regis?>" class="form-control" id="no_regis" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_pengajuan" class="col-sm-2 col-form-label">Tanggal Pengisian Form</label>
                            <div class="col-sm-2">
                                <input type="date" name="tanggal_pengajuan" class="form-control" id="tanggal_pengajuan" for="tanggal_pengajuan" value="<?php echo date("Y-m-d");?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                            <div class="col-sm-8">
                            <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" for="nama_perusahaan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_perusahaan" class="col-sm-2 col-form-label">Alamat Perusahaan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="alamat_perusahaan" for="alamat_perusahaan" name="alamat_perusahaan" rows="3"  required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="wkt_mulai"class="col-sm-2 col-form-label">Tanggal Mulai Bekerja</label>
                            <div class="col-sm-2">
                                <input type="date" name="wkt_mulai" class="form-control" id="wkt_mulai" for="wkt_mulai" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="wkt_selesai" class="col-sm-2 col-form-label">Tanggal Selesai Bekerja</label>
                            <div class="col-sm-2">
                                <input type="date" name="wkt_selesai" class="form-control" id="wkt_selesai" for="wkt_selesai" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputLokasiP" class="col-sm-2 col-form-label">Lokasi Pekerjaan</label>
                            <div class="form-group clearfix">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Area Office" id="defaultCheck1" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Area Office
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Area Taman" id="defaultCheck2" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck2">
                                        Area Taman
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gedung A - Assembling" id="defaultCheck3" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck3">
                                        Gedung A - Assembling 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gedung A - Charging" id="defaultCheck4" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck4">
                                        Gedung A - Charging
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gedung B - Grid Casting" id="defaultCheck5" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck5">
                                        Gedung B - Grid Casting
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gedung B - Lead Powder Pasting" id="defaultCheck6" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck6">
                                        Gedung B - Lead Powder Pasting
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gedung C - Formation" id="defaultCheck7" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck7">
                                        Gedung C - Formation
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gedung D - Assembling" id="defaultCheck8" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck8">
                                        Gedung D - Assembling
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gedung D - Tooling" id="defaultCheck9" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck9">
                                        Gedung D - Tooling
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gedung D - Workshop" id="defaultCheck10" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck10">
                                        Gedung D - Workshop
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gedung E - Ballmill" id="defaultCheck11" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck11">
                                        Gedung E - Ballmill
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=" Gedung E - Punchgrid" id="defaultCheck12" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck12">
                                        Gedung E - Punchgrid
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gedung F - Formation" id="defaultCheck13" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck13">
                                        Gedung F - Formation
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gedung F - Charging" id="defaultCheck14" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck14">
                                        Gedung F - Charging
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Gedung G - Assembling" id="defaultCheck15" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck15">
                                        Gedung G - Assembling
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=" Warehouse Komponen" id="defaultCheck16" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck16">
                                        Warehouse Komponen
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=" Warehouse Finishgood" id="defaultCheck17" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck17">
                                        Warehouse Finishgood
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="ehs" id="defaultCheck18" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck18">
                                        EHS (Acid dil, demin water, WWT)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="TPS" id="defaultCheck19" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck19">
                                       TPS
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Maintenance" id="defaultCheck20" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck20">
                                        Maintenance
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="utility_gp" id="defaultCheck21" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck21">
                                        Utility (Genset, Powerhouse)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="utility_dsck" id="defaultCheck22" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck22">
                                        Utility (Dust Collector, Scrubber, Cooling Tower dan Kompressor)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="All Area Pabrik" id="defaultCheck23" name="lokasi_pekerjaan[]">
                                    <label class="form-check-label" for="defaultCheck23">
                                        All Area Pabrik
                                    </label>
                                </div>
                                <div class="form-group">
                                    <small style="color: red;">Jika lokasi pekerjaan lebih dari 1, silahkan ceklis sesuai dengan banyaknya lokasi yang akan dituju.</small>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direktur_koordinat" class="col-sm-2 col-form-label">Nama Direktur / Koordinator Subcont</label>
                            <div class="col-sm-8">
                                <input type="text" name="direktur_koordinat" class="form-control" id="direktur_koordinat" for="direktur_koordinat" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pic_subcont" class="col-sm-2 col-form-label">Nama PIC Subcont</label>
                            <div class="col-sm-8">
                            <input type="text" name="pic_subcont" class="form-control" id="pic_subcont" for="pic_subcont" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nohp_subcont" class="col-sm-2 col-form-label">Nomor Handphone PIC Subcont</label>
                            <div class="col-sm-3">
                                <input type="number" name="nohp_subcont" class="form-control" id="nohp_subcont" for="nohp_subcont" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jml_picsubcont" class="col-sm-2 col-form-label">Jumlah PIC Subcont yang akan Bekerja</label>
                            <div class="col-sm-3">
                                <input type="number" name="jml_picsubcont" class="form-control" id="jml_picsubcont" for="jml_picsubcont" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namamp_subcont" class="col-sm-2 col-form-label">Nama Pekerja (MP Subcont)</label>
                            <div class="col-sm-8">
                            <input type="text" name="namamp_subcont" class="form-control" id="namamp_subcont" for="namamp_subcont" required>
                            <div id="MPSubcontHelp" class="form-text"><small style="color: red;">Silahkan isi sesuai nama yang tertera di KTP, Jika lebih dari 1 pekerja pisahkan dengan tanda koma.</small></div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pic_cbi" class="col-sm-2 col-form-label">Nama PIC PT CBI</label>
                            <div class="col-sm-8">
                                <input type="text" name="pic_cbi" class="form-control" id="pic_cbi" for="pic_cbi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sie_pic_cbi" class="col-sm-2 col-form-label">Seksie PIC PT CBI</label>
                            <div class="col-sm-3">
                                <input type="text" name="sie_pic_cbi" class="form-control" id="sie_pic_cbi" for="sie_pic_cbi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nohp_cbi" class="col-sm-2 col-form-label">Nomor Handphone PIC PT CBI</label>
                            <div class="col-sm-3">
                                <input type="number" name="nohp_cbi" class="form-control" id="nohp_cbi" for="nohp_cbi" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="peralatan" class="col-sm-2 col-form-label">Peralatan Kerja yang Dibawa</label>
                            <div class="col-sm-8">
                                <input type="text" name="peralatan" class="form-control" id="peralatan" for="peralatan" required>
                                <div id="peralatanHelp" class="form-text">
                                    <small style="color: red;">Jika peralatan lebih dari 1 pisahkan dengan tanda koma.</small>
                                </div>
                            </div>  
                        </div>
                        <div class="form-group row">
                            <label for="inputAPDW" class="col-sm-2 col-form-label">APD yang Wajib Dipakai</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" for="apd_dipakai" id="apd_dipakai" name="apd_dipakai" value="Mask/Respirator and Saftey Shoes" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputAPDT" class="col-sm-2 col-form-label">APD Tambahan</label>
                            <div class="form-group clearfix">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="apdtambahan1" name="apd_tambahan[]" value="Helmet">
                                    <label class="form-check-label" for="apdtambahan1">
                                        Helmet
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="apdtambahan2" name="apd_tambahan[]" value="Safety Glass">
                                    <label class="form-check-label" for="apdtambahan2">
                                        Safety Glass
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="apdtambahan3" name="apd_tambahan[]" value="Safety Googles">
                                    <label class="form-check-label" for="apdtambahan3">
                                        Safety Googles
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="apdtambahan4" name="apd_tambahan[]" value="Face Shield">
                                    <label class="form-check-label" for="apdtambahan4">
                                        Face Shield
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"  id="apdtambahan5" name="apd_tambahan[]" value="Earplug">
                                    <label class="form-check-label" for="apdtambahan5">
                                        Earplug
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="apdtambahan6" name="apd_tambahan[]" value="Earmuff">
                                    <label class="form-check-label" for="apdtambahan6">
                                        Earmuff
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="apdtambahan7" name="apd_tambahan[]" value="Full Body Harness">
                                    <label class="form-check-label" for="apdtambahan7">
                                        Full Body Harness
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="apdtambahan8" name="apd_tambahan[]" value="Sarung Lengan">
                                    <label class="form-check-label" for="apdtambahan8">
                                        Sarung Lengan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="apdtambahan9" name="apd_tambahan[]" value="Sarung Tangan">
                                    <label class="form-check-label" for="apdtambahan9">
                                       Sarung Tangan
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="apdtambahan10" name="apd_tambahan[]" value="APRON">
                                    <label class="form-check-label" for="apdtambahan10">
                                        APRON
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="apdtambahan11" name="apd_tambahan[]" value="APAR">
                                    <label class="form-check-label" for="apdtambahan11">
                                       APAR
                                    </label>
                                </div>
                                <div class="form-group">
                                    <small style="color: red;">Jika APD Tambahan lebih dari 1, silahkan ceklis sesuai dengan banyaknya APD yang dibawa.</small>
                                </div>  
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_pekerjaan" class="col-sm-2 col-form-label">Jenis Pekerjaan</label>
                            <div class="col-sm-4">
                                <input type="text" name="jenis_pekerjaan" class="form-control" id="jenis_pekerjaan" for="jenis_pekerjaan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKategoriP" class="col-sm-2 col-form-label">Kategori Pekerjaan</label>
                            <div class="form-group clearfix">
                                <div class="form-check">
                                    <input class="form-check-input detail" type="checkbox" id="defaultCheck24" name="kategori_pekerjaan[0]" value="umum">
                                    <label class="form-check-label" for="defaultCheck24">
                                        Umum
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input detail" type="checkbox"  id="defaultCheck25" name="kategori_pekerjaan[1]" value="libatkan panas">
                                    <label class="form-check-label" for="defaultCheck25">
                                        Melibatkan Panas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input detail" type="checkbox"  id="defaultCheck26" name="kategori_pekerjaan[2]" value="libatkan ruang terbatas">
                                    <label>
                                        Melibatkan Ruang Terbatas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input detail" type="checkbox"  id="defaultCheck27" name="kategori_pekerjaan[3]" value="libatkan listrik tegangan tinggi">
                                    <label class="form-check-label" for="defaultCheck27">
                                        Melibatkan Listrik Tegangan Menengah Tinggi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input detail" type="checkbox" id="defaultCheck28" name="kategori_pekerjaan[4]" value="libatkan ketinggian">
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
                                                    <p>Silahkan Ceklis Semua Syarat Wajib</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Wajib tersedia APAR" id="conditional-1">
                                                        <label class="form-check-label" for="conditional-1">
                                                            Wajib tersedia APAR
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Wajib proteksi area kerja" id="conditional-2">
                                                        <label class="form-check-label" for="conditional-2">
                                                            Wajib dipasang pembatas (safety line)/ Cover area kerja 
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Bebas Area bahan mudah terbakar" id="conditional-3">
                                                        <label class="form-check-label" for="conditional-3">
                                                            Area bebas dari cairan, debu, kain, B3 yang mudah terbakar
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Lindungi dengan TERPAL" id="conditional-4">
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
                                                    <p>Silahkan Ceklis Semua Syarat Wajib</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Min 2 Pekerja" id="conditional-5">
                                                        <label class="form-check-label" for="conditional-5">
                                                            Minimal melibatkan 2 orang pekerja
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Wajib pastikan oksigen tersediaa" id="conditional-6">
                                                        <label class="form-check-label" for="conditional-6">
                                                            Wajib memastikan ketersediaan oksigen
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="atur waktu maksimal kerja" id="conditional-7">
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
                                                    <p>Silahkan Ceklis Semua Syarat Wajib</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="Min 2 Pekerja" id="conditional-8">
                                                        <label class="form-check-label" for="conditional-8">
                                                            Minimal melibatkan 2 orang pekerja
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="cek scaffolding/tangga" id="conditional-9">
                                                        <label class="form-check-label" for="conditional-9">
                                                            Lakukan pengecekan alat kerja : scaffolding/ tangga.
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="syarat_wajib[]" value="cek body harness dan helm" id="conditional-10">
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
                    </div>


                    <!-- footer untuk button simpan dan selanjutnya -->
                    <div class="card-footer">
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        <button type="submit" id="btn" class="form-control btn btn-secondary d-none">Simpan</button>
                        <button type="button" id="btnAlert" class="form-control btn btn-secondary">Simpan</button>
                        <button class="form-control btn btn-danger mt-4"><a href="<?php echo base_url('Login/index');?>" style="color: white;">Cancel</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/sbadmin/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/sbadmin/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/sbadmin/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/sbadmin/');?>js/sb-admin-2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            checkConditional()
            checkConditional2()
            checkConditional3()

            $(".detail").click(function() {
                checkConditional()
                checkConditional2()
                checkConditional3()
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
        });

        // $("input[name='kategori_pekerjaan[]']:checked").val()
        // alert($("input[name='kategori_pekerjaan[0]']").val())

        //sweet alert untuk save data
        $('#btnAlert').on('click',function(){
            Swal.fire({
                title: 'Mengirim Data',
                text: "Apakah Data yang Diisi Sudah Benar ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Lanjutkan'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#btn').click();
                    Swal.fire('Data Berhasil Dikirim !', '', 'success')
                }
            })
        });
    </script>

</body>

</html>