<div class="row justify-content-center">
    <div class="card card-primary col-xl-8">
        <div class="card-header">
            <h3 class="card-title" style="color:black;">Konfirmasi Safety Induction</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" action="<?php echo base_url('Dashboard/proses_briefing');?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <?php 
                    // var_dump($sbc[0]->id_subcont);die;
                ?>     
                <div class="form-group">
                    <div class="input-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="require_ehs" name="require_ehs">
                            <input type="hidden" name="id_subcont" value="<?php echo $sbc[0]->id_subcont?>">
                            <label class="form-check-label" for="require_ehs">Sudah Melakukan Safety Induction</label>
                        </div>    
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            
            <!-- TOMBOL SIMPAN DAN CANCEL DATA -->
            <div class="card-footer">
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                <button type="submit" id="btn" class="form-control btn btn-secondary d-none">Simpan</button>
                <button type="button" id="btnAlert" class="form-control btn btn-secondary">Simpan</button>
                <button class="form-control btn btn-danger mt-4"><a href="<?php echo base_url('Dashboard/konfirm_form');?>" style="color: white;">Cancel</a></button>
            </div>
            <!-- <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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
//sweet alert untuk save data
$('#btnAlert').on('click',function(){
    Swal.fire({
        title: 'Konfirmasi Kegiatan Briefing',
        text: "Yakin Sudah Melakukan Briefing ?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Lanjutkan'
    }).then((result) => {
        if (result.isConfirmed) {
            $('#btn').click();
            Swal.fire('Data Sudah Dilakukan Briefing !', '', 'success')
        }
    })
});
</script>