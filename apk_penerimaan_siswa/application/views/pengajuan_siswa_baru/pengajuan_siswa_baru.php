
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">PENGAJUAN SISWA BARU</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"></h4>
									 <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"></i> TAMBAH PENGAJUAN SISWA BARU</button>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
													<tr>
                                                        <th>No.Pendaftaran</th>
                                                        <th>NISN</th>
                                                        <th>Nama Siswa</th>
                                                        <th>Rata-Rata Nilai</th>
                                                        <th>No Telp</th>
                                                        <th>Nomor Akta</th>
                                                        <th>File Akta</th>
                                                        <th>Nomor Ijazah Sekolah Asal</th>
                                                        <th>File Ijazah Sekolah Asal</th>
                                                        <th>Nomor Kartu Keluarga</th>
                                                        <th>File Kartu Keluarga</th>
                                                        <th>Berkas Pendukung</th>
                                                        <th>Tanggal Pengajuan</th>
                                                        <th>Status Pengajuan</th>
                                                        <th>Keterangan Pengajuan</th>
                                                        <th style="text-align: center;">Action</th>
													</tr>
											</thead>
											<tfoot>
													<tr>
                                                        <th>No.Pendaftaran</th>
                                                        <th>NISN</th>
                                                        <th>Nama Siswa</th>
                                                        <th>Rata-Rata Nilai</th>
                                                        <th>No Telp</th>
                                                        <th>Nomor Akta</th>
                                                        <th>File Akta</th>
                                                        <th>Nomor Ijazah Sekolah Asal</th>
                                                        <th>File Ijazah Sekolah Asal</th>
                                                        <th>Nomor Kartu Keluarga</th>
                                                        <th>File Kartu Keluarga</th>
                                                        <th>Berkas Pendukung</th>
                                                        <th>Tanggal Pengajuan</th>
                                                        <th>Status Pengajuan</th>
                                                        <th>Keterangan Pengajuan</th>
                                                        <th style="text-align: center;">Action</th>
													</tr>
											</tfoot>
											<tbody>
												<?php $no=1; foreach ($data_pengajuan_siswa_baru->result_array() as $i) :
		                                            $id_pengajuan_siswa_baru=$i['id_pengajuan_siswa_baru'];
                                                $id_kelas=$i['id_kelas'];
                                                $id_siswa=$i['id_siswa'];

		                                          ?>
												 <tr>
                                              
	                                              <td><?php echo $i['id_siswa'];?></td> 
                                                <td><?php echo $i['nisn'];?></td> 
                                                <td><?php echo $i['nama'];?></td> 
                                                <td><?php echo $i['rata_rata_nilai'];?></td> 
                                                <td><?php echo $i['no_telp'];?></td>
                                                <td><?php echo $i['nomor_akta'];?></td> 
                                                <td>
                                                  <?php if(!empty($i['file_akta'])):?>
                                                 <a target="_blank" style="margin: 2px;" type="button" href="<?php echo base_url();?>assets/image/<?php echo $i['file_akta'];?>" class="btn btn-success mdi mdi-pencil btn-sm"><i class="fa fa-eye"></i> LIHAT</a>
                                                  <?php endif;?>
                                               </td>
                                                <td><?php echo $i['nomor_ijazah'];?></td> 
                                                <td>
                                                  <?php if(!empty($i['file_ijazah'])):?>
                                                 <a target="_blank" style="margin: 2px;" type="button" href="<?php echo base_url();?>assets/image/<?php echo $i['file_ijazah'];?>" class="btn btn-success mdi mdi-pencil btn-sm"><i class="fa fa-eye"></i> LIHAT</a>
                                                  <?php endif;?>
                                               </td>
                                                <td><?php echo $i['nomor_kartu_keluarga'];?></td> 
                                                <td>
                                                  <?php if(!empty($i['file_kartu_keluarga'])):?>
                                                 <a target="_blank" style="margin: 2px;" type="button" href="<?php echo base_url();?>assets/image/<?php echo $i['file_kartu_keluarga'];?>" class="btn btn-success mdi mdi-pencil btn-sm"><i class="fa fa-eye"></i> LIHAT</a>
                                                  <?php endif;?>
                                               </td> 
                                               <td>
                                                  <?php if(!empty($i['berkas_pendukung'])):?>
                                                 <a target="_blank" style="margin: 2px;" type="button" href="<?php echo base_url();?>assets/image/<?php echo $i['berkas_pendukung'];?>" class="btn btn-success mdi mdi-pencil btn-sm"><i class="fa fa-eye"></i> LIHAT</a>
                                                  <?php endif;?>
                                               </td> 
                                                <td><?php echo tgl_indo($i['tanggal_pengajuan']);?></td> 
                                                <td <?php if($i['status_pengajuan']=="DITERIMA"):?>style="color:green;"
                                                  <?php elseif($i['status_pengajuan']=="DITOLAK"):?>style="color:red;"
                                                  <?php else:?>style="color:orange;"<?php endif;?> ><?php echo $i['status_pengajuan'];?></td> 
                                                <td><?php echo $i['keterangan_pengajuan'];?></td> 
	                                           
	                                              <td style="text-align: right;">
	                                                <div class="btn-group" role="group" aria-label="Basic example">

	                                              <button style="margin: 2px;" type="button"  class="btn btn-info mdi mdi-pencil btn-sm" data-toggle="modal" data-target="#ModalUpdate<?php echo $id_pengajuan_siswa_baru;?>"><i class="fa fa-edit"></i> EDIT</button>

	                                              <button style="margin: 2px;" type="button"  class="btn btn-danger mdi mdi-pencil btn-sm" data-toggle="modal" data-target="#ModalHapus<?php echo $id_pengajuan_siswa_baru;?>"><i class="fa fa-trash"></i> DELETE</button>
	                                                
	                                                </div>
	                                              </td>
	                                            </tr>
												<?php endforeach;?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				
					
					
				</div>
			</div>

