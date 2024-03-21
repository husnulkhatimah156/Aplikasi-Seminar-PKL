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
  <body>
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


    <h3 align="center" style="font-size: 16px;"><u>LAPORAN GRAFIK SISWA BARU TAHUN <?php echo $tahun;?></u> <br> </h3>
    <br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>

    <canvas id="myChart" style="width:100%; height: 350px;"></canvas>




<script type="text/javascript">
   var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar', // also try bar or other graph types

        // The data for our dataset
        data: {
            labels: [<?php foreach ($this->db->get("jurusan")->result() as $key): ?>
                    "<?php echo $key->nama_jurusan;?>",
                      <?php  endforeach; ?>],
            // Information about the dataset
        datasets: [{
                label: 'Jumlah Siswa',
                backgroundColor: [
                  'rgba(54, 162, 235, 0.4)',
                ],
                borderColor: [
                  'rgb(54, 162, 235)',
                ],
                data: [<?php $j_jurusan=""; foreach ($this->db->get("jurusan")->result() as $key) {
                $jumlah_jurusan=$this->db->query("SELECT * FROM siswa where id_jurusan='$key->id_jurusan' AND YEAR(tanggal_jam_mendaftar)='$tahun'")->num_rows(); 
                  $j_jurusan.=$jumlah_jurusan.","; 

                    } $j_jurusan=substr($j_jurusan, 0, -1); echo $j_jurusan;?>],
            }]
        },

       
    });

</script>

    
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
