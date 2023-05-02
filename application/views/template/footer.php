           <!-- Footer -->
           <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; EHS Dept Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: black;">Anda yakin ingin keluar dari sistem?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="color: black;">Silahkan klik logout untuk mengakhiri sesi.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="<?php echo base_url('Login/logout');?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/sbadmin/')?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/sbadmin/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/sbadmin/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/sbadmin/')?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <!-- <script src="<?php echo base_url('assets/sbadmin/')?>vendor/chart.js/Chart.min.js"></script> -->
    <script src="<?php echo base_url('assets/sbadmin/')?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/sbadmin/')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page level custom scripts -->
    <!-- <script src="<?php echo base_url('assets/sbadmin/')?>js/demo/chart-area-demo.js"></script> -->
    <!-- <script src="<?php echo base_url('assets/sbadmin/')?>js/demo/chart-pie-demo.js"></script> -->
    <script src="<?php echo base_url('assets/sbadmin/')?>js/demo/datatables-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- <script>
        <?php 
            $grafik_grouped = array_reduce($grafik, function($acc, $data) {
                $date = $data['tanggal_pengajuan'];
                $category = $data['kategori_pekerjaan'];
                $jumlah = $data['jumlah'];
                if (!isset($acc[$category])) {
                    $acc[$category] = array();
                }
                if (!isset($acc[$category][$date])) {
                    $acc[$category][$date] = 0;
                }
                $acc[$category][$date] += $jumlah;
                return $acc;
            }, array());        
        ?>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    <?php foreach ($tanggal as $row) { ?>
                        '<?php echo date('d', strtotime($row['tanggal_pengajuan'])); ?>',
                    <?php } ?>
                ],
                datasets: [
                    <?php foreach (array_unique(array_column($grafik, 'kategori_pekerjaan')) as $kategori){ ?> // aneh banget ini errornya, kalau dikasi koma ilang errornya tapi grafik ga muncul. klo gadikasih koma, error tapi grafiknya muncul
                        {
                            label: '<?php echo $kategori; ?>',
                            data: [
                                <?php foreach ($tanggal as $row) { ?>
                                    <?php
                                        $date = $row['tanggal_pengajuan'];
                                        $count = isset($grafik_grouped[$kategori][$date]) ? $grafik_grouped[$kategori][$date] : 0;
                                        echo $count . ',';
                                    ?>
                                <?php } ?>
                            ],
                            borderWidth: 1
                        },
                    <?php } ?>
                ],

            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script> -->

    <!-- <script>
        <?php 
           $labels = array(); // array untuk menyimpan label tanggal pengajuan
           $jumlahs = array(); // array untuk menyimpan jumlah pekerjaan
           
           
           foreach ($grafik as $row) {
                // tambahkan label tanggal pengajuan ke dalam array labels
                $tanggal_pengajuan = date('d', strtotime($row['tanggal_pengajuan']));
                if (!in_array($tanggal_pengajuan, $labels)) {
                    array_push($labels, $tanggal_pengajuan);
                }
                
                // tambahkan jumlah pekerjaan ke dalam array jumlahs
                if (isset($jumlahs[$row['kategori_pekerjaan']][$tanggal_pengajuan])) {
                    $jumlahs[$row['kategori_pekerjaan']][$tanggal_pengajuan] += $row['jumlah'];
                } else {
                    $jumlahs[$row['kategori_pekerjaan']][$tanggal_pengajuan] = $row['jumlah'];
                }
            }
            
            // urutkan label tanggal pengajuan secara kronologis
            sort($labels);         

        ?>

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [
                    <?php 
                        $colors = array('rgba(255, 99, 132)', 'rgba(54, 162, 235)', 'rgba(255, 184, 10)', 'rgba(75, 192, 192, 0.2)', 'rgba(136, 77, 255)', 'rgba(255, 159, 64)');
                        $index = 0;
                        foreach ($jumlahs as $kategori_pekerjaan => $jumlah) { 
                    ?>
                        {
                            label: '<?php echo $kategori_pekerjaan; ?>',
                            data: [
                                <?php foreach ($labels as $tanggal_pengajuan) { ?>
                                    <?php echo isset($jumlah[$tanggal_pengajuan]) ? $jumlah[$tanggal_pengajuan] : 0; ?>,
                                <?php } ?>
                            ],
                            backgroundColor: '<?php echo $colors[$index % count($colors)]; ?>',
                            borderColor: '<?php echo $colors[$index % count($colors)]; ?>',
                            borderWidth: 1
                        },
                    <?php 
                            $index++;
                        } 
                    ?>
                ]
            },
            options: {
                scales: {
                    xAxes: [{
                        type: 'time',
                        time: {
                            unit: 'day',
                            displayFormats: {
                                'day': 'DD-MM-YYYY'
                            }
                        },
                        ticks: {
                            source: 'labels'
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }

        });
    </script> -->


    <!-- <script>
        var data = <?php echo json_encode($grafik); ?>; // mengambil data dari controller
        var labels = [];
        var jumlahs = [];

        // mengelompokkan data berdasarkan kategori pekerjaan
        var groupByKategori = {};
        for (var i = 0; i < data.length; i++) {
            if (!groupByKategori[data[i].kategori_pekerjaan]) {
                groupByKategori[data[i].kategori_pekerjaan] = [];
            }
            groupByKategori[data[i].kategori_pekerjaan].push(data[i]);
        }

        // mengambil tanggal pengajuan terakhir untuk setiap kategori pekerjaan
        for (var kategori in groupByKategori) {
            var dataKategori = groupByKategori[kategori];
            dataKategori.sort(function(a, b) {
                return a.tanggal_pengajuan > b.tanggal_pengajuan ? 1 : -1;
            });
            labels.push(kategori);
            jumlahs.push(dataKategori[dataKategori.length - 1].jumlah);
        }

        // menampilkan grafik batang
        var ctx = document.getElementById('myChart').getContext('2d');
        var grafik = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Jumlah',
                    data: jumlahs,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script> -->

    <script>
        <?php 
            $labels = array(); // array untuk menyimpan label tanggal pengajuan
            $jumlahs = array(); // array untuk menyimpan jumlah pekerjaan

            foreach ($grafik as $row) {
                // tambahkan label tanggal pengajuan ke dalam array labels
                $tanggal_pengajuan = date('d', strtotime($row['tanggal_pengajuan']));
                if (!in_array($tanggal_pengajuan, $labels)) {
                    array_push($labels, $tanggal_pengajuan);
                }
                
                // tambahkan jumlah pekerjaan ke dalam array jumlahs
                if (isset($jumlahs[$row['kategori_pekerjaan']][$tanggal_pengajuan])) {
                    $jumlahs[$row['kategori_pekerjaan']][$tanggal_pengajuan] += $row['jumlah'];
                } else {
                    $jumlahs[$row['kategori_pekerjaan']][$tanggal_pengajuan] = $row['jumlah'];
                }
            }

            // tambahkan tanggal dari 1 hingga 31 ke dalam array labels
            $days_in_month = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
            for ($i = 1; $i <= $days_in_month; $i++) {
                if (!in_array(str_pad($i, 2, '0', STR_PAD_LEFT), $labels)) {
                    array_push($labels, str_pad($i, 2, '0', STR_PAD_LEFT));
                }
            }

            // urutkan label tanggal pengajuan secara kronologis
            sort($labels);         

        ?>

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [
                    <?php 
                        $colors = array('rgba(255, 99, 132)', 'rgba(54, 162, 235)', 'rgba(255, 184, 10)', 'rgba(75, 192, 192, 0.2)', 'rgba(136, 77, 255)', 'rgba(255, 159, 64)');
                        $index = 0;
                        foreach ($jumlahs as $kategori_pekerjaan => $jumlah) { 
                    ?>
                        {
                            label: '<?php echo $kategori_pekerjaan; ?>',
                            data: [
                                <?php foreach ($labels as $tanggal_pengajuan) { ?>
                                    <?php echo isset($jumlah[$tanggal_pengajuan]) ? $jumlah[$tanggal_pengajuan] : 'null'; ?>,
                                <?php } ?>
                            ],
                            backgroundColor: '<?php echo $colors[$index % count($colors)]; ?>',
                            borderColor: '<?php echo $colors[$index % count($colors)]; ?>',
                            borderWidth: 1
                        },
                    <?php 
                            $index++;
                        } 
                    ?>
                ]
            },options: {
                scales: {
                    xAxes: [{
                        type: 'time',
                        time: {
                            unit: 'day',
                            displayFormats: {
                                'day': 'DD-MM-YYYY'
                            }
                        },
                        ticks: {
                            source: 'labels'
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            callback: function(value, index, values) {
                                return parseInt(value).toString();
                            }
                        }
                    }]
                }
            }

        });
    </script>
</body>

</html>