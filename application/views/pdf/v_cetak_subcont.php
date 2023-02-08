<html><head>

<style>
    p{
        margin: 5px 0 0 0;
    }

    p.footer{
        text-align: right;
        font-size: 11px;
        border-top: 1px solid #D0D0D0;
        line-height: 32px;
        padding: 0 10px 0 10px;
        margin: 20px 0 0 0;
        display: block;
    }
    .bold{
        font-weight: bold;
    }
    #footer {
    clear: both;
    position: relative;
    height: 40px;
    margin-top: -40px;
    }
</style>
<title> Cetak PDF IKSJSA-PT CBI</title>

</head><body style="font-size: 12px">

<!-- <h2>Data Detail Izin Kerja Subcont PT CBI</h2> -->
<table width="100%" >
    <tr>
        <td width="50%"><img src="<?= 'assets/images/logo century.jpg';?>" style="width: 90px;"></td>
        <td align="right" valign="top"><img src="<?= 'assets/images/logo k3 hijau.png';?>" style="width: 70px;"></td>
    </tr>
</table>
<p align="center"> 
    <span style="font-size: 18px"><b>IZIN KERJA SUBCONT <?php echo $sbc[0]->nama_perusahaan?> <br> DI PT CENTURY BATTERIES INDONESIA</b></span> <br>
</p>
<hr>
<p>
    <table>
        <tr>
            <th align="right">
            </th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <span style="font-size: 12px"><?=date('d-m-Y', strtotime($sbc[0]->tanggal_pengajuan))?>/IZIN KERJA SUBCONT</span>
            </td>
        </tr>
        <tr>
            <th align="left"> Nomor Registrasi </th>
            <td class="bold"> : <?php echo $sbc[0]->no_regis?></td>
        </tr>
        <tr>
            <th align="left"> Nama Perusahaan </th>
            <td> : <?php echo $sbc[0]->nama_perusahaan?></td>
        </tr>
        <tr>
            <th align="left"> Alamat Perusahaan </th>
            <td> : <?php echo $sbc[0]->alamat_perusahaan?></td>
        </tr>
        <tr>
            <th align="left"> Tanggal Mulai dan Selesai Bekerja </th>
            <td> : <?= date('d-m-Y', strtotime($sbc[0]->wkt_mulai)).'s/d'.date('d-m-Y', strtotime($sbc[0]->wkt_selesai))?></td>
        </tr>
    </table>
</p>
<br>
<br>
<p>
    Detail Data Subcont :
</p>
<p?>
    <table style="border: 1px solid black;border-collapse: collapse;font-size: 11px" width="100%">
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">Lokasi Pekerjaan </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->lokasi_pekerjaan?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">Direktur/Koordinat Subcont </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->direktur_koordinat?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">Nama PIC Subcont </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->pic_subcont?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">No HP Subcont </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->nohp_subcont?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">Jumlah Pekerja Subcont </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->jml_picsubcont?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">Nama Pekerja Subcont </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->namamp_subcont?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">Nama PIC PT CBI </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->pic_cbi?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">Seksie PIC PT CBI </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->sie_pic_cbi?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">No HP PIC PT CBI </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->nohp_cbi?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">Peralatan </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->peralatan?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">APD Wajib </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->apd_dipakai?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">APD Tambahan </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->apd_tambahan?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">Jenis Pekerjaan </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->jenis_pekerjaan?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">Kategori Pekerjaan </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->kategori_pekerjaan?> </td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;">Syarat Wajib </td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->syarat_wajib?> </td>
        </tr>
        <tr style="margin: 5px">
            <td style="border: 1px solid black;"><b style="color: blue;"> Status </b></td>
            <td style="border: 1px solid black;"><?php echo $sbc[0]->status?> </td>
        </tr>
        <tr style="margin: 5px">
            <td style="border: 1px solid black;" colspan="2" align="center">
                <?php if($sbc[0]->kategori_pekerjaan != 'umum'){?>
                    <span style="color: green;">Catatan : Perlu Diadakan Briefing dengan EHS</span>
                <?php } ?>
            </td>
        </tr>
    </table>
</p>
<br>
<br>
<p style="color: red;">Note : Jika membutuhkan informasi lebih lanjut silahkan hubungi pihak PIC PT CBI.</p>
<br>
<br>
<br>
<p>
    <table width="100%">
        <tr>
            <td align="center">Dibuat oleh<br><br><br><br><br><u>PIC SUBCONT</u><br></td>
            <td align="center">Diperiksa oleh<br><br><br><br><br><u>PIC PT CBI</u><br></td>
            <td align="center">Diketahui oleh<br><br><br><br><br><u>PIC EHS</u><br></td>
        </tr>    
    </table>
</p>
</body></html>