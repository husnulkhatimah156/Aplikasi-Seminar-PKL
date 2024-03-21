
	<?php


$id_siswa321=$this->session->userdata('id_pengguna2');
  $row=$this->db->query("SELECT * FROM siswa where id_siswa='$id_siswa321'")->row_array();
  $row2=$this->db->query("SELECT * FROM pengajuan_siswa_baru where id_siswa='$id_siswa321'")->row_array();
  ?>
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
					
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-12">
							<div class="card full-height">
								<div class="card-body">
									<marquee><div class="card-title text-uppercase" >APLIKASI PENERIMAAN PESERTA DIDIK BARU PADA SMK NEGERI 1 MARABAHAN BERBASIS WEB</div></marquee>
								</div>
							</div>
						</div>
					</div>

          <?php if(empty($row['nama'])):?>
          <div class="row mt--2">
            <div class="col-md-12">
              <div class="card full-height">
                <div class="card-body">
                  <div class="row">
                     <button type="button" class="btn btn-success btn-sm col-md-12" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-edit"></i> AJUKAN PENDAFTARAN SISWA</button>
                   </div>
                </div>
              </div>
            </div>
          </div>
          <?php else:?>
            <div class="row mt--2">
            <div class="col-md-12">
              <div class="card full-height">
                <div class="card-body">
                  <div class="row">
                     <button type="button" class="btn btn-info btn-sm col-md-12" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-edit"></i> UPDATE BIODATA SISWA</button>
                   </div>
                </div>
              </div>
            </div>
          </div>

          <?php endif;?>

          <?php if(!empty($row['nama'])):?>
					<div class="row mt--2">
						<div class="col-md-12">
							<?php if($row2['status_pengajuan']=="MENUNGGU KONFIRMASI"):?>
										<div class="alert alert-primary" role="alert">
										  STATUS PENGAJUAN PENDAFTARAN ANDA SAAT INI MENUNGGU KONFIRMASI, HARAP PERIKSA KEMBALI NANTI!
										</div>
									<?php elseif($row2['status_pengajuan']=="DITOLAK"):?>
										<div class="alert alert-danger" role="alert">
										  MOHON MAAF STATUS PENGAJUAN PENDAFTARAN ANDA DITOLAK, CATATAN PENOLAKAN :   <?php echo $row2['keterangan_pengajuan'];?>
										</div>
									<?php elseif($row2['status_pengajuan']=="DITERIMA"):?>
										<div class="alert alert-success" role="alert">
										  SELAMAT STATUS PENGAJUAN PENDAFTARAN ANDA DITERIMA, CATATAN PENERIMAAN :  <?php echo $row2['keterangan_pengajuan'];?>
										</div>
									<?php endif;?>
						</div>
					</div>
        <?php endif;?>


          <?php if(!empty($row['nama'])):?>
					<div class="row mt-2">
						<div class="col-md-12">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title text-uppercase" style="text-align: center;">INFORMASI SISWA</div>
									<hr>
										

 <?php if(!empty($row['nama'])):?>
    <?php if($row2['status_pengajuan']=="DITERIMA"):?>
 <a target="_blank" style="margin: 2px; float: right;" type="button" class="btn btn-success mdi mdi-pencil btn-sm" href="<?php echo base_url();?>siswa/cetak2/<?php echo $row['id_siswa'];?>"> CETAK BUKTI PENDAFTARAN</a>
  <?php endif;?>

      <?php endif;?>


										<table border="0"  style="font-size: 15pt;font-family: 'Times New Roman'; margin: 10px 20px 20px 20px; " >
  <div> 
  <tbody>
  
  <tr>
      <td width="190px">No.Pendaftaran</td>
      <td width="10px">: </td>
      <td><?php echo $row['id_siswa'];?></td>
      <td></td>
  </tr>
  <tr>
      <td width="190px">NISN</td>
      <td width="10px">: </td>
      <td><?php echo $row['nisn'];?></td>
      <td></td>
  </tr>
  <tr>
      <td width="190px">Nama Siswa</td>
      <td width="10px">: </td>
      <td><?php echo $row['nama'];?></td>
      <td></td>
  </tr>
  <tr>
      <td width="190px">Tempat, Tanggal Lahir</td>
      <td width="10px">: </td>
      <td><?php echo $row['tempat_lahir'];?>, <?php echo tgl_indo($row['tanggal_lahir']);?></td>
      <td></td>
  </tr>

  <tr>
      <td width="190px">Jenis Kelamin</td>
      <td width="10px">: </td>
      <td><?php echo $row['jenis_kelamin'];?></td>
      <td></td>
  </tr>

  <tr>
      <td width="190px">Alamat</td>
      <td width="10px">: </td>
      <td><?php echo $row['alamat'];?></td>
      <td></td>
  </tr>
  <tr>
      <td width="190px">Agama</td>
      <td width="10px">: </td>
      <td><?php echo $row['agama'];?></td>
      <td></td>
  </tr>
  <tr>
      <td width="190px">Nama Ayah</td>
      <td width="10px">: </td>
      <td><?php echo $row['nama_ayah'];?></td>
      <td></td>
  </tr>
  <tr>
      <td width="190px">Nama Ibu</td>
      <td width="10px">: </td>
      <td><?php echo $row['nama_ibu'];?></td>
      <td></td>
  </tr>
  <tr>
      <td width="190px">Alamat Orang Tua</td>
      <td width="10px">: </td>
      <td><?php echo $row['alamat_ortu'];?></td>
      <td></td>
  </tr>
  <tr>
      <td width="190px">Pekerjaan Ayah</td>
      <td width="10px">: </td>
      <td><?php echo $row['pekerjaan_ayah'];?></td>
      <td></td>
  </tr>
  <tr>
      <td width="190px">Pekerjaan Ibu</td>
      <td width="10px">: </td>
      <td><?php echo $row['pekerjaan_ibu'];?></td>
      <td></td>
  </tr>
  <tr>
      <td width="190px">No. HP/WA</td>
      <td width="10px">: </td>
      <td><?php echo $row['no_telp'];?></td>
      <td></td>
  </tr>


