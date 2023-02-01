<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data JSA</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Job Safety Analysis</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr align="center">
                            <th scope="col">No</th>
                            <th scope="col">Nomor Registrasi</th>
                            <!-- <th scope="col">Tanggal Pengisian Form</th> -->
                            <th scope="col">Nama Perusahaan</th>
                            <th scope="col">Alamat Perusahaan</th>
                            <th scope="col">Tanggal Mulai Bekerja</th>
                            <th scope="col">Tanggal Selesai Bekerja</th>
                            <th scope="col">Direktur Koordinat</th>
                            <th scope="col">PIC PT.CBI</th>
                            <th scope="col">Jenis Pekerjaan</th>
                            <th scope="col">Aktivitas Pekerjaan</th>
                            <th scope="col">Aspek LK3</th>
                            <th scope="col">Dampak LK3</th>
                            <th scope="col">Standar Pengamanan</th>
                            <!-- <th scope="col">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $loop= 1;
                            // var_dump($list_subcont[31]->gambar);die;
                            foreach($list_jsa as $data){?>
                            <tr align="center">
                                <td><?= $loop++ ?></td>
                                <td><?= $data['no_regis'];?></td>
                                <!-- <td><?= date('d-m-Y', strtotime($data['tanggal_pengajuan'])) ?></td> -->
                                <td><?= $data['nama_perusahaan'];?></td>
                                <td><?= $data['alamat_perusahaan'];?></td>
                                <td><?= date('d-m-Y', strtotime($data['wkt_mulai'])) ?></td>
                                <td><?= date('d-m-Y', strtotime($data['wkt_selesai'])) ?></td>
                                <td><?= $data['direktur_koordinat'];?></td>
                                <td><?= $data['pic_cbi'];?></td>
                                <td><?= $data['jenis_pekerjaan']?></td>
                                <td><?= $data['aktivitas_pekerjaan']?></td>
                                <td><?= $data['aspek']?></td>
                                <td><?= $data['dampak']?></td>
                                <td><?= $data['standar_pengamanan'];?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->