<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Data Izin Kerja Subcont</h1> -->
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-dark">Data Izin Kerja Subcont - PT CBI</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th scope="col" style="color: black;">No</th>
                            <th scope="col" style="color: black;">Nomor Registrasi</th>
                            <th scope="col" style="color: black;">Nama Perusahaan</th>
                            <th scope="col" style="color: black;">Alamat Perusahaan</th>
                            <th scope="col" style="color: black;">Tanggal Mulai Bekerja</th>
                            <th scope="col" style="color: black;">Tanggal Selesai Bekerja</th>
                            <th scope="col" style="color: black;">Lokasi Pekerjaan</th>
                            <th scope="col" style="color: black;">PIC Subcont</th>
                            <th scope="col" style="color: black;">Jumlah Pekerja Subcont</th>
                            <th scope="col" style="color: black;">PIC PT CBI</th>
                            <th scope="col" style="color: black;">Status Data</th>
                            <th scope="col" style="color: black;">Kondisi Data</th>
                            <th scope="col" style="color: black;">Konfirmasi PIC EHS</th>
                            <th scope="col" style="color: black;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $loop= 1;
                            // var_dump($list_subcont[31]->gambar);die;
                            foreach($list_all as $data){?>
                            <tr align="center">
                                <td style="color: black;"><?= $loop++ ?></td>
                                <td style="color: black;"><?= $data->no_regis;?></td>
                                <td style="color: black;"><?= $data->nama_perusahaan;?></td>
                                <td style="color: black;"><?= $data->alamat_perusahaan;?></td>
                                <td style="color: black;"><?= date('d-m-Y', strtotime($data->wkt_mulai)) ?></td>
                                <td style="color: black;"><?= date('d-m-Y', strtotime($data->wkt_selesai)) ?></td>
                                <td style="color: black;"><?= $data->lokasi_pekerjaan;?></td>
                                <td style="color: black;"><?= $data->pic_subcont;?></td>
                                <td style="color: black;"><?= $data->jml_picsubcont;?></td>
                                <td style="color: black;"><?= $data->pic_cbi;?></td>
                                <td style="color: black;"><?php if($data->kategori_pekerjaan != 'umum'){
                                    echo '<span style="color: red;">Perlu Melakukan Safety Induction dengan PIC EHS</span>';
                                }else{
                                    echo '<span style="color: blue;">Tidak Perlu Safety Induction</span>';
                                }?></td>
                                <td>
                                    <?php if($data->status == 'rejected'){?>
                                        <span class="badge badge-danger">Rejected</span>
                                    <?php }elseif($data->status == 'approved'){?>
                                        <span class="badge badge-success">Approved</span>
                                    <?php }elseif($data->status == 'checked'){?>
                                        <span class="badge badge-info">Checked</span>
                                    <?php }elseif($data->status == 'draft'){?>
                                        <span class="badge badge-warning">Draft</span>
                                    <?php }?>
                                </td>
                                <td>
                                    <?php if($data->require_ehs == '' && $data->kategori_pekerjaan != 'umum'){?>
                                        <span style="color: red;">Belum Melakukan Safety Induction</span>
                                    <?php }elseif($data->require_ehs == 'briefing'){?>
                                        <span style="color: blue;">Sudah Melakukan Safety Induction</span>
                                    <?php }?>
                                </td>
                                <td style="color: black;">
                                    <a href="<?php echo base_url('Dashboard/cekSecurity/'.$data->id_subcont);?>" class="btn btn-success">
                                        <span></span>View
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->