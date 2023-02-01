<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Izin Kerja</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Izin Kerja Subcont PT CBI --
          <a href="<?php echo base_url('excel/index')?>"><button class='btn btn-secondary'>Cetak Data</button></a>
        </h6>
                        
                        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                      <th scope="col">No</th>
                      <th scope="col">Nomor Registrasi</th>
                      <th scope="col">Nama Perusahaan</th>
                      <th scope="col">Alamat Perusahaan</th>
                      <th scope="col">Waktu Mulai</th>
                      <th scope="col">Waktu Selesai</th>
                      <th scope="col">Lokasi Pekerjaan</th>
                      <th scope="col">Direktur Koordinat</th>
                      <th scope="col">PIC Subcont</th>
                      <th scope="col">No HP Subcont</th>
                      <th scope="col">Jumlah Pekerja PIC Subcont</th>
                      <th scope="col">Nama(MP Subcont)</th>
                      <th scope="col">PIC PT.CBI</th>
                      <th scope="col">Seksie PIC PT.CBI</th>
                      <th scope="col">No HP PIC PT.CBI</th>
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
                      <th scope="col">Konfirmasi TIM EHS</th>
                      <th>Action</th>
                    </tr>
                </thead>
                <tbody align="center">
                    <?php 
                      $loop= 1;
                      // var_dump($list_subcont[31]->gambar);die;
                      foreach($list_subcont as $data){?>
                      <tr>
                        <td><?= $loop++ ?></td>
                        <td><?= $data->no_regis;?></td>
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
                        <td><?php if($data->status == 'checked'):?>
                          <a href="<?php echo base_url('Dashboard/prosesSetujui/'.$data->id_subcont);?>" class="btn btn-warning">
                              <span></span>Confirm
                          </a>
                          <?php endif;?>
                        </td>
                        <td align="center">
                          <a href="<?php echo base_url('Dashboard/cekDetail/'.$data->id_subcont);?>" class="btn btn-info"><i class="far fa-eye"></i></a>
                          <!-- <a href="<?php echo base_url('Dashboard/perbaruiData/'.$data->id_subcont);?>" class="btn btn-warning"><i class="far fa-edit"></i></a> -->
                          <!-- <a href="<?php echo base_url('Dashboard/hapusDataById/'.$data->id_subcont);?>" class="btn btn-danger btn-hapus"><i class="fas fa-trash"></i></a> -->
                          <a href="<?php echo base_url('Dashboard/hapusDataById/'.$data->id_subcont);?>" class="btn btn-danger mt-3" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data?')"><i class="fas fa-trash"></i></a>
                        </td>
                        <!-- <td><a href="<?php echo base_url('home/prosesSetujui/'.$data->id_subcont);?>" class="btn btn-primary">Setujui</lass=></a></td> -->
                      </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
<script src="<?php echo base_url('assets/sbadmin');?>/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url('assets/sbadmin/')?>vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">

  //script tombol untuk menghapus data subcont.
  // $('.btn-hapus').on('click',function(e){
  //     e.preventDefault()
  //     Swal.fire({
  //         title: 'Menghapus Data',
  //         text: "Anda Yakin Akan Menghapus Data ?",
  //         icon: 'warning',
  //         showCancelButton: true,
  //         confirmButtonColor: '#3085d6',
  //         cancelButtonColor: '#d33',
  //         confirmButtonText: 'Lanjutkan'
  //     }).then((result) => {
  //         if (result.isConfirmed) {
  //             // $('#btn').click();
  //             // Swal.fire('Data Berhasil di Hapus !', '', 'success')
  //             document.location.href = $(this).attr('href')
  //         }
  //     })
  // });
  
</script>