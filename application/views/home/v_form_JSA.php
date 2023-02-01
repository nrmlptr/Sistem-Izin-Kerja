<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FORM IKS - PT CBI</title>

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
                <div class="card-header text-center">
                    <h3 class="card-title">JOB SAFETY ANALYSIST</h3>
                    <p>E-Form ini merupakan rangkaian tahapan lanjutan yang wajib diisi oleh subcont sebelum bekerja di PT CBI</p>
                </div>
                <!-- TAMPILAN DATA KEPALA -->
                <div class="card col-sm-3">
                    <div class="row">
                        <div class="col-xxl">
                            <div class="card-body text-left py-4">
                                <div class="row-10">
                                    <div class="col-25">
                                        <p>Nomor Registrasi        : <?= $sbc['no_regis']?></p>
                                        <p>Nama Perusahaan         : </p>
                                        <p>Alamat Perusahaan       : </p>
                                        <p>Seksie Penanggung Jawab : </p>
                                        <p>PIC CBI                 : </p>
                                        <p>Tanggal Mulai Bekerja   : </p>
                                        <p>Tanggal Selesai Bekerja : </p>
                                        <p>Jenis Pekerjaan         : </p>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><hr>
                <!-- FORM UNTUK MEMBUAT JSA -->
                <div>
                    <form action="<?php echo base_url('Home/proses_simpan_IKS');?>" method="POST">
                        <input type="hidden" name="id_subcont" value="<?php echo $sbc['id_subcont']?>">
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <h3 class="text-center">JOB SAFETY ANALYSIS(JSA)</h3>
                                
                                <table class="table" border="1">
                                    <thead>
                                        <tr>
                                            <th>Aktivitas Pekerjaan</th>                      
                                            <th>ASPEK LK3</th>
                                            <th>DAMPAK LK3</th>
                                            <th>Standar Pengamanan</th>
                                        </tr>
                                    </thead>
                                    <tbody id="form-jsa">
                                        <tr>
                                            <td>
                                                <div class="col-sm-12">
                                                   
                                                    <textarea class="form-control" id="aktivitas_pekerjaan" for="aktivitas_pekerjaan" name="jsa[0][aktivitas_pekerjaan]" rows="3"  required></textarea>
                                                    <small style="color: red;">Isi Form ini dengan urutan pekerjaan yang akan dilakukan di PT CBI.</small> 
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group clearfix">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="aspek1" name="jsa[0][aspeklk3[]]" value="JATUH DARI KETINGGIAN">
                                                        <label class="form-check-label" for="aspek1">
                                                        JATUH DARI KETINGGIAN
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="aspek2" name="jsa[0][aspeklk3[]]" value="TERSENGAT LISTRIK">
                                                        <label class="form-check-label" for="aspek2">
                                                        TERSENGAT LISTRIK
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"  id="aspek3" name="jsa[0][aspeklk3[]]" value="TERJEPIT">
                                                        <label class="form-check-label" for="aspek3">
                                                        TERJEPIT
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"  id="aspek4" name="jsa[0][aspeklk3[]]" value="TERGELINCIR">
                                                        <label class="form-check-label" for="aspek4">
                                                        TERGELINCIR
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="aspek5" name="jsa[0][aspeklk3[]]" value="TERKENA PERCIKAN LAS">
                                                        <label class="form-check-label" for="aspek5">
                                                        TERKENA PERCIKAN LAS
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="aspek6" name="jsa[0][aspeklk3[]]" value="GETARAN MEKANIS ALAT">
                                                        <label class="form-check-label" for="aspek6">
                                                        GETARAN MEKANIS ALAT
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="aspek7" name="jsa[0][aspeklk3[]]" value="TERPAPAR UAP">
                                                        <label class="form-check-label" for="aspek7">
                                                        TERPAPAR UAP
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="aspek8" name="jsa[0][aspeklk3[]]" value="TERKENA PERCIKAN CAIRAN KIMIA">
                                                        <label class="form-check-label" for="aspek8">
                                                        TERKENA PERCIKAN CAIRAN KIMIA
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="aspek9" name="jsa[0][aspeklk3[]]" value="TERSAYAT">
                                                        <label class="form-check-label" for="aspek9">
                                                            TERSAYAT
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="aspek10" name="jsa[0][aspeklk3[]]" value="KEBAKARAN">
                                                        <label class="form-check-label" for="aspek10">
                                                            KEBAKARAN
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="aspek11" name="jsa[0][aspeklk3[]]" value="LIMBAH B3 DAN NON B3">
                                                        <label class="form-check-label" for="aspek11">
                                                            LIMBAH B3 DAN NON B3
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <small style="color: red;">Jika ASPEK LK3 lebih dari 1, silahkan ceklis sesuai kondisi.</small>
                                                    </div>  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group clearfix">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="dampakl" name="jsa[0][dampaklk3[]]" value="JATUH DARI KETINGGIAN">
                                                        <label class="form-check-label" for="dampakl">
                                                            PENCEMARAN LINGKUNGAN
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="dampak2" name="jsa[0][dampaklk3[]]" value="TERSENGAT LISTRIK">
                                                        <label class="form-check-label" for="dampak2">
                                                            KEMATIAN / FATALITY
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"  id="dampak3" name="jsa[0][dampaklk3[]]" value="TERJEPIT">
                                                        <label class="form-check-label" for="dampak3">
                                                            PATAH TULANG
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"  id="dampak4" name="jsa[0][dampaklk3[]]" value="TERGELINCIR">
                                                        <label class="form-check-label" for="dampak4">
                                                            LUKA PADA TUBUH
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="dampak5" name="jsa[0][dampaklk3[]]" value="TERKENA PERCIKAN LAS">
                                                        <label class="form-check-label" for="dampak5">
                                                            LUKA PADA JARI / TANGAN
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="dampak6" name="jsa[0][dampaklk3[]]" value="GETARAN MEKANIS ALAT">
                                                        <label class="form-check-label" for="dampak6">
                                                            LUKA PADA MATA
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="dampak7" name="jsa[0][dampaklk3[]]" value="TERPAPAR UAP">
                                                        <label class="form-check-label" for="dampak7">
                                                            LUKA BAKAR 
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="dampak8" name="jsa[0][dampaklk3[]]" value="TERKENA PERCIKAN CAIRAN KIMIA">
                                                        <label class="form-check-label" for="dampak8">
                                                            KRAM PADA TANGAN / KAKI
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="dampak9" name="jsa[0][dampaklk3[]]" value="TERSAYAT">
                                                        <label class="form-check-label" for="dampak9">
                                                            KERUSAKAN FASILITAS
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="dampak10" name="jsa[0][dampaklk3[]]" value="KEBAKARAN">
                                                        <label class="form-check-label" for="dampak10">
                                                            GANGGUAN PENDENGARAN
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="dampak11" name="jsa[0][dampaklk3[]]" value="LIMBAH B3 DAN NON B3">
                                                        <label class="form-check-label" for="dampak11">
                                                            GANGGUAN PERNAFASAN
                                                        </label>
                                                    </div>
                                                    <div class="form-group">
                                                        <small style="color: red;">Jika DAMPAK LK3 lebih dari 1, silahkan ceklis sesuai kondisi.</small>
                                                    </div>  
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" id="standar_pengamanan" for="standar_pengamanan" name="jsa[0][standar_pengamanan]" rows="3"  required></textarea>   
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="4">
                                            <div class="d-grid gap-2">
                                                <button class="btn btn-secondary" id="tambah-jsa" type="button">Tambah</button>
                                            </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- footer untuk button simpan dan selanjutnya -->
                        <div class="card-footer">
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                            <button type="submit" id="btn" class="form-control btn btn-secondary d-none">Simpan</button>
                            <button type="button" id="btnAlert" class="form-control btn btn-secondary">Simpan</button>
                            <button class="form-control btn btn-danger mt-4"><a href="<?php echo base_url('Login/index');?>" style="color: white;">Cancel</a></button>
                        </div>
                    </form>
                </div>
                
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

    <script>
        $(document).ready(function(){
            let jsa = JSON.parse('<?= isset($jsa) ? json_encode($jsa) : 'null' ?>');
            let rowIndex = 1;

                $('#tambah-jsa').on('click',function () {

                    let row = `<tr id="row-${rowIndex}">
                                <td>
                                    <textarea name="jsa[${rowIndex}][aktivitas_pekerjaan] id="aktivitas_pekerjaan" for="aktivitas_pekerjaan" rows="3"  class="form-control"></textarea>
                                </td>
                                <td>
                                <div class="form-group clearfix">
                                    <div class="form-check">
                                        <input name="jsa[${rowIndex}][aspeklk3[]] class="form-check-input" type="checkbox" id="aspek1" value="JATUH DARI KETINGGIAN">
                                        <label class="form-check-label" for="aspek1">
                                        JATUH DARI KETINGGIAN
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="jsa[${rowIndex}][aspeklk3[]]  class="form-check-input" type="checkbox" id="aspek2" value="TERSENGAT LISTRIK">
                                        <label class="form-check-label" for="aspek2">
                                        TERSENGAT LISTRIK
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="jsa[${rowIndex}][aspeklk3[]]  class="form-check-input" type="checkbox"  id="aspek3" value="TERJEPIT">
                                        <label class="form-check-label" for="aspek3">
                                        TERJEPIT
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="jsa[${rowIndex}][aspeklk3[]]  class="form-check-input" type="checkbox"  id="aspek4" value="TERGELINCIR">
                                        <label class="form-check-label" for="aspek4">
                                        TERGELINCIR
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="jsa[${rowIndex}][aspeklk3[]]  class="form-check-input" type="checkbox" id="aspek5" value="TERKENA PERCIKAN LAS">
                                        <label class="form-check-label" for="aspek5">
                                        TERKENA PERCIKAN LAS
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="jsa[${rowIndex}][aspeklk3[]]  class="form-check-input" type="checkbox" id="aspek6" value="GETARAN MEKANIS ALAT">
                                        <label class="form-check-label" for="aspek6">
                                        GETARAN MEKANIS ALAT
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="jsa[${rowIndex}][aspeklk3[]]  class="form-check-input" type="checkbox" id="aspek7" value="TERPAPAR UAP">
                                        <label class="form-check-label" for="aspek7">
                                        TERPAPAR UAP
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="jsa[${rowIndex}][aspeklk3[]]  class="form-check-input" type="checkbox" id="aspek8" value="TERKENA PERCIKAN CAIRAN KIMIA">
                                        <label class="form-check-label" for="aspek8">
                                        TERKENA PERCIKAN CAIRAN KIMIA
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="jsa[${rowIndex}][aspeklk3[]] class="form-check-input" type="checkbox" id="aspek9" value="TERSAYAT">
                                        <label class="form-check-label" for="aspek9">
                                            TERSAYAT
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="jsa[${rowIndex}][aspeklk3[]] class="form-check-input" type="checkbox" id="aspek10" value="KEBAKARAN">
                                        <label class="form-check-label" for="aspek10">
                                            KEBAKARAN
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input name="jsa[${rowIndex}][aspeklk3[]] class="form-check-input" type="checkbox" id="aspek11" value="LIMBAH B3 DAN NON B3">
                                        <label class="form-check-label" for="aspek11">
                                            LIMBAH B3 DAN NON B3
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <small style="color: red;">Jika ASPEK LK3 lebih dari 1, silahkan ceklis sesuai kondisi.</small>
                                    </div>  
                                </div>
                                </td>
                                <td>
                                    <div class="form-group clearfix">
                                        <div class="form-check">
                                            <input name="jsa[${rowIndex}][dampaklk3[]] class="form-check-input" type="checkbox" id="dampakl" value="JATUH DARI KETINGGIAN">
                                            <label class="form-check-label" for="dampakl">
                                                PENCEMARAN LINGKUNGAN
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="jsa[${rowIndex}][dampaklk3[]] class="form-check-input" type="checkbox" id="dampak2" value="TERSENGAT LISTRIK">
                                            <label class="form-check-label" for="dampak2">
                                                KEMATIAN / FATALITY
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="jsa[${rowIndex}][dampaklk3[]] class="form-check-input" type="checkbox"  id="dampak3" value="TERJEPIT">
                                            <label class="form-check-label" for="dampak3">
                                                PATAH TULANG
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="jsa[${rowIndex}][dampaklk3[]] class="form-check-input" type="checkbox"  id="dampak4"  value="TERGELINCIR">
                                            <label class="form-check-label" for="dampak4">
                                                LUKA PADA TUBUH
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="jsa[${rowIndex}][dampaklk3[]] class="form-check-input" type="checkbox" id="dampak5" value="TERKENA PERCIKAN LAS">
                                            <label class="form-check-label" for="dampak5">
                                                LUKA PADA JARI / TANGAN
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="jsa[${rowIndex}][dampaklk3[]] class="form-check-input" type="checkbox" id="dampak6"  value="GETARAN MEKANIS ALAT">
                                            <label class="form-check-label" for="dampak6">
                                                LUKA PADA MATA
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="jsa[${rowIndex}][dampaklk3[]] class="form-check-input" type="checkbox" id="dampak7" value="TERPAPAR UAP">
                                            <label class="form-check-label" for="dampak7">
                                                LUKA BAKAR 
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="jsa[${rowIndex}][dampaklk3[]] class="form-check-input" type="checkbox" id="dampak8" value="TERKENA PERCIKAN CAIRAN KIMIA">
                                            <label class="form-check-label" for="dampak8">
                                                KRAM PADA TANGAN / KAKI
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="jsa[${rowIndex}][dampaklk3[]] class="form-check-input" type="checkbox" id="dampak9" value="TERSAYAT">
                                            <label class="form-check-label" for="dampak9">
                                                KERUSAKAN FASILITAS
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="jsa[${rowIndex}][dampaklk3[]] class="form-check-input" type="checkbox" id="dampak10" value="KEBAKARAN">
                                            <label class="form-check-label" for="dampak10">
                                                GANGGUAN PENDENGARAN
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input name="jsa[${rowIndex}][dampaklk3[]] class="form-check-input" type="checkbox" id="dampak11" value="LIMBAH B3 DAN NON B3">
                                            <label class="form-check-label" for="dampak11">
                                                GANGGUAN PERNAFASAN
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <small style="color: red;">Jika DAMPAK LK3 lebih dari 1, silahkan ceklis sesuai kondisi.</small>
                                        </div>  
                                    </div>
                                </td>
                                <td>
                                    <textarea name="jsa[${rowIndex}][standar_pengamanan]" id="standar_pengamanan" rows="3" class="form-control"></textarea>
                                </td>
                                <td class="text-danger">
                                <a href="javascript:void(0)" onclick="hapusBaris(${rowIndex})">
                                <i class='tf-icons bx bx-x'></i>
                                </a>
                                
                                </td>
                            </tr>`
                $('#form-jsa').append(row)
                })

            rowIndex++
        });

        function hapusBaris(id){
            $('#row-' + id).remove()
            rowIndex--;
        }

        function numberFormatter(value){
            let formatter = new Intl.NumberFormat('id-ID', {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0,
            })

            let number = formatter.format(value);
            return number;
        }

    </script>

</body>

</html>