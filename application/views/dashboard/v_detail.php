<div class="row justify-content-center">
    <div class="col-lg-6">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-dark"><b>Data Izin Kerja Subcont | </b>
                    <?php if($sbc[0]->status == 'approved'):?>
                        <a href="<?php echo base_url('dashboard/cetak_detail/'.$sbc[0]->id_subcont)?>">
                            <button class='btn btn-secondary'> Cetak Data <i class="fa fa-print"></i></button>
                        </a>
                    <?php endif;?>
                    <!-- <a href="<?php echo base_url('dashboard/cetak_detail/'.$sbc[0]->id_subcont)?>"><button class='btn btn-secondary'>Cetak Detail</button></a> -->
                    <a href="<?= base_url('dashboard/konfirm_form');?>" class="btn btn-success"> Kembali <i class="fa fa-home"></i></a>
                </h5>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="card-body text-left py-4">
                                <p style="color: black;"><b>Nomor Registrasi</b>              : <?= $sbc[0]->no_regis?> </p>
                                <p style="color: black;">Nama Perusahaan                      : <?= $sbc[0]->nama_perusahaan;?></p>
                                <p style="color: black;">Alamat Perusahaan                    : <?= $sbc[0]->alamat_perusahaan;?></p>
                                <p style="color: black;">Tanggal Mulai Bekerja                : <?= $sbc[0]->wkt_mulai;?> </p>
                                <p style="color: black;">Tanggal Selesai Bekerja              : <?= $sbc[0]->wkt_selesai;?></p>
                                <p style="color: black;">Lokasi Pekerjaan                     : <?= $sbc[0]->lokasi_pekerjaan;?></p>
                                <p style="color: black;">Nama Direktur/Koordinator Subcont    : <?= $sbc[0]->direktur_koordinat;?> </p>                                <p style="color: black;">Nama PIC Subcont                     : <?= $sbc[0]->pic_subcont;?></p>
                                <p style="color: black;">No HP Subcont                        : <?= $sbc[0]->nohp_subcont;?></p>
                                <p style="color: black;">Jumlah Pekerja Subcont               : <?= $sbc[0]->jml_picsubcont;?> </p>
                                <p style="color: black;">Nama Pekerja Subcont                 : <?= $sbc[0]->namamp_subcont;?></p>
                                <p style="color: black;">Nama PIC PT CBI                      : <?= $sbc[0]->pic_cbi;?></p>
                                <p style="color: black;">Seksie PIC PT CBI                    : <?= $sbc[0]->sie_pic_cbi;?> </p>
                                <p style="color: black;">No HP PIC PT CBI                     : <?= $sbc[0]->nohp_cbi;?></p>
                                <p style="color: black;">Peralatan                            : <?= $sbc[0]->peralatan;?></p>
                                <p style="color: black;">APD Wajib                            : <?= $sbc[0]->apd_dipakai;?> </p>
                                <p style="color: black;">APD Tambahan                         : <?= $sbc[0]->apd_tambahan;?></p>
                                <p style="color: black;">Jenis Pekerjaan                      : <?= $sbc[0]->jenis_pekerjaan;?></p>
                                <p style="color: black;">Kategori Pekerjaan                   : <?= $sbc[0]->kategori_pekerjaan;?></p>
                                <p style="color: black;">Syarat Wajib                         : <?= $sbc[0]->syarat_wajib;?></p>
                                <!-- <p style="color: black;">Validasi Data                   : <?= $sbc[0]->validasi;?></p> -->
                                <!-- <p style="color:royalblue;"><b>Status                    : <?= $sbc[0]->status;?></b><br></p> -->
                                <p style="color: black;"><b>Status                            : <?php if($sbc[0]->status == 'approved'){?>
                                                                                                    <span class="badge badge-success"><?= $sbc[0]->status;?></span>
                                                                                                <?php }elseif($sbc[0]->status == 'rejected'){?>
                                                                                                    <span class="badge badge-danger"><?= $sbc[0]->status;?></span>
                                                                                                <?php }elseif($sbc[0]->status == 'checked'){?>
                                                                                                    <span class="badge badge-info"><?= $sbc[0]->status;?></span>
                                                                                                <?php }elseif($sbc[0]->status == 'draft'){?>
                                                                                                    <span class="badge badge-warning"><?= $sbc[0]->status;?></span>
                                                                                                <?php }?></b><br>
                                </p>
                                <p style="color: black;">Activity User : 
                                    <?php 
                                
                                        $this->load->model('M_subcont');
                                        $log_activity = $this->M_subcont->getLogIKS($sbc[0]->id_subcont);
                                        // var_dump($log_activity);die;

                                        foreach($log_activity as $row){ 
                                        // $log_activity = $this->M_subcont->getLogIKS($row->iks_id);
                                        
                                    ?>
                                        <?php if($sbc[0]->status == 'checked'){
                                            echo $row->log_desc .''.$row->log_user;
                                            // echo $data->status .'  by  '. $row->log_user;
                                        }elseif($sbc[0]->status == 'approved'){
                                            echo $row->log_desc .''.$row->log_user;
                                            // echo $data->status .'  by  '. $row->log_user;
                                        }else{
                                            echo $sbc[0]->status;
                                        }?> 
                                    <?php } ?>
                                </p>
                                <?php if($sbc[0]->kategori_pekerjaan != 'umum'){?>
                                    <span style="color: red;"><u>Catatan : Perlu Diadakan Safety Induction dengan EHS</u></span>
                                <?php } ?>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h5 style="color: black;"><b>Job Safety Analysis (JSA)</b></h5>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr align="center">
                                                    <th style="color: black;">Aktivitas Pekerjaan</th>
                                                    <th style="color: black;">Aspek LK3</th>
                                                    <th style="color: black;">Dampak LK3</th>
                                                    <th style="color: black;">Standar Pengamanan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr align="center">
                                                    <td style="color: black;"><?php echo $sbc[0]->aktivitas_pekerjaan?></td>
                                                    <td style="color: black;"><?php echo $sbc[0]->aspek ?></td>
                                                    <td style="color: black;"><?php echo $sbc[0]->dampak?></td>
                                                    <td style="color: black;"><?php echo $sbc[0]->standar_pengamanan?></td>
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