</tbody>
</div>
</table>


								</div>
							</div>
						</div>
					</div>
        <?php endif;?>


					
				
					
					
				</div>
			</div>





<form  action="<?php echo base_url().'dashboard/update'?>" method="post" method="post" enctype="multipart/form-data">
   <div class="form-group">
                          <div class="modal fade text-left" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                          aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-success white">
                                  <h4 class="modal-title" id="myModalLabel9" style="color: white;"> <b>FORM PENDAFTARAN SISWA BARU</b></h4>
                                  <button  type="button"  class="close"  data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" >&times;</span>
                                  </button>
                                </div>

    
                 <div class="modal-body">

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >NISN</label>
                                       <input value="<?php echo $row['nisn'];?>" required type="text" name="nisn" class="form-control" placeholder="NISN"> 
                                  </div>

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Status Pendaftaran *</label>
                                         <select class="form-control" name="status_pendaftaran" required>
                                            <option value="">--pilih status pendaftaran--</option>
                                            <option <?= ($row['status_pendaftaran']=="SISWA MASUK")?'selected':'';?> >SISWA MASUK</option>
                                            <option <?= ($row['status_pendaftaran']=="SISWA PINDAHAN")?'selected':'';?> >SISWA PINDAHAN</option>
                                        </select>
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Jalur Masuk *</label>
                                         <select class="form-control" name="jalur_masuk" required>
                                            <option value="">--pilih jalur masuk--</option>
                                              <option <?= ($row['jalur_masuk']=="Jalur Umum")?'selected':'';?> >Jalur Umum</option>
                                              <option <?= ($row['jalur_masuk']=="Jalur Prestasi")?'selected':'';?> >Jalur Prestasi</option>
                                              <option <?= ($row['jalur_masuk']=="Jalur Afirmasi")?'selected':'';?> >Jalur Afirmasi</option>
                                          </select>
                                  </div>

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Berkas Pendukung (mohon isi berkas pendukung jika memilih jalur prestasi atau afirmasi)</label>
                                       <input type="file" name="berkas_pendukung" class="form-control" placeholder="Berkas Pendukung"> 
                                  </div> 
                        

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Sekolah Asal *</label>
                                        <input value="<?php echo $row['sekolah_asal'];?>" required type="text" name="sekolah_asal" class="form-control" placeholder="Nama Sekolah Asal"> 
                                        <input value="<?php echo $row['id_siswa'];?>" required type="hidden" name="id_siswa" class="form-control" placeholder="Nama Sekolah Asal"> 
                                  </div> 


                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Siswa *</label>
                                        <input value="<?php echo $row['nama'];?>" required type="text" name="nama" class="form-control" placeholder="Nama Siswa"> 
                                  </div> 

                                   <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Jurusan *</label>
                                        <select class="form-control" name="id_jurusan" required>
                                          <option value="">--pilih Jurusan--</option>
                                          <?php foreach ($this->db->get("jurusan")->result_array() as $key):?>
                                          <option <?= ($row['id_jurusan']==$key['id_jurusan'])?'selected':'';?> value="<?php echo $key['id_jurusan'];?>"><?php echo $key['nama_jurusan'];?></option>
                                          <?php endforeach;?>
                                        </select>
                                  </div> 



                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Tempat Lahir *</label>
                                        <input value="<?php echo $row['tempat_lahir'];?>" required type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Tanggal Lahir *</label>
                                        <input value="<?php echo $row['tanggal_lahir'];?>" required type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir"> 
                                  </div> 
                                  
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Jenis kelamin *</label>
                                        <select class="form-control" name="jenis_kelamin" required>
                                          <option value="">--pilih jenis kelamin--</option>
                                          <option <?= ($row['jenis_kelamin']=="Laki-Laki")?'selected':'';?>>Laki-Laki</option>
                                          <option <?= ($row['jenis_kelamin']=="Perempuan")?'selected':'';?>>Perempuan</option>
                                        </select>
                                  </div> 
                                  
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Alamat *</label>
                                        <textarea class="form-control" name="alamat" required><?php echo $row['alamat'];?></textarea>
                                  </div> 
                                  
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Agama *</label>
                                         <select name="agama" class="form-control" >
                                            <option value="">-pilih agama-</option>
                                            <option <?= ($row['agama']=="Budha")?'selected':'';?> >Budha</option>
                                            <option <?= ($row['agama']=="Hindu")?'selected':'';?> >Hindu</option>
                                            <option <?= ($row['agama']=="Islam")?'selected':'';?> >Islam</option>
                                            <option <?= ($row['agama']=="Konghucu")?'selected':'';?> >Konghucu</option>
                                            <option <?= ($row['agama']=="Kristen Katolik")?'selected':'';?> >Kristen Katolik</option>
                                            <option <?= ($row['agama']=="Kristen Protestan")?'selected':'';?> >Kristen Protestan</option>
                                          </select> 
                                  </div> 



                                  
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Ayah *</label>
                                        <input value="<?php echo $row['nama_ayah'];?>" required type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Ibu *</label>
                                        <input value="<?php echo $row['nama_ibu'];?>" required type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Alamat Ortu *</label>
                                        <textarea class="form-control" name="alamat_ortu" required><?php echo $row['alamat_ortu'];?></textarea> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Pekerjaan Ayah *</label>
                                        <input value="<?php echo $row['pekerjaan_ayah'];?>" required type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Pekerjaan Ibu *</label>
                                        <input value="<?php echo $row['pekerjaan_ibu'];?>" required type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >No. HP/WA *</label>
                                        <input value="<?php echo $row['no_telp'];?>" required type="text" name="no_telp" class="form-control" placeholder="Nomor Telp"> 
                                  </div> 

                                   <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                    <div class="row">
                                      <div class="col-md-6">
                                        Nomor Akta *
                                        <input value="<?php echo $row['nomor_akta'];?>" required type="text" name="nomor_akta" class="form-control" placeholder="Nomor Akta">
                                      </div>
                                      <div class="col-md-6">
                                        File Akta 
                                        <input  type="file" name="file_akta" class="form-control" >
                                      </div>
                                    </div> 
                                  </div> 


                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                    <div class="row">
                                      <div class="col-md-6">
                                        Nomor Ijazah Sekolah Asal
                                        <input value="<?php echo $row['nomor_ijazah'];?>" type="text" name="nomor_ijazah" class="form-control" placeholder="Nomor Ijazah / Sekolah Asal">
                                      </div>
                                      <div class="col-md-6">
                                        File Ijazah Sekolah Asal
                                        <input  type="file" name="file_ijazah" class="form-control" >
                                      </div>
                                    </div> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                    <div class="row">
                                      <div class="col-md-6">
                                        Nomor Kartu Keluarga *
                                        <input value="<?php echo $row['nomor_kartu_keluarga'];?>" required type="text" name="nomor_kartu_keluarga" class="form-control" placeholder="Nomor Kartu Keluarga">
                                      </div>
                                      <div class="col-md-6">
                                        File Kartu Keluarga 
                                        <input  type="file" name="file_kartu_keluarga" class="form-control" >
                                      </div>
                                    </div> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Rata-Rata Nilai *</label>
                                        <input value="<?php echo $row['rata_rata_nilai'];?>" required type="number" name="rata_rata_nilai" value="0.00" step="0.01" class="form-control"> 
                                  </div> 

                                  

                                
                  

                 </div>
                <div class="modal-footer">
                                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal" aria-label="Close">TUTUP</button>
                                  <button type="submit" class="btn btn-info">SIMPAN</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
   </form>


<script src="<?php echo base_url();?>assets/alert/sweetalert2@9"></script>
<?php if($this->session->flashdata('berhasil_edit') == TRUE): ?>
 <script type="text/javascript">
   Swal.fire({
  icon: 'success',
  text: 'Pendaftaran siswa berhasil di perbaharui',
})
 </script>
<?php endif; ?>