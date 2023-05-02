<div class="row justify-content-center">
    <div class="col-lg-9">
        <!-- Dropdown Card Example -->
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">
                    Detail Data Total Izin Kerja || 
                    <a href="<?= base_url('dashboard/grafikData');?>" class="btn btn-success">Back <i class="fa fa-home"></i></a>
                </h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Choose Action :</div>
                        <a class="dropdown-item" href="<?= base_url('Dashboard/printdataDetail')?>">Download PDF</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Bulan</th>
                                <th>Umum</th>
                                <th>Melibatkan Panas</th>
                                <th>Melibatkan Ruang Terbatas</th>
                                <th>Melibatkan Listrik Tegangan Menengah Tinggi</th>
                                <th>Melibatkan Ketinggian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $loop = 1;    
                                foreach ($detailtabel as $row) {  ?>
                                <tr>
                                    <td><?= $loop++ ?></td>
                                    <td><?= $row['bulan'] ?></td>
                                    <td><?= $row['umum'] ?? 0 ?></td>
                                    <td><?= $row['libatkan_panas'] ?? 0 ?></td>
                                    <td><?= $row['libatkan_ruang_terbatas'] ?? 0 ?></td>
                                    <td><?= $row['libatkan_listrik_tegangan_tinggi'] ?? 0?></td>
                                    <td><?= $row['libatkan_ketinggian'] ?? 0?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>