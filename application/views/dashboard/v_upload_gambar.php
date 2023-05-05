<div class="row justify-content-center">
    <div class="card card-primary col-xl-8">
        <div class="card-header">
            <h3 style="color: black;">Konfirmasi Gambar Izin Kerja</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?php echo base_url('Dashboard/proses_uploadgambar');?>" method="POST" enctype="multipart/form-data">
        <div class="card-body">
            <?php 
                // var_dump($sbc[0]->id_subcont);die;
            ?>
            <div class="form-group">
                <label for="inputGambar" style="color: black;">Upload Konfirmasi Gambar</label>
                <div class="input-group col-sm-8">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input col-sm-15" id="inputGambar" name="gambar[]" multiple>
                        <input type="hidden" name="subcont_id" value="<?php echo $sbc[0]->id_subcont?>">
                        <label class="custom-file-label" for="inputGambar">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            <button type="submit" id="btn" class="form-control btn btn-secondary d-none">Simpan</button>
            <button type="button" id="btnAlert" class="form-control btn btn-secondary">Simpan</button>
            <button class="form-control btn btn-danger mt-4"><a href="<?php echo base_url('Dashboard/konfirm_gambar');?>" style="color: white;">Cancel</a></button>
        </div>


        <!-- <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button> || <button type="submit" class="btn btn-danger"><a href="<?php echo base_url('Dashboard/konfirm_gambar');?>" style="color: white;">Cancel</a></button>
        </div> -->
        </form>
    </div>
</div>

<script src="<?php echo base_url('assets/sbadmin');?>/js/sweetalert2.all.min.js"></script>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/sbadmin/');?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets/sbadmin/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/sbadmin/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});


//sweet alert untuk save data
$('#btnAlert').on('click',function(){
    Swal.fire({
        title: 'Konfirmasi Gambar',
        text: "Apakah Yakin Akan Konfirmasi Data dengan Gambar ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Lanjutkan'
    }).then((result) => {
        if (result.isConfirmed) {
            $('#btn').click();
            Swal.fire('Data Berhasil Dikonfirmasi !', '', 'success')
        }
    })
});
</script>
