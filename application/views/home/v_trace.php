<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- FORM PENCARIAN DATA -->
    <div class="row justify-content-center" style="margin-top: 50px">    
        <div class="col-xs-7 col-xs-offset-7">
            <form action="<?= base_url('Home/traceIK');?>" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="keyword" placeholder="Masukan No Registrasi ...">
                    <span class="input-group-btn col-2">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <!-- TABEL DATA -->
    <div class="row justify-content-center pt-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-dark">Data Izin Kerja Subcont - PT CBI</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <?php if(!empty($keyword)){ ?>
                        <p style="color:blue"><b>Menampilkan data izin kerja dengan nomor registrasi : "<?= $keyword; ?>"</b></p>
                    <?php } ?>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th scope="col" style="color: black;">Nomor Registrasi</th>
                                <th scope="col" style="color: black;">Nama Perusahaan</th>
                                <th scope="col" style="color: black;">Alamat Perusahaan</th>
                                <th scope="col" style="color: black;">Tanggal Mulai Bekerja</th>
                                <th scope="col" style="color: black;">Tanggal Selesai Bekerja</th>
                                <th scope="col" style="color: black;">Lokasi Pekerjaan</th>
                                <th scope="col" style="color: black;">PIC Subcont</th>
                                <th scope="col" style="color: black;">PIC PT CBI</th>
                                <th scope="col" style="color: black;">Status Data</th>
                                <th scope="col" style="color: black;">Kondisi Data</th>
                                <th scope="col" style="color: black;">Konfirmasi PIC EHS</th>
                                <th scope="col" style="color: black;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($keyword))foreach($data as $row){?>
                                <tr align="center">
                                    <td style="color: black;"><?= $row['no_regis'];?></td>
                                    <td style="color: black;"><?= $row['nama_perusahaan'];?></td>
                                    <td style="color: black;"><?= $row['alamat_perusahaan'];?></td>
                                    <td style="color: black;"><?= date('d-m-Y', strtotime($row['wkt_mulai'])) ?></td>
                                    <td style="color: black;"><?= date('d-m-Y', strtotime($row['wkt_selesai'])) ?></td>
                                    <td style="color: black;"><?= $row['lokasi_pekerjaan'];?></td>
                                    <td style="color: black;"><?= $row['pic_subcont'];?></td>
                                    <td style="color: black;"><?= $row['pic_cbi'];?></td>
                                    <td style="color: black;">
                                        <?php if($row['kategori_pekerjaan'] != 'umum'){
                                            echo '<span style="color: red;">Perlu Melakukan Safety Induction dengan PIC EHS</span>';
                                        }else{
                                            echo '<span style="color: blue;">Tidak Perlu Safety Induction</span>';
                                        }?>
                                    </td>
                                    <td>
                                        <?php if($row['status'] == 'rejected'){?>
                                            <span class="badge badge-danger">Rejected</span>
                                        <?php }elseif($row['status'] == 'approved'){?>
                                            <span class="badge badge-success">Approved</span>
                                        <?php }elseif($row['status'] == 'checked'){?>
                                            <span class="badge badge-info">Checked</span>
                                        <?php }elseif($row['status'] == 'draft'){?>
                                            <span class="badge badge-warning">Draft</span>
                                        <?php }?>
                                    </td>
                                    <td>
                                        <?php if($row['require_ehs'] == '' && $row->kategori_pekerjaan != 'umum'){?>
                                            <span style="color: red;">Belum Melakukan Safety Induction</span>
                                        <?php }elseif($row['require_ehs'] == 'briefing'){?>
                                            <span style="color: blue;">Sudah Melakukan Safety Induction</span>
                                        <?php }?>
                                    </td>
                                    <td style="color: black;">
                                        <a href="<?php echo base_url('Home/detailTrace/'.$row['id_subcont']);?>" class="btn btn-success" title="Tombol ini digunakan untuk melihat detail data">
                                            <i class="far fa-eye"></i>
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
</div>
<!-- /.container-fluid -->