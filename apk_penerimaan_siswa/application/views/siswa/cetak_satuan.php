<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <base href="<?php echo base_url();?>"/>
  </head>
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


    <h3 align="center" style="font-size: 16px;"><u>BUKTI PENDAFTARAN</u> <br> </h3>
    <h4 align="center" style="font-size: 16px;">PANITIA PENERIMAAN PESERTA DIDIK BARU (PPDB)<br>SMK NEGERI 1 MARABAHAN TAHUN PELAJARAN 2023/2024  </h4>
    <br>
    


<table border="0"  style="margin-left: 30px; font-size: 10pt!important; font-family: 'Times New Roman';  "  class="table " >
  <div> 
  <tbody>
  <tr style="vertical-align: top;">
      <td width="150px" >No. Pendaftaran</td>
      <td width="10px">: </td>
      <td ><?php echo $data_siswa['id_siswa'];?></td>
  </tr>
  <tr style="vertical-align: top;">
      <td width="150px" >Tanggal Pendaftaran</td>
      <td width="10px">: </td>
      <td ><?php echo tgl_indo(date("Y-m-d",strtotime($data_siswa["tanggal_jam_mendaftar"])));?></td>
  </tr>
  <tr style="vertical-align: top;">
      <td width="150px" >Tanggal Cetak</td>
      <td width="10px">: </td>
      <td ><?php echo tgl_indo(date('Y-m-d'));?></td>
  </tr>
  <tr style="vertical-align: top;">
      <td width="150px" >NISN</td>
      <td width="10px">: </td>
      <td ><?php echo $data_siswa['nisn'];?></td>
  </tr>
  <tr style="vertical-align: top;">
      <td width="150px" >Nama Lengkap</td>
      <td width="10px">: </td>
      <td ><?php echo $data_siswa['nama'];?></td>
  </tr>
  <tr style="vertical-align: top;">
      <td width="150px" >Jenis Kelamin</td>
      <td width="10px">: </td>
      <td ><?php echo $data_siswa['jenis_kelamin'];?></td>
  </tr>
  <tr style="vertical-align: top;">
      <td width="150px" >Tempat, Tanggal Lahir</td>
      <td width="10px">: </td>
      <td ><?php echo $data_siswa['tempat_lahir'];?>, <?php echo tgl_indo($data_siswa['tanggal_lahir']);?></td>
  </tr>
   <tr style="vertical-align: top;">
      <td width="150px" >Agama</td>
      <td width="10px">: </td>
      <td ><?php echo $data_siswa['agama'];?></td>
  </tr>
   <tr style="vertical-align: top;">
      <td width="150px" >Nama Orang Tua/Wali</td>
      <td width="10px">: </td>
      <td ></td>
  </tr>
  
  </tbody>
</div>
</table>


<table border="0"  style="margin-left: 30px; font-size: 10pt!important; font-family: 'Times New Roman';  "  class="table " >
  <div> 
  <tbody>
  <tr style="vertical-align: top;">
      <td width="30px" ></td>
      <td width="115px" >Ayah</td>
      <td width="10px">: </td>
      <td ><?php echo $data_siswa['nama_ayah'];?></td>
  </tr>
  <tr style="vertical-align: top;">
      <td width="30px" ></td>
      <td width="115px" >Ibu</td>
      <td width="10px">: </td>
      <td ><?php echo $data_siswa['nama_ibu'];?></td>
  </tr>
  <tr style="vertical-align: top;">
      <td width="30px" ></td>
      <td width="115px" >Wali</td>
      <td width="10px">: </td>
      <td ></td>
  </tr>
  
  </tbody>
</div>
</table>


<table border="0"  style="margin-left: 30px; font-size: 10pt!important; font-family: 'Times New Roman';  "  class="table " >
  <div> 
  <tbody>
  <tr style="vertical-align: top;">
      <td width="150px" >No. Handphone</td>
      <td width="10px">: </td>
      <td ><?php echo $data_siswa['no_telp'];?></td>
  </tr>
  <tr style="vertical-align: top;">
      <td width="150px" >Asal Sekolah</td>
      <td width="10px">: </td>
      <td ><?php echo $data_siswa['sekolah_asal'];?></td>
  </tr>
  </tbody>
</div>
</table>


<BR>
   <div style="text-align: left; display: inline-block; float: right; margin-right: 50px; font-size: 14px;">
        <label>
            <br>
            <p style="text-align: left;">
                Barito Kuala, <?= tgl_indo(date('Y-m-d')) ?><br>
                Ketua Panitia PPDB
            </p>
            <br><br><br>
            <p style="text-align: left;">
                <b></b><br>
                <u>__________________________</u><br>
              NIP. -
            </p>
        </label>
    </div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<b>Siapkan Berkas Berikut Ketika anda melakukan DAFTAR ULANG :</b>
<br>
<table border="0"  style="margin-left: 30px; font-size: 10pt!important; font-family: 'Times New Roman';  "  class="table " >
  <div> 
  <tbody>
  <tr style="vertical-align: top;">
      <td width="10px" >1. </td>
      <td width="500px" >Cetak bukti pendaftaran</td>
      <td width="10px">: </td>
      <td >1 Lembar</td>
  </tr>
  <tr style="vertical-align: top;">
      <td width="10px" >2. </td>
      <td width="500px" >Foto copy Akte Kelahiran dan Kartu Keluarga</td>
      <td width="10px">: </td>
      <td >2 Lembar</td>
  </tr>
  <tr style="vertical-align: top;">
      <td width="10px" >3. </td>
      <td width="500px" >Surat Keterangan Lulus dan Ijazah MTs/SMP <b>(*Apabila sudah ada)</b></td>
      <td width="10px">: </td>
      <td >2 Lembar</td>
  </tr>
  <tr style="vertical-align: top;">
      <td width="10px" >4. </td>
      <td width="500px" >Fc. Kartu NISN <b>(*No. NISN/Screen NISN)</b></td>
      <td width="10px">: </td>
      <td >1 Lembar</td>
  </tr>
  </tbody>
</div>
</table>
<table border="0"  style="margin-left: 30px; font-size: 10pt!important; font-family: 'Times New Roman';  "  class="table " >
  <div> 
  <tbody>
  <tr style="vertical-align: top;">
      <td width="10px" >5. </td>
      <td >Semua berkas dimasukan kedalam map biru (PUTRA), map Kuning (PUTRI) dan diserahkan kepada Panitia
PPDB SMK Negeri 1 Marabahan Tahun Pelajaran 2024/2025</td>
  </tr>
  </tbody>
</div>
</table>


  </body>
</html>
