<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Izin Kerja Subcont</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Izin Kerja Subcont</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th scope="col">No</th>
                            <th scope="col">Nomor Registrasi</th>
                            <!-- <th scope="col">Tanggal Pengajuan</th> -->
                            <th scope="col">Nama Perusahaan</th>
                            <th scope="col">Alamat Perusahaan</th>
                            <th scope="col">Tanggal Mulai Bekerja</th>
                            <th scope="col">Tanggal Selesai Bekerja</th>
                            <th scope="col">Lokasi Pekerjaan</th>
                            <th scope="col">Direktur Koordinat</th>
                            <th scope="col">PIC Subcont</th>
                            <th scope="col">Nomor HP PIC Subcont</th>
                            <th scope="col">Jumlah Pekerja PIC Subcont</th>
                            <th scope="col">Nama(MP Subcont)</th>
                            <th scope="col">PIC PT.CBI</th>
                            <th scope="col">Seksie PIC PT.CBI</th>
                            <th scope="col">Nomor HP PIC PT CBI</th>
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
                            <th scope="col">Gambar</th>
                            <th scope="col">Status</th>
                            <th scope="col">Validasi Kondisi</th>
                            <th scope="col">Action</th>
                            <th scope="col">Konfirmasi PIC</th>
                            <!-- <th scope="col">Konfirmasi TIM EHS</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $loop= 1;
                            // var_dump($list_subcont[31]->gambar);die;
                            foreach($list_subcont as $data){?>
                            <tr align="center">
                                <td><?= $loop++ ?></td>
                                <td><?= $data->no_regis;?></td>
                                <!-- <td><?= date('d-m-Y', strtotime($data->tanggal_pengajuan)) ?></td> -->
                                <td><?= $data->nama_perusahaan;?></td>
                                <td><?= $data->alamat_perusahaan;?></td>
                                <td><?= date('d-m-Y', strtotime($data->wkt_mulai)) ?></td>
                                <td><?= date('d-m-Y', strtotime($data->wkt_selesai)) ?></td>
                                <td><?= $data->lokasi_pekerjaan;?></td>
                                <td><?= $data->direktur_koordinat;?></td>
                                <td><?= $data->pic_subcont;?></td>
                                <td><?= $data->nohp_subcont;?></td>
                                <td><?= $data->jml_picsubcont;?></td>
                                <td><?= $data->namamp_subcont;?></td>
                                <td><?= $data->pic_cbi;?></td>
                                <td><?= $data->sie_pic_cbi;?></td>
                                <td><?= $data->nohp_cbi;?></td>
                                <td><?= $data->peralatan?></td>
                                <td><?= $data->apd_dipakai?></td>
                                <td><?= $data->apd_tambahan?></td>
                                <td><?= $data->jenis_pekerjaan?></td>
                                <td><?= $data->kategori_pekerjaan?></td>
                                <td><?= $data->syarat_wajib?></td>
                                <td><?= $data->aktivitas_pekerjaan?></td>
                                <td><?= $data->aspek?></td>
                                <td><?= $data->dampak?></td>
                                <td><?= $data->standar_pengamanan?></td>
                                <td align="center"> <img src='<?php echo base_url('uploads/'.$data->gambar)?>' style="width: 150px; height: 150px;"></td>
                                <td><?= $data->status?></td>
                                <td><?= $data->validasi?></td>
                                <td><?php if($data->status == 'draft'){?>
                                    <a href="<?php echo base_url('Dashboard/prosesvalidasiData/'.$data->id_subcont);?>" class="btn btn-warning">
                                        <span></span>Validasi
                                    </a>
                                    <?php }else{?>
                                        <span style="color: red;">Sudah Validasi Data</span>
                                </td>
                                <?php }?>
                                <!-- <td><a href="<?php echo base_url('Dashboard/proseskonfirmGambar/'.$data->id_subcont);?>" class="btn btn-secondary">Konfirm  Gambar</lass=></a></td> -->
                                <td><?php if($data->status == 'draft'){?>
                                    <a href="<?php echo base_url('Dashboard/proseskonfirmGambar/'.$data->id_subcont);?>" class="btn btn-info">
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