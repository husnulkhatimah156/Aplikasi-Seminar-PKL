<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <base href="<?php echo base_url();?>"/>
  </head>
  <style type="text/css">
    @media print{@page {size: landscape}}
  </style>
  <body onload="window.print()">
   <?php 
function rupiah($angka){
  
  $hasil_rupiah = "Rp " . number_format($angka,0,',','.');
  return $hasil_rupiah;
}
?>

<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}?>
      <table border="0" align="center" width="100%">
        <tr align="center">
            <td>
                <img width="70px" src="<?= base_url() ?>assets/logo2.png">
            </td>
           <td>
                 <font style="font-size: 20px;">PEMERINTAH PROVINSI KALIMANTAN SELATAN</font> <br>
                 <font style="font-size: 35px;">SMK NEGERI 1 MARABAHAN</font> <br>
                <font size="3">JL. Jend. Sudirman No.87 Marabahan, 70513, Telp. 08115161705</font><br>
                <font size="3">Website : <a href="www.smkn1marabahan.sch.id">www.smkn1marabahan.sch.id</a>, Email : <a href="Skensamarabahan@gmail.com">Skensamarabahan@gmail.com</a></font><br>
            </td>
            <td>
                <img width="70px" src="<?= base_url() ?>assets/logosmk.png">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <hr size="3px" color="black">
            </td>
        </tr>
    </table>


    <h3 align="center" style="font-size: 16px;"><u>LAPORAN HISTORY PEMBAYARAN</u> <br> </h3>
    <br>
    <table border="1"width="100%" style="font-size: 12px;">
      <thead style="background-color: #d5eacf; text-align: center; ">
<tr>
                                                        <th style="flex: 0 0 auto; min-width: 2em;">No.</th>
                                                        <th>NIS</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Tanggal Transfer</th>
                                                        <th>Nominal Transfer</th>
                                                    </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no=1; foreach ($data_history_pembayaran->result_array() as $i) :
                                                    $id_history_pembayaran=$i['id_history_pembayaran'];
                                                  ?>
                                                 <tr>
                                              
                                                  <td style="flex: 0 0 auto; min-width: 2em;"><?php echo $no++;?></td>
                                                  <td><?php echo $i['id_siswa'];?></td> 
                                                <td><?php echo $i['nama'];?></td> 
                                                <td><?php echo tgl_indo($i['tanggal_transfer']);?></td> 
                                                <td><?php echo rupiah($i['nominal_transfer']);?></td>
        </tr>
            <?php endforeach;?>
    </table>
<BR><BR>
 <div style="text-align: left; display: inline-block; float: right; margin-right: 50px; font-size: 14px;">
        <label>
            <br>
            <p style="text-align: center;">
                Marabahan, <?= tgl_indo(date('Y-m-d')) ?><br>
                Kepala Sekolah
            </p>
            <br><br><br>
            <p style="text-align: center;">
                <b></b><br>
                <u>H. Hormuzi, S.Ag, MM</u><br>
              NIP. 19631107 199303 1 001
            </p>
        </label>
    </div>
  </body>
</html>
