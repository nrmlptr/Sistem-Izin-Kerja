<div class="row justify-content-center">
    <div class="col-lg-6">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary"><b>Data Izin Kerja Subcont -- </b>
                    <a href="<?= base_url('dashboard/konfirm_subcont');?>" class="btn btn-info">Kembali</a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body text-left py-4">
                                <p><b>Nomor Registrasi</b>      : <?php echo $sbc[0]->no_regis?> </p>
                                <p>Nama Perusahaan              : <?= $sbc[0]->nama_perusahaan;?></p>
                                <p>Alamat Perusahaan            : <?= $sbc[0]->alamat_perusahaan;?></p>
                                <p>Tanggal Mulai Bekerja        : <?= $sbc[0]->wkt_mulai;?> </p>
                                <p>Tanggal Selesai Bekerja      : <?= $sbc[0]->wkt_selesai;?></p>
                                <p>Lokasi Pekerjaan             : <?= $sbc[0]->lokasi_pekerjaan;?></p>
                                <p>Direktur Koordinat Subcont   : <?= $sbc[0]->direktur_koordinat;?> </p>
                                <p>Nama PIC Subcont             : <?= $sbc[0]->pic_subcont;?></p>
                                <p>No HP Subcont                : <?= $sbc[0]->nohp_subcont;?></p>
                                <p>Jumlah Pekerja Subcont       : <?= $sbc[0]->jml_picsubcont;?> </p>
                                <p>Nama Pekerja Subcont         : <?= $sbc[0]->namamp_subcont;?></p>
                                <p>Nama PIC PT CBI              : <?= $sbc[0]->pic_cbi;?></p>
                                <p>Seksie PIC PT CBI            : <?= $sbc[0]->sie_pic_cbi;?> </p>
                                <p>No HP PIC PT CBI             : <?= $sbc[0]->nohp_cbi;?></p>
                                <p>Peralatan                    : <?= $sbc[0]->peralatan;?></p>
                                <p>APD Wajib                    : <?= $sbc[0]->apd_dipakai;?> </p>
                                <p>APD Tambahan                 : <?= $sbc[0]->apd_tambahan;?></p>
                                <p>Jenis Pekerjaan              : <?= $sbc[0]->jenis_pekerjaan;?></p>
                                <p>Kategori Pekerjaan           : <?= $sbc[0]->kategori_pekerjaan;?></p>
                                <p>Syarat Wajib                 : <?= $sbc[0]->syarat_wajib;?></p>
                                <p>Validasi Data                : <?= $sbc[0]->validasi;?></p>
                                <p style="color:royalblue;"><b>Status                       : <?= $sbc[0]->status;?></b></p>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h5><b>Job Safety Analysis (JSA)</b></h5>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr align="center">
                                                    <th>Aktivitas Pekerjaan</th>
                                                    <th>Aspek LK3</th>
                                                    <th>Dampak LK3</th>
                                                    <th>Standar Pengamanan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr align="center">
                                                    <td><?php echo $sbc[0]->aktivitas_pekerjaan?></td>
                                                    <td><?php echo $sbc[0]->aspek ?></td>
                                                    <td><?php echo $sbc[0]->dampak?></td>
                                                    <td><?php echo $sbc[0]->standar_pengamanan?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
