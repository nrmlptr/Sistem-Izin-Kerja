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
<title> Cetak PDF Rincian Total IK-PT CBI</title>

</head><body style="font-size: 12px">

<!-- <h2>Data Detail Izin Kerja Subcont PT CBI</h2> -->
<table width="100%" >
    <tr>
        <td width="50%"><img src="<?= 'assets/images/logo century.jpg';?>" style="width: 90px;"></td>
        <td align="right" valign="top"><img src="<?= 'assets/images/logo k3 hijau.png';?>" style="width: 70px;"></td>
    </tr>
</table>
<p align="center"> 
    <span style="font-size: 18px"><b>RINCIAN TOTAL IZIN KERJA/BULAN PT CENTURY BATTERIES INDONESIA</b></span> <br>
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
                <span style="font-size: 12px"><?=date('d-m-Y')?>/Rincian Total Izin Kerja/EHS Dept</span>
            </td>
        </tr>
    </table>
</p>
<br>
<br>
<p>
    <table style="border: 1px solid black;border-collapse: collapse;font-size: 11px" width="100%">
    <?php foreach ($printData as $row) {  ?>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;"><mark style="background: yellow;">Bulan</mark></td>
            <td style="border: 1px solid black;"><mark style="background: yellow;"><?php echo $row['bulan']?></mark></td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;"> Umum </td>
            <td style="border: 1px solid black;"><?php echo $row['umum']?></td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;"> Melibatkan Panas </td>
            <td style="border: 1px solid black;"><?php echo $row['libatkan_panas']?></td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;"> Melibatkan Ruang Terbatas </td>
            <td style="border: 1px solid black;"><?php echo $row['libatkan_ruang_terbatas']?></td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;"> Melibatkan Listrik Tegangan Menengah Tinggi </td>
            <td style="border: 1px solid black;"><?php echo $row['libatkan_listrik_tegangan_tinggi']?></td>
        </tr>
        <tr style="margin: 5px">
            <td class="bold" style="border: 1px solid black;"> Melibatkan Ketinggian </td>
            <td style="border: 1px solid black;"><?php echo $row['libatkan_ketinggian']?></td>
        </tr>
    <?php } ?>
    </table>
</p>
<br>
<br>
<br>
</body></html>