<!--Tambah Data-->
       <form  action="<?php echo base_url().'pengajuan_siswa_baru/simpan_pengajuan_siswa_baru'?>" method="post" method="post" enctype="multipart/form-data">
   <div class="form-group">
                          <div class="modal fade text-left" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                          aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-success white">
                                  <h4 class="modal-title" id="myModalLabel9" style="color: white;"> <b>TAMBAH PENGAJUAN SISWA BARU</b></h4>
                                  <button  type="button"  class="close"  data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" >&times;</span>
                                  </button>
                                </div>

    
                 <div class="modal-body">


                                   <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Siswa *</label>
                                        <select class="form-control" name="id_siswa" required>
                                          <option value="">--pilih siswa--</option>
                                          <?php foreach ($this->db->query("SELECT * FROM siswa where nama!=''")->result_array() as $key):?>
                                            <option value="<?php echo $key['id_siswa'];?>"><?php echo $key['id_siswa'];?> - <?php echo $key['nama'];?></option>
                                          <?php endforeach;?>
                                        </select>
                                  </div> 
                        

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Tanggal Pengajuan *</label>
                                        <input required type="date" name="tanggal_pengajuan" class="form-control" placeholder="Tanggal Pengajuan"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Status Pengajuan *</label>
                                        <select class="form-control" name="status_pengajuan" required>
                                          <option value="">--pilih status pengajuan--</option>
                                          <option>DITERIMA</option>
                                          <option>DITOLAK</option>
                                        </select>
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Keterangan </label>
                                        <textarea class="form-control" name="keterangan_pengajuan"></textarea>
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






