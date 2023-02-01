<html><head>

<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    tr:nth-child(even){
        background-color: #D6EEEE;
    }
</style>
<title> Cetak PDF Data Detail</title>

</head><body>

<h2>Data Detail Izin Kerja Subcont PT CBI</h2>
<hr>
<div class="card-body">
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="card-body text-left py-2">
                    <table class="table table-bordered">
                        <tr >
                            <td><b> Nomor Registrasi </b></td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->no_regis?> </td>
                        </tr>
                        <tr >
                            <td> Nama Perusahaan </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->nama_perusahaan?> </td>
                        </tr>
                        <tr >
                            <td> Alamat Perusahaan </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->alamat_perusahaan?> </td>
                        </tr>
                        <tr >
                            <td> Tanggal Mulai dan Selesai Bekerja  </td>
                            <!-- <td> : </td> -->
                            <td> <?= $sbc[0]->wkt_mulai.' s/d '.$sbc[0]->wkt_selesai;?>  </td>
                        </tr>
                        <tr >
                            <td> Lokasi Pekerjaan </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->lokasi_pekerjaan?> </td>
                        </tr>
                        <tr >
                            <td> Direktur/Koordinat Subcont </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->direktur_koordinat?> </td>
                        </tr>
                        <tr >
                            <td> Nama PIC Subcont </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->pic_subcont?> </td>
                        </tr>
                        <tr >
                            <td> No HP Subcont </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->nohp_subcont?> </td>
                        </tr>
                        <tr >
                            <td> Jumlah Pekerja Subcont </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->jml_picsubcont?> </td>
                        </tr>
                        <tr >
                            <td> Nama Pekerja Subcont </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->namamp_subcont?> </td>
                        </tr>
                        <tr >
                            <td> Nama PIC PT CBI </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->pic_cbi?> </td>
                        </tr>
                        <tr >
                            <td> Seksie PIC PT CBI </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->sie_pic_cbi?> </td>
                        </tr>
                        <tr >
                            <td> No HP PIC PT CBI </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->nohp_cbi?> </td>
                        </tr>
                        <tr >
                            <td> Peralatan </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->peralatan?> </td>
                        </tr>
                        <tr >
                            <td> APD Wajib </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->apd_dipakai?> </td>
                        </tr>
                        <tr >
                            <td> APD Tambahan </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->apd_tambahan?> </td>
                        </tr>
                        <tr >
                            <td> Jenis Pekerjaan </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->jenis_pekerjaan?> </td>
                        </tr>
                        <tr >
                            <td> Kategori Pekerjaan </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->kategori_pekerjaan?> </td>
                        </tr>
                        <tr >
                            <td> Syarat Wajib </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->syarat_wajib?> </td>
                        </tr>
                        <tr >
                            <td> Validasi Data </td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->validasi?> </td>
                        </tr>
                        <tr >
                            <td><b style="color: blue;"> Status </b></td>
                            <!-- <td> : </td> -->
                            <td> <?php echo $sbc[0]->status?> </td>
                        </tr>
                        <!-- <br> -->
                    </table>
                    <!-- <br> -->
                    <!-- <br>
                    <br> -->
                    <!-- <div class="row">
                        <div class="col-12">
                            <h1><b>Job Safety Analysis (JSA)</b></h1>
                            <hr>
                            <table class="table table-bordered"> -->
                                <!-- <thead> -->
                                    <!-- <tr align="center">
                                        <th>Aktivitas Pekerjaan</th>
                                        <th>Aspek LK3</th>
                                        <th>Dampak LK3</th>
                                        <th>Standar Pengamanan</th>
                                    </tr> -->
                                <!-- </thead> -->
                                <!-- <tbody> -->
                                    <!-- <tr align="center">
                                        <td><?php echo $sbc[0]->aktivitas_pekerjaan?></td>
                                        <td><?php echo $sbc[0]->aspek ?></td>
                                        <td><?php echo $sbc[0]->dampak ?></td>
                                        <td><?php echo $sbc[0]->standar_pengamanan?></td>
                                    </tr> -->
                                <!-- </tbody> -->
                            <!-- </table>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div> 
<!-- <br> -->
<p style="color: red;">Note : Jika membutuhkan informasi lebih lanjut silahkan hubungi pihak PIC PT CBI.</p>
</body></html>