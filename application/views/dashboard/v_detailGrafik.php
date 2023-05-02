<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- Content Row -->
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-7">

            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $judul.'  Periode  '.$bulan?>
                        || <a href="<?= base_url('Dashboard/grafikData')?>" class="btn btn-success" title="Tombol kembali ke Dahsboard">Back <i class="fa fa-home"></i></a>
                    </h6>
                </div>
                <div class="card-body">
                    <div>
                        <canvas id="chartDetail"></canvas>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- /.container-fluid -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   <?php 
        $labels = array(); // array untuk menyimpan label tanggal pengajuan
        $jumlahs = array(); // array untuk menyimpan jumlah pekerjaan

        foreach ($detailGrafik as $row) {
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
        $days_in_month = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($bulan)), date('Y'));
        for ($i = 1; $i <= $days_in_month; $i++) {
            if (!in_array(str_pad($i, 2, '0', STR_PAD_LEFT), $labels)) {
                array_push($labels, str_pad($i, 2, '0', STR_PAD_LEFT));
            }
        }

        // urutkan label tanggal pengajuan secara kronologis
        sort($labels);         

    ?>

    var ctx = document.getElementById('chartDetail').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [
                    <?php 
                        $colors = array('rgba(255, 99, 132)', 'rgba(54, 162, 235)', 'rgba(255, 184, 10)', 'rgba(75, 192, 192, 0.2)', 'rgba(136, 77, 255)', 'rgba(255, 159, 64)');
                        $index = 0;
                        foreach ($jumlahs as $kategori_pekerjaan => $jumlah) { 
                    ?> //aneh ? kalau di kasih koma ga error tapi grafiknya ga muncul, tapi klo di ga dikomain codenya merah tapi grafik muncul
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

