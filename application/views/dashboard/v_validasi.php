<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FORM VALIDASI IKS - PT CBI</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('assets/sbadmin/');?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/sbadmin/');?>css/sb-admin-2.min.css" rel="stylesheet">
    <script src="<?php echo base_url('assets/sbadmin');?>/js/sweetalert2.all.min.js"></script>
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="row">
            <div class="card my-5" style="width: 600rem;">
                <div class="card-header">
                    <h3 class="card-title" style="color: black;">FORM VALIDASI Izin Kerja System</h3>
                </div>
                <form action="<?php echo base_url('Dashboard/proses_simpan_validasi');?>" method="POST">
                    <input type="hidden" name="id_subcont" value="<?php echo $sbc[0]->id_subcont?>">
                    <div class="form-group row mt-3">
                        <label style="color: black;"for="inputKP" class="col-sm-2 col-form-label" style="color: black;">Kategori Pekerjaan</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" for="kategori_pekerjaan" id="kategori_pekerjaan" name="kategori_pekerjaan" value="<?php echo $sbc[0]->kategori_pekerjaan?>" readonly>
                        </div>
                    </div>

                    <hr>
                    <h4 style="color: black;">Silahkan Validasi Kembali Kategori Pekerjaan Sesuai Dengan Data yang Tertera di Atas</h4>
                    <div class="card-body">
                        <div class="form-group row">
                            <label style="color: black;"for="inputKategoriP" class="col-sm-2 col-form-label" style="color: black;">Kategori Pekerjaan</label>
                            <div class="form-group clearfix">
                                <div class="form-check">
                                    <input class="form-check-input detail" type="checkbox" id="defaultCheck24" name="kategori_pekerjaan[0]" value="umum">
                                    <label style="color: black;"style="color: black;"class="form-check-label" for="defaultCheck24">
                                        Umum
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input detail" type="checkbox"  id="defaultCheck25" name="kategori_pekerjaan[1]" value="libatkan panas">
                                    <label style="color: black;"class="form-check-label" for="defaultCheck25">
                                        Melibatkan Panas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input detail" type="checkbox"  id="defaultCheck26" name="kategori_pekerjaan[2]" value="libatkan ruang terbatas">
                                    <label style="color: black;" class="form-check-label" for="defaultCheck26">
                                        Melibatkan Ruang Terbatas
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input detail" type="checkbox"  id="defaultCheck27" name="kategori_pekerjaan[3]" value="libatkan listrik tegangan tinggi">
                                    <label style="color: black;"class="form-check-label" for="defaultCheck27">
                                        Melibatkan Listrik Tegangan Menengah Tinggi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input detail" type="checkbox" id="defaultCheck28" name="kategori_pekerjaan[4]" value="libatkan ketinggian">
                                    <label style="color: black;"class="form-check-label" for="defaultCheck28">
                                        Melibatkan Ketinggian
                                    </label>
                                </div>
                                <div class="form-group">
                                    <small style="color: red;">Jika Kategori Pekerjaan lebih dari 1, silahkan ceklis sesuai dengan banyaknya Kategori Pekerjaan yang akan dilakukan.</small>
                                </div>  
                            </div>
                        </div>
                        <!-- FORM TAMBAHAN SYARAT WAJIB -->
                        <div class="col-md-6 d-none" id="conditional-input">
                            <div class="row" style="margin-right: 2px">
                                <div class="box box-warning box-solid">
                                    <table class='table table-bordered'>
                                        <div id="form-input">
                                            <div class="row mb-3 form-group">
                                                <div class="col-sm-15">
                                                    <h3 class="box-title" style="color: black;">SYARAT WAJIB</h3>
                                                    <p style="color: red;">Silahkan Ceklis Semua Syarat Wajib</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="Wajib tersedia APAR" id="conditional-1">
                                                        <label style="color: black;"class="form-check-label" for="conditional-1">
                                                            Wajib tersedia APAR
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="Wajib proteksi area kerja" id="conditional-2">
                                                        <label style="color: black;"class="form-check-label" for="conditional-2">
                                                            Wajib dipasang pembatas (safety line)/ Cover area kerja 
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="Bebas Area bahan mudah terbakar" id="conditional-3">
                                                        <label style="color: black;"class="form-check-label" for="conditional-3">
                                                            Area bebas dari cairan, debu, kain, B3 yang mudah terbakar
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="Lindungi dengan TERPAL" id="conditional-4">
                                                        <label style="color: black;"class="form-check-label" for="conditional-4">
                                                            Singkirkan benda yang mudah terbakar / lindungi dengan TERPAL 
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-none" id="conditional-input-2">
                            <div class="row" style="margin-right: 2px">
                                <div class="box box-warning box-solid">
                                    <table class='table table-bordered'>
                                        <div id="form-input">
                                            <div class="row mb-3 form-group">
                                                <div class="col-sm-13">
                                                    <h3 class="box-title" style="color: black;">SYARAT WAJIB</h3>
                                                    <p style="color: red;">Silahkan Ceklis Semua Syarat Wajib</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="Min 2 Pekerja" id="conditional-5">
                                                        <label style="color: black;"class="form-check-label" for="conditional-5">
                                                            Minimal melibatkan 2 orang pekerja
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="Wajib pastikan oksigen tersediaa" id="conditional-6">
                                                        <label style="color: black;"class="form-check-label" for="conditional-6">
                                                            Wajib memastikan ketersediaan oksigen
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="atur waktu maksimal kerja" id="conditional-7">
                                                        <label style="color: black;"class="form-check-label" for="conditional-7">
                                                            Lakukan pengaturan waktu kerja maksimal di area terbatas
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-none" id="conditional-input-3">
                            <div class="row" style="margin-right: 2px">
                                <div class="box box-warning box-solid">
                                    <table class='table table-bordered'>
                                        <div id="form-input">
                                            <div class="row mb-3 form-group">
                                                <div class="col-sm-10">
                                                    <h3 class="box-title" style="color: black;">SYARAT WAJIB</h3>
                                                    <p style="color: red;">Silahkan Ceklis Semua Syarat Wajib</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="Min 2 Pekerja" id="conditional-8">
                                                        <label style="color: black;"class="form-check-label" for="conditional-8">
                                                            Minimal melibatkan 2 orang pekerja
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="cek scaffolding/tangga" id="conditional-9">
                                                        <label style="color: black;"class="form-check-label" for="conditional-9">
                                                            Lakukan pengecekan alat kerja : scaffolding/ tangga.
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="cek body harness dan helm" id="conditional-10">
                                                        <label style="color: black;"class="form-check-label" for="conditional-10">
                                                            Lakukan pengecekan body harness dan helm 
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-none" id="conditional-input-4">
                            <div class="row" style="margin-right: 2px">
                                <div class="box box-warning box-solid">
                                    <table class='table table-bordered'>
                                        <div id="form-input">
                                            <div class="row mb-3 form-group">
                                                <div class="col-sm-10">
                                                    <h3 class="box-title" style="color: black;">SYARAT WAJIB</h3>
                                                    <p style="color: red;">Silahkan Ceklis Semua Syarat Wajib</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="Min 2 Pekerja" id="conditional-11">
                                                        <label style="color: black;"class="form-check-label" for="conditional-11">
                                                            Minimal melibatkan 2 orang pekerja.
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="PIC memiliki sertifikat Teknisi K3 Listrik" id="conditional-12">
                                                        <label style="color: black;"class="form-check-label" for="conditional-12">
                                                            PIC harus mempunyai sertifikat Teknisi K3 Listrik.
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="Area memiliki penerangan yang cukup" id="conditional-13">
                                                        <label style="color: black;"class="form-check-label" for="conditional-13">
                                                            Area kerja harus mempunyai penerangan yang cukup.
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="Area bebas genangan air" id="conditional-14">
                                                        <label style="color: black;"class="form-check-label" for="conditional-14">
                                                            Area kerja harus bebas genangan air.
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="validasi[]" value="Lengkap dengan LOTO sesuai Standar" id="conditional-15">
                                                        <label style="color: black;"class="form-check-label" for="conditional-15">
                                                            Pastikan dilengkapi LOTO sesuai standar.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- footer untuk button simpan dan selanjutnya -->
                    <div class="card-footer">
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        <button type="submit" id="btn" class="form-control btn btn-secondary d-none">Simpan</button>
                        <button type="button" id="btnAlert" class="form-control btn btn-secondary">Simpan</button>
                        <button class="form-control btn btn-danger mt-4"><a href="<?php echo base_url('Dashboard/konfirm_gambar');?>" style="color: white;">Cancel</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/sbadmin/');?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/sbadmin/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/sbadmin/');?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/sbadmin/');?>js/sb-admin-2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            checkConditional()
            checkConditional2()
            checkConditional3()
            checkConditional4()

            $(".detail").click(function() {
                checkConditional()
                checkConditional2()
                checkConditional3()
                checkConditional4()
            });

            //Fungsi untuk cek kondisi jika pilih libatkan panas
            function checkConditional() {
                if ($("input[name='kategori_pekerjaan[1]']:checked").val() == "libatkan panas") {
                    $("#conditional-input").removeClass('d-none');
                } else{
                    $("#conditional-input").addClass('d-none');
                }
            }
            
            // Fungsi untuk cek kondisi jika pilih libatkan ruang terbatas
            function checkConditional2() {
                if ($("input[name='kategori_pekerjaan[2]']:checked").val() == "libatkan ruang terbatas") {
                    $("#conditional-input-2").removeClass('d-none');
                } else{
                    $("#conditional-input-2").addClass('d-none');
                }
            }

            // Fungsi untuk cek kondisi jika pilih libatkan ketinggian
            function checkConditional3() {
                if ($("input[name='kategori_pekerjaan[4]']:checked").val() == "libatkan ketinggian") {
                    $("#conditional-input-3").removeClass('d-none');
                } else{
                    $("#conditional-input-3").addClass('d-none');
                }
            }

            // Fungsi untuk cek kondisi jika pilih libatkan listrik tegangan tinggi
            function checkConditional4() {
                if ($("input[name='kategori_pekerjaan[3]']:checked").val() == "libatkan listrik tegangan tinggi") {
                    $("#conditional-input-4").removeClass('d-none');
                } else{
                    $("#conditional-input-4").addClass('d-none');
                }
            }
        });

        // $("input[name='kategori_pekerjaan[]']:checked").val()
        // alert($("input[name='kategori_pekerjaan[0]']").val())

        //sweet alert untuk save data
        $('#btnAlert').on('click',function(){
            Swal.fire({
                title: 'Validasi Data',
                text: "Apakah Validasi Data Sudah Benar ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Lanjutkan'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#btn').click();
                    Swal.fire('Data Berhasil Divalidasi !', '', 'success')
                }
            })
        });
    </script>

</body>

</html>