<!--Update Data-->
  <?php foreach ($data_pengajuan_siswa_baru->result_array() as $i) :
                                            $id_pengajuan_siswa_baru=$i['id_pengajuan_siswa_baru'];
                                          ?>
       <form  action="<?php echo base_url().'pengajuan_siswa_baru/update_pengajuan_siswa_baru'?>" method="post" enctype="multipart/form-data">
   <div class="form-group">
                          <div class="modal fade text-left" id="ModalUpdate<?php echo $id_pengajuan_siswa_baru;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                          aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-info white">
                                  <h4 class="modal-title" id="myModalLabel9" style="color: white;"> <b>UPDATE PENGAJUAN SISWA BARU</b></h4>
                                  <button  type="button"  class="close"  data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" >&times;</span>
                                  </button>
                                </div>

    
                 <div class="modal-body">
                     
                       <input type="hidden" name="id_pengajuan_siswa_baru" value="<?php echo $id_pengajuan_siswa_baru;?>">


                               
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Siswa *</label>
                                        <select class="form-control" name="id_siswa" required>
                                          <option value="">--pilih siswa--</option>
                                          <?php foreach ($this->db->query("SELECT * FROM siswa where nama!=''")->result_array() as $key):?>
                                            <option <?= ($i['id_siswa']==$key['id_siswa'])?'selected':'';?> value="<?php echo $key['id_siswa'];?>"><?php echo $key['id_siswa'];?> - <?php echo $key['nama'];?></option>
                                          <?php endforeach;?>
                                        </select>
                                  </div> 
                        

                                 <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Tanggal Pengajuan *</label>
                                        <input value="<?php echo $i['tanggal_pengajuan'];?>" required type="date" name="tanggal_pengajuan" class="form-control" placeholder="Tanggal Pengajuan"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Status Pengajuan *</label>
                                        <select class="form-control" name="status_pengajuan" required>
                                          <option value="">--pilih status pengajuan--</option>
                                          <option <?= ($i['status_pengajuan']=="DITERIMA")?'selected':'';?> >DITERIMA</option>
                                          <option <?= ($i['status_pengajuan']=="DITOLAK")?'selected':'';?> >DITOLAK</option>
                                        </select>
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Keterangan </label>
                                        <textarea class="form-control" name="keterangan_pengajuan"><?php echo $i['keterangan_pengajuan'];?></textarea>
                                  </div> 
                            
                  

                 </div>
                <div class="modal-footer">
                                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal" aria-label="Close">TUTUP</button>
                                  <button type="submit" class="btn btn-success">UPDATE</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
   </form>
 <?php endforeach;?>



   <?php foreach ($data_pengajuan_siswa_baru->result_array() as $i) :
                                            $id_pengajuan_siswa_baru=$i['id_pengajuan_siswa_baru'];
                                          ?>
       <form  action="<?php echo base_url().'pengajuan_siswa_baru/hapus_pengajuan_siswa_baru'?>" method="post" enctype="multipart/form-data">
   <div class="form-group">
                          <div class="modal fade text-left" id="ModalHapus<?php echo $id_pengajuan_siswa_baru;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                          aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-danger white">
                                  <h4 class="modal-title" id="myModalLabel9" style="color: white;"> <b>HAPUS PENGAJUAN SISWA BARU</b></h4>
                                  <button  type="button"  class="close"  data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" >&times;</span>
                                  </button>
                                </div>

    
                 <div class="modal-body">
                     
                       <input type="hidden" name="kode" value="<?php echo $id_pengajuan_siswa_baru;?>">
                         <span>Apakah Anda yakin ingin menghapus data ini?</span>
                  

                 </div>
                <div class="modal-footer">
                                  <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal" aria-label="Close">TUTUP</button>
                                  <button type="submit" class="btn btn-danger">HAPUS</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
   </form>
 <?php endforeach;?>



  



<script type="text/javascript">
  $().DataTable();
</script>


<script src="<?php echo base_url();?>assets/alert/sweetalert2@9"></script>
<?php if($this->session->flashdata('berhasil_simpan') == TRUE): ?>
 <script type="text/javascript">
   Swal.fire({
  icon: 'success',
  text: 'Pengajuan Siswa Baru Berhasil di SIMPAN',
})
 </script>
<?php endif; ?>

<?php if($this->session->flashdata('berhasil_edit') == TRUE): ?>
 <script type="text/javascript">
    Swal.fire({
  icon: 'success',
  text: 'Pengajuan Siswa Baru Berhasil di EDIT'
})
 </script>
<?php endif; ?>

<?php if($this->session->flashdata('berhasil_hapus') == TRUE): ?>
 <script type="text/javascript">
     Swal.fire({
  icon: 'success',
  text: 'Pengajuan Siswa Baru Behasil di HAPUS'
})
 </script>
<?php endif; ?>


<?php if($this->session->flashdata('gagal_up') == TRUE): ?>
 <script type="text/javascript">
     Swal.fire({
  icon: 'error',
  text: 'Format File Gambar SALAH'
})
 </script>
<?php endif; ?>

