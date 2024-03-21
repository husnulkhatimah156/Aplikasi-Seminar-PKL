
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold"><?php if($this->session->userdata("level")=="Orang Tua / Wali Siswa"):?>KONFIRMASI<?php else:?>HISTORY<?php endif;?> PEMBAYARAN</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="page-inner mt--5">
					<div class="row">
						<div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                      NOMINAL TRANSFER UNTUK SISWA BARU DAN PINDAHAN ADALAH SENILAI : <span style="color:green;">RP 250.000</span>,  UNTUK PEMBAYARAN PERANGKAT SEKOLAH : BAJU OLAHRAGA, BAJU ROMPI, TOPI, DASI.
                    </div>
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"></h4>
									 <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"></i> <?php if($this->session->userdata("level")=="Orang Tua / Wali Siswa"):?>KONFIRMASI<?php else:?>TAMBAH HISTORY<?php endif;?> PEMBAYARAN</button>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
													<tr>
														<th style="flex: 0 0 auto; min-width: 2em;">No.</th>
                                                        <th>NIS</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Tanggal Transfer</th>
                                                        <th>Nominal Transfer</th>
                                                        <th>Bukti Transfer</th>
                                                         <?php if($this->session->userdata("level")!="Orang Tua / Wali Siswa"):?>
                                                        <th style="text-align: center;">Action</th>
                                              <?php endif;?>
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
                                                  <td>
                                                  <?php if(!empty($i['bukti_transfer'])):?>
                                                 <a target="_blank" style="margin: 2px;" type="button" href="<?php echo base_url();?>assets/image/<?php echo $i['bukti_transfer'];?>" class="btn btn-success mdi mdi-pencil btn-sm"><i class="fa fa-eye"></i> LIHAT</a>
                                                  <?php endif;?>
                                               </td>  
	                                           
                                             <?php if($this->session->userdata("level")!="Orang Tua / Wali Siswa"):?>
	                                              <td style="text-align: right;">
	                                                <div class="btn-group" role="group" aria-label="Basic example">

	                                              <button style="margin: 2px;" type="button"  class="btn btn-info mdi mdi-pencil btn-sm" data-toggle="modal" data-target="#ModalUpdate<?php echo $id_history_pembayaran;?>"><i class="fa fa-edit"></i> EDIT</button>

	                                              <button style="margin: 2px;" type="button"  class="btn btn-danger mdi mdi-pencil btn-sm" data-toggle="modal" data-target="#ModalHapus<?php echo $id_history_pembayaran;?>"><i class="fa fa-trash"></i> DELETE</button>
	                                                
	                                                </div>
	                                              </td>
                                              <?php endif;?>
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
       <form  action="<?php echo base_url().'history_pembayaran/simpan_history_pembayaran'?>" method="post" method="post" enctype="multipart/form-data">
   <div class="form-group">
                          <div class="modal fade text-left" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                          aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-success white">
                                  <h4 class="modal-title" id="myModalLabel9" style="color: white;"> <b><?php if($this->session->userdata("level")=="Orang Tua / Wali Siswa"):?>KONFIRMASI<?php else:?>TAMBAH HISTORY<?php endif;?> PEMBAYARAN</b></h4>
                                  <button  type="button"  class="close"  data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" >&times;</span>
                                  </button>
                                </div>

    
                 <div class="modal-body">

                  <?php if($this->session->userdata("level")=="Orang Tua / Wali Siswa"):
                    $id_siswa321=$this->session->userdata('id_pengguna2');
                      $row=$this->db->query("SELECT * FROM siswa where id_siswa='$id_siswa321'")->row_array();
                    ?>

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >NIS *</label>
                                        <input value="<?php echo $row['id_siswa'];?>" type="text" readonly name="id_siswa" class="form-control" placeholder="NIS" required> 
                                  </div> 

                                    <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Siswa *</label>
                                        <input value="<?php echo $row['nama'];?>" type="text" readonly  class="form-control"  > 
                                  </div> 
                  <?php else:?>
                            
                                 <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Siswa *</label>
                                        <select class="form-control" name="id_siswa" required>
                                          <option value="">--pilih siswa--</option>
                                          <?php foreach ($this->db->query("SELECT * FROM siswa where nama!=''")->result_array() as $key):?>
                                            <option value="<?php echo $key['id_siswa'];?>"><?php echo $key['id_siswa'];?> - <?php echo $key['nama'];?></option>
                                          <?php endforeach;?>
                                        </select>
                                  </div> 

                  <?php endif;?>

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Tanggal Transfer *</label>
                                        <input type="date" name="tanggal_transfer" class="form-control" placeholder="Tanggal Transfer" required> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nominal Transfer *</label>
                                        <input value="250.000" type="text" name="nominal_transfer" class="form-control uang" placeholder="Nominal Transfer" required> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Bukti Transfer * (jpg|png|jpeg)</label>
                                        <input type="file" name="bukti_transfer" class="form-control" placeholder="Bukti Transfer" required> 
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
  <?php foreach ($data_history_pembayaran->result_array() as $i) :
                                            $id_history_pembayaran=$i['id_history_pembayaran'];
                                          ?>
       <form  action="<?php echo base_url().'history_pembayaran/update_history_pembayaran'?>" method="post" enctype="multipart/form-data">
   <div class="form-group">
                          <div class="modal fade text-left" id="ModalUpdate<?php echo $id_history_pembayaran;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                          aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-info white">
                                  <h4 class="modal-title" id="myModalLabel9" style="color: white;"> <b>UPDATE HISTORY PEMBAYARAN</b></h4>
                                  <button  type="button"  class="close"  data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" >&times;</span>
                                  </button>
                                </div>

    
                 <div class="modal-body">
                     
                       <input type="hidden" name="id_history_pembayaran" value="<?php echo $id_history_pembayaran;?>">


                               

                                 
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
                                        <label class="form-label" >Tanggal Transfer *</label>
                                        <input value="<?php echo $i['tanggal_transfer'];?>" type="date" name="tanggal_transfer" class="form-control" placeholder="Tanggal Transfer" required> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nominal Transfer *</label>
                                        <input value="<?php echo $i['nominal_transfer'];?>" type="text" name="nominal_transfer" class="form-control uang" placeholder="Nominal Transfer" required> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Bukti Transfer </label>
                                        <input  type="file" name="bukti_transfer" class="form-control" placeholder="Bukti Transfer"> 
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



   <?php foreach ($data_history_pembayaran->result_array() as $i) :
                                            $id_history_pembayaran=$i['id_history_pembayaran'];
                                          ?>
       <form  action="<?php echo base_url().'history_pembayaran/hapus_history_pembayaran'?>" method="post" enctype="multipart/form-data">
   <div class="form-group">
                          <div class="modal fade text-left" id="ModalHapus<?php echo $id_history_pembayaran;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                          aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-danger white">
                                  <h4 class="modal-title" id="myModalLabel9" style="color: white;"> <b>HAPUS HISTORY PEMBAYARAN</b></h4>
                                  <button  type="button"  class="close"  data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" >&times;</span>
                                  </button>
                                </div>

    
                 <div class="modal-body">
                     
                       <input type="hidden" name="kode" value="<?php echo $id_history_pembayaran;?>">
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
  text: 'HISTORY PEMBAYARAN Berhasil di SIMPAN',
})
 </script>
<?php endif; ?>

<?php if($this->session->flashdata('berhasil_edit') == TRUE): ?>
 <script type="text/javascript">
    Swal.fire({
  icon: 'success',
  text: 'HISTORY PEMBAYARAN Berhasil di EDIT'
})
 </script>
<?php endif; ?>

<?php if($this->session->flashdata('berhasil_hapus') == TRUE): ?>
 <script type="text/javascript">
     Swal.fire({
  icon: 'success',
  text: 'HISTORY PEMBAYARAN Berhasil di HAPUS'
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

