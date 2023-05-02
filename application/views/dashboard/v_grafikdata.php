<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- Content Row -->
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-7">

            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Data Izin Kerja / Bulan</h6>
                </div>
                <div class="card-body">
                    <div>
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-50">
            <!-- Basic Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-8">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Total Izin Kerja Based on Kategori Pekerjaan || 
                        <a href="<?php echo base_url('Dashboard/detailTabel/');?>" class="btn btn-success" title="Tombol ini digunakan untuk melihat detail data">Detail <i class="far fa-eye"></i></a>
                    </h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Bulan</th>
                                    <th>Total Izin Kerja Approved</th>
                                    <th>Total Izin Kerja Rejected</th>
                                    <th>Grand Total Izin Kerja</th>
                                    <!-- <th>Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $loop = 1;    
                                    foreach ($tabel as $row) {  ?>
                                        <tr>
                                            <td><?= $loop++?></td>
                                            <!-- <td><a href="<?= base_url('Dashboard/detailGrafik')?>"><?= $row['bulan']?></a></td> -->
                                            <td><a href="<?= base_url('Dashboard/detailGrafik/'.$row['bulan'])?>"><?= $row['bulan']?></a></td>
                                            <td><?= $row['jumlah_approved']?></td>
                                            <td><?= $row['jumlah_rejected']?></td>
                                            <td><?= $row['jumlah_total']?></td>
                                            <!-- <td><a href="<?php echo base_url('Dashboard/detailTabel/');?>" class="btn btn-info" title="Tombol ini digunakan untuk melihat detail data"><i class="far fa-eye"></i></a></td> -->
                                        </tr>    
                                <?php } ?>
                            </tbody>
                           
                        </table>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

