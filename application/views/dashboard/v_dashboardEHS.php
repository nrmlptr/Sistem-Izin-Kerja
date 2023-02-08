<?php
// $list_gambar = $this->M_subcont->getGambar(2);
// $list_gambar = 'asd';
// var_dump($list_gambar);die();
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<!-- <h1 class="h3 mb-2 text-gray-800">Data Izin Kerja Subcont</h1> -->

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
              <th scope="col" rowspan="2" style="color: black;">Konfirmasi TIM EHS</th>
              <th scope="col" rowspan="2" style="color: black;">Action</th>
            </tr>
            <tr align="center">
              <th scope="col" style="color: black;">Aktivitas Pekerjaan</th>
              <th scope="col" style="color: black;">Aspek</th>
              <th scope="col" style="color: black;">Dampak</th>
              <th scope="col" style="color: black;">Standar Pengamanan</th>
            </tr>
        </thead>
        <tbody align="center">
          <?php 
            $loop= 1;
            // var_dump($list_subcont[31]->gambar);die;
            foreach($list_subcont as $data){
                $arrKategoriPekerjaan = explode(", ", $data->kategori_pekerjaan);
                // var_dump(count($arrKategoriPekerjaan)); die();
                if (count($arrKategoriPekerjaan) == 1 && $arrKategoriPekerjaan[0] == 'umum' || $data->require_ehs == 'briefing') {
                  $show_btn_briefing = false;
                } elseif ($data->require_ehs == 'nobriefing' || $data->require_ehs == null) {
                  $show_btn_briefing = true;
                }
              ?>
            <tr>
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
              <td style="color: black;">
                <?= $data->status?>
                <?php if($data->kategori_pekerjaan != 'umum'){?>
                  <br>
                  <span style="color: green;">Perlu Safety Induction dengan EHS</span>
                <?php } ?>
              </td>
              <td style="color: black;"><?php if($data->status == 'checked'){?>
                    <a href="<?php echo base_url('Dashboard/prosesSetujui/'.$data->id_subcont);?>" class="btn btn-warning">
                        <span></span>Confirm
                    </a>
                  <?php }elseif($data->status =='approved'){ ?>
                    <span style="color: red;">Sudah Disetujui</span>
                      <?php if($show_btn_briefing) { ?>
                        <a href="<?php echo base_url('Dashboard/prosesBriefing/'.$data->id_subcont);?>" class="btn btn-info mt-3">
                          <span></span>Confirm Safety Induction
                        </a>
                      <?php }else{ ?>
                        <span style="color: blue;">Sudah Melakukan Safety Induction</span>
                      <?php } ?>
                  <?php }?>
              </td>
                
                
              <td style="color: black;" align="center">
                <a href="<?php echo base_url('Dashboard/cekDetail/'.$data->id_subcont);?>" class="btn btn-info"><i class="far fa-eye"></i></a>
                <!-- <a href="<?php echo base_url('Dashboard/perbaruiData/'.$data->id_subcont);?>" class="btn btn-warning"><i class="far fa-edit"></i></a> -->
                <!-- <a href="<?php echo base_url('Dashboard/hapusDataById/'.$data->id_subcont);?>" class="btn btn-danger btn-hapus"><i class="fas fa-trash"></i></a> -->
                <a href="<?php echo base_url('Dashboard/hapusDataById/'.$data->id_subcont);?>" class="btn btn-danger mt-3" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data?')"><i class="fas fa-trash"></i></a>
              </td>
              <!-- <td style="color: black;"><a href="<?php echo base_url('home/prosesSetujui/'.$data->id_subcont);?>" class="btn btn-primary">Setujui</lass=></a></td> -->
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