<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Data Izin Kerja Subcont</h1> -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Izin Kerja Subcont - PT CBI</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th scope="col" rowspan="2" style="color: black;">No</th>
                            <th scope="col" rowspan="2" style="color: black;">Nomor Registrasi</th>
                            <th scope="col" rowspan="2" style="color: black;">Nama Perusahaan</th>
                            <th scope="col" rowspan="2" style="color: black;">Alamat Perusahaan</th>
                            <th scope="col" rowspan="2" style="color: black;">Tanggal Mulai Bekerja</th>
                            <th scope="col" rowspan="2" style="color: black;">Tanggal Selesai Bekerja</th>
                            <th scope="col" rowspan="2" style="color: black;">Lokasi Pekerjaan</th>
                            <th scope="col" rowspan="2" style="color: black;">Direktur Koordinat</th>
                            <th scope="col" rowspan="2" style="color: black;">PIC Subcont</th>
                            <th scope="col" rowspan="2" style="color: black;">Nomor HP PIC Subcont</th>
                            <th scope="col" rowspan="2" style="color: black;">Jumlah Pekerja Subcont</th>
                            <th scope="col" rowspan="2" style="color: black;">Nama(MP Subcont)</th>
                            <th scope="col" rowspan="2" style="color: black;">PIC PT.CBI</th>
                            <th scope="col" rowspan="2" style="color: black;">Seksie PIC PT.CBI</th>
                            <th scope="col" rowspan="2" style="color: black;">Nomor HP PIC PT CBI</th>
                            <th scope="col" rowspan="2" style="color: black;">Peralatan</th>
                            <th scope="col" rowspan="2" style="color: black;">APD Wajib</th>
                            <th scope="col" rowspan="2" style="color: black;">APD Tambahan</th>
                            <th scope="col" rowspan="2" style="color: black;">Jenis Pekerjaan</th>
                            <th scope="col" rowspan="2" style="color: black;">Kategori Pekerjaan</th>
                            <th scope="col" rowspan="2" style="color: black;">Syarat Wajib</th>
                            <th scope="col" colspan="4" style="color: black;">JSA</th>
                            <th scope="col" rowspan="2" style="color: black;">Gambar</th>
                            <th scope="col" rowspan="2" style="color: black;">Status</th>
                            <th scope="col" rowspan="2" style="color: black;">Activity User</th>
                            <th scope="col" rowspan="2" style="color: black;">Validasi Kondisi</th>
                            <th scope="col" rowspan="2" style="color: black;">Action</th>
                            <th scope="col" rowspan="2" style="color: black;">Konfirmasi PIC</th>
                        </tr>
                        <tr align="center">
                            <th scope="col" style="color: black;">Aktivitas Pekerjaan</th>
                            <th scope="col" style="color: black;">Aspek</th>
                            <th scope="col" style="color: black;">Dampak</th>
                            <th scope="col" style="color: black;">Standar Pengamanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $loop= 1;
                            // var_dump($list_subcont[31]->gambar);die;
                            foreach($list_subcont as $data){?>
                            <tr align="center">
                                <td style="color: black;"><?= $loop++ ?></td>
                                <td style="color: black;"><?= $data->no_regis;?></td>
                                <td style="color: black;"><?= $data->nama_perusahaan;?></td>
                                <td style="color: black;"><?= $data->alamat_perusahaan;?></td>
                                <td style="color: black;"><?= date('d-m-Y', strtotime($data->wkt_mulai)) ?></td>
                                <td style="color: black;"><?= date('d-m-Y', strtotime($data->wkt_selesai)) ?></td>
                                <td style="color: black;"><?= $data->lokasi_pekerjaan;?></td>
                                <td style="color: black;"><?= $data->direktur_koordinat;?></td>
                                <td style="color: black;"><?= $data->pic_subcont;?></td>
                                <td style="color: black;"><?= $data->nohp_subcont;?></td>
                                <td style="color: black;"><?= $data->jml_picsubcont;?></td>
                                <td style="color: black;"><?= $data->namamp_subcont;?></td>
                                <td style="color: black;"><?= $data->pic_cbi;?></td>
                                <td style="color: black;"><?= $data->sie_pic_cbi;?></td>
                                <td style="color: black;"><?= $data->nohp_cbi;?></td>
                                <td style="color: black;"><?= $data->peralatan?></td>
                                <td style="color: black;"><?= $data->apd_dipakai?></td>
                                <td style="color: black;"><?= $data->apd_tambahan?></td>
                                <td style="color: black;"><?= $data->jenis_pekerjaan?></td>
                                <td style="color: black;"><?= $data->kategori_pekerjaan?></td>
                                <td style="color: black;"><?= $data->syarat_wajib?></td>
                                <td style="color: black;"><?= $data->aktivitas_pekerjaan?></td>
                                <td style="color: black;"><?= $data->aspek?></td>
                                <td style="color: black;"><?= $data->dampak?></td>
                                <td style="color: black;"><?= $data->standar_pengamanan?></td>
                                <td style="color: black;">
                                    <?php 
                                        // $this->load->model('M_subcont');
                                        $list_gambar = $this->M_subcont->getGambar($data->id_subcont);
                                        // var_dump($list_gambar); 
                                        foreach($list_gambar as $row){ 
                                    ?>
                                        <img src='<?php echo base_url('uploads/'.$row->judul)?>' style="width: 150px; height: 150px;">
                                    <?php } ?>
                                </td>
                                <!-- <td style="color: black;" align="center"> <img src='<?php echo base_url('uploads/'.$data->gambar)?>' style="width: 150px; height: 150px;"></td> -->
                                <td style="color: black;">
                                    <?php if($data->status == 'rejected'){?>
                                        <span class="badge badge-danger">Rejected</span>
                                    <?php }elseif($data->status == 'approved'){?>
                                        <span class="badge badge-success">Approved</span>
                                    <?php }elseif($data->status == 'checked'){?>
                                        <span class="badge badge-info">Checked</span>
                                    <?php }elseif($data->status == 'draft'){?>
                                        <span class="badge badge-warning">Draft</span>
                                    <?php }?>
                                    <?php if($data->kategori_pekerjaan != 'umum'){?>
                                        <br>
                                        <span style="color: green;">Perlu Safety Induction dengan EHS</span>
                                    <?php } ?>
                                </td>
                                <td style="color: black;">
                                    <?php 
                                
                                        $this->load->model('M_subcont');
                                        $log_activity = $this->M_subcont->getLogIKS($data->id_subcont);
                                        // var_dump($log_activity);die;

                                        foreach($log_activity as $row){ 
                                        // $log_activity = $this->M_subcont->getLogIKS($row->iks_id);
                                       
                                    ?>
                                        <?php if($data->status == 'checked'){
                                            echo $row->log_desc .''.$row->log_user;
                                            // echo $data->status .'  by  '. $row->log_user;
                                        }elseif($data->status == 'approved'){
                                            echo $row->log_desc .''.$row->log_user;
                                            // echo $data->status .'  by  '. $row->log_user;
                                        }else{
                                            echo $data->status;
                                        }?>
                                        
                                        
                                    <?php } ?>
                                </td>
                                <td style="color: black;"><?= $data->validasi?></td>
                                <td style="color: black;"><?php if($data->validasi == ''){?>
                                    <a href="<?php echo base_url('Dashboard/prosesvalidasiData/'.$data->id_subcont);?>" class="btn btn-warning" title="Tombol ini digunakan untuk validasi data">
                                        <span></span>Validasi
                                    </a>
                                    <?php }else{?>
                                        <span style="color: red;">Sudah Validasi Data</span>
                                </td>
                                <?php }?>
                                <!-- <td style="color: black;"><a href="<?php echo base_url('Dashboard/proseskonfirmGambar/'.$data->id_subcont);?>" class="btn btn-secondary">Konfirm  Gambar</lass=></a></td> -->
                                <td style="color: black;"><?php if($data->status == 'draft'){?>
                                    <a href="<?php echo base_url('Dashboard/proseskonfirmGambar/'.$data->id_subcont);?>" class="btn btn-info" title="Tombol ini digunakan untuk confirm gambar">
                                        <span></span>Konfirm  Gambar
                                    </a>
                                    <?php }else{?>
                                    <span style="color: red;">Sudah Upload Gambar</span>
                                </td>
                                    <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->