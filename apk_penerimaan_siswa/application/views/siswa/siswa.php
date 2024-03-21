
		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">SISWA</h2>
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
									 <!-- <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"></i> TAMBAH SISWA</button> -->
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
													<tr>
														<th style="flex: 0 0 auto; min-width: 2em;">No.</th>
                                                        <th>No.Pendaftaran</th>
                                                        <th>Status Pendaftaran</th>
                                                        <th>Sekolah Asal</th>
                                                        <th>NISN</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Tempat Lahir</th>
                                                        <th>Tanggal Lahir</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Agama</th>
                                                        <th>Alamat</th>
                                                        <th>Kelas</th>
                                                        <th>Semester</th>
                                                        <th>Jurusan</th>
                                                        <th>Nama Ayah</th>
                                                        <th>Nama Ibu</th>
                                                        <th>Alamat Ortu</th>
                                                        <th>Pekerjaan Ayah</th>
                                                        <th>Pekerjaan Ibu</th>
                                                        <th>No Telp</th>
                                                        <th>Nomor Akta</th>
                                                        <th>File Akta</th>
                                                        <th>Nomor Ijazah Sekolah Asal</th>
                                                        <th>File Ijazah Sekolah Asal</th>
                                                        <th>Nomor Kartu Keluarga</th>
                                                        <th>File Kartu Keluarga</th>
                                                        <th>Berkas Pendukung</th>
                                                        <th style="flex: 0 0 auto; min-width: 10em;">Tanggal Jam Mendaftar</th>
                                                        <th style="text-align: center;">Action</th>
													</tr>
											</thead>
											<tfoot>
													<tr>
														<th style="flex: 0 0 auto; min-width: 2em;">No.</th>
                                                        <th>No.Pendaftaran</th>
                                                        <th>Status Pendaftaran</th>
                                                        <th>Sekolah Asal</th>
                                                        <th>NISN</th>
                                                        <th>Nama Lengkap</th>
                                                        <th>Tempat Lahir</th>
                                                        <th>Tanggal Lahir</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Agama</th>
                                                        <th>Alamat</th>
                                                        <th>Kelas</th>
                                                        <th>Semester</th>
                                                         <th>Jurusan</th>
                                                        <th>Nama Ayah</th>
                                                        <th>Nama Ibu</th>
                                                        <th>Alamat Ortu</th>
                                                        <th>Pekerjaan Ayah</th>
                                                        <th>Pekerjaan Ibu</th>
                                                        <th>No Telp</th>
                                                        <th>Nomor Akta</th>
                                                        <th>File Akta</th>
                                                        <th>Nomor Ijazah Sekolah Asal</th>
                                                        <th>File Ijazah Sekolah Asal</th>
                                                        <th>Nomor Kartu Keluarga</th>
                                                        <th>File Kartu Keluarga</th>
                                                        <th style="flex: 0 0 auto; min-width: 10em;">Tanggal Jam Mendaftar</th>
                                                        <th style="text-align: center;">Action</th>
													</tr>
											</tfoot>
											<tbody>
												<?php $no=1; foreach ($data_siswa->result_array() as $i) :
		                                            $id_siswa=$i['id_siswa'];
                                                $id_kelas=$i['id_kelas'];
                                                $id_jurusan=$i['id_jurusan'];
                                                $data_kelas=$this->db->query("SELECT * FROM kelas,semester where kelas.id_semester=semester.id_semester AND kelas.id_kelas='$id_kelas'")->row_array();

                                                 $data_jurusan=$this->db->query("SELECT * FROM jurusan where id_jurusan='$id_jurusan'")->row_array();
		                                          ?>
												 <tr>
                                              
	                                              <td style="flex: 0 0 auto; min-width: 2em;"><?php echo $no++;?></td>
                                                <td><?php echo $i['id_siswa'];?></td> 
                                                <td><?php echo $i['status_pendaftaran'];?></td> 
                                                <td><?php echo $i['sekolah_asal'];?></td> 
                                                <td><?php echo $i['nisn'];?></td> 
                                                <td><?php echo $i['nama'];?></td> 
                                                <td><?php echo $i['tempat_lahir'];?></td> 
                                                <td><?php echo tgl_indo($i['tanggal_lahir']);?></td> 
                                                <td><?php echo $i['jenis_kelamin'];?></td> 
                                                <td><?php echo $i['alamat'];?></td> 
                                                <td><?php echo $i['agama'];?></td> 
                                                <td><?php if($data_kelas){ echo $data_kelas['nama_kelas']; }?></td> 
	                                              <td><?php if($data_kelas){ echo $data_kelas['nama_semeser']; ?> - <?php echo $data_kelas['tahun_ajaran']; }?></td>
                                                 <td><?php if($data_jurusan){ echo $data_jurusan['nama_jurusan']; }?></td> 
                                                <td><?php echo $i['nama_ayah'];?></td>
                                                <td><?php echo $i['nama_ibu'];?></td>
                                                <td><?php echo $i['alamat_ortu'];?></td>
                                                <td><?php echo $i['pekerjaan_ayah'];?></td>
                                                <td><?php echo $i['pekerjaan_ibu'];?></td>
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
                                               <td><?php echo tgl_indo(date("Y-m-d",strtotime($i["tanggal_jam_mendaftar"])));?>, <?php echo date("H:i",strtotime($i["tanggal_jam_mendaftar"]));?></td>

	                                              <td style="text-align: right;">
	                                                <div class="btn-group" role="group" aria-label="Basic example">

                                                <a target="_blank" style="margin: 2px;" type="button" class="btn btn-success mdi mdi-pencil btn-sm" href="<?php echo base_url();?>siswa/cetak2/<?php echo $i['id_siswa'];?>"> CETAK</a>

	                                              <button style="margin: 2px;" type="button"  class="btn btn-info mdi mdi-pencil btn-sm" data-toggle="modal" data-target="#ModalUpdate<?php echo $id_siswa;?>"><i class="fa fa-edit"></i> EDIT</button>

	                                              <button style="margin: 2px;" type="button"  class="btn btn-danger mdi mdi-pencil btn-sm" data-toggle="modal" data-target="#ModalHapus<?php echo $id_siswa;?>"><i class="fa fa-trash"></i> DELETE</button>
	                                                
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
       <form  action="<?php echo base_url().'siswa/simpan_siswa'?>" method="post" method="post" enctype="multipart/form-data">
   <div class="form-group">
                          <div class="modal fade text-left" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                          aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-success white">
                                  <h4 class="modal-title" id="myModalLabel9" style="color: white;"> <b>TAMBAH siswa</b></h4>
                                  <button  type="button"  class="close"  data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" >&times;</span>
                                  </button>
                                </div>

    
                 <div class="modal-body">

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Status Pendaftaran *</label>
                                        < <select class="form-control" name="status_pendaftaran" required>
                                            <option value="">--pilih status pendaftaran--</option>
                                              <option>SISWA MASUK</option>
                                              <option>SISWA PINDAHAN</option>
                                          </select>
                                  </div> 
                        

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Nama Sekolah Asal *</label>
                                        <input required type="text" name="sekolah_asal" class="form-control" placeholder="Nama Nama Sekolah Asal"> 
                                  </div> 


                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Siswa *</label>
                                        <input required type="text" name="nama" class="form-control" placeholder="Nama Siswa"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Tempat Lahir *</label>
                                        <input required type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Tanggal Lahir *</label>
                                        <input required type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir"> 
                                  </div> 
                                  
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Jenis kelamin *</label>
                                        <select class="form-control" name="jenis_kelamin" required>
                                          <option value="">--pilih jenis kelamin--</option>
                                          <option>Laki-Laki</option>
                                          <option>Perempuan</option>
                                        </select>
                                  </div> 
                                  
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Alamat *</label>
                                        <textarea class="form-control" name="alamat" required></textarea>
                                  </div> 
                                  
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Agama *</label>
                                         <select name="agama" class="form-control" >
                                            <option value="">-pilih agama-</option>
                                            <option >Budha</option>
                                            <option >Hindu</option>
                                            <option >Islam</option>
                                            <option >Konghucu</option>
                                            <option >Kristen Katolik</option>
                                            <option >Kristen Protestan</option>
                                          </select> 
                                  </div> 


                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Kelas </label>
                                        <select class="form-control" name="id_kelas" >
                                          <option value="">--pilih kelas--</option>
                                          <?php foreach ($this->db->query("SELECT * FROM kelas,semester where kelas.id_semester=semester.id_semester")->result_array() as $key):?>
                                            <option value="<?php echo $key['id_kelas'];?>"><?php echo $key['nama_kelas'];?> - <?php echo $key['nama_semeser'];?> - <?php echo $key['tahun_ajaran'];?></option>
                                          <?php endforeach;?>
                                        </select>
                                  </div> 


                                  
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Ayah *</label>
                                        <input required type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Ibu *</label>
                                        <input required type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Alamat Ortu *</label>
                                        <textarea class="form-control" name="alamat_ortu" required></textarea> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Pekerjaan Ayah *</label>
                                        <input required type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Pekerjaan Ibu *</label>
                                        <input required type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nomor Telp *</label>
                                        <input required type="text" name="no_telp" class="form-control" placeholder="Nomor Telp"> 
                                  </div> 

                                   <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                    <div class="row">
                                      <div class="col-md-6">
                                        Nomor Akta *
                                        <input required type="text" name="nomor_akta" class="form-control" placeholder="Nomor Akta">
                                      </div>
                                      <div class="col-md-6">
                                        File Akta *
                                        <input required type="file" name="file_akta" class="form-control" >
                                      </div>
                                    </div> 
                                  </div> 


                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                    <div class="row">
                                      <div class="col-md-6">
                                        Nomor Ijazah Sekolah Asal
                                        <input  type="text" name="nomor_ijazah" class="form-control" placeholder="Nomor Ijazah Sekolah Asal">
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
                                        <input required type="text" name="nomor_kartu_keluarga" class="form-control" placeholder="Nomor Kartu Keluarga">
                                      </div>
                                      <div class="col-md-6">
                                        File Kartu Keluarga *
                                        <input required type="file" name="file_kartu_keluarga" class="form-control" >
                                      </div>
                                    </div> 
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
  <?php foreach ($data_siswa->result_array() as $i) :
                                            $id_siswa=$i['id_siswa'];
                                          ?>
       <form  action="<?php echo base_url().'siswa/update_siswa'?>" method="post" enctype="multipart/form-data">
   <div class="form-group">
                          <div class="modal fade text-left" id="ModalUpdate<?php echo $id_siswa;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                          aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-info white">
                                  <h4 class="modal-title" id="myModalLabel9" style="color: white;"> <b>UPDATE siswa</b></h4>
                                  <button  type="button"  class="close"  data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" >&times;</span>
                                  </button>
                                </div>

    
                 <div class="modal-body">
                     
                       <input type="hidden" name="id_siswa" value="<?php echo $id_siswa;?>">


                               
                                    <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >NISN</label>
                                       <input value="<?php echo $i['nisn'];?>" required type="text" name="nisn" class="form-control" placeholder="NISN"> 
                                  </div>

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Status Pendaftaran *</label>
                                         <select class="form-control" name="status_pendaftaran" required>
                                            <option value="">--pilih status pendaftaran--</option>
                                            <option <?= ($i['status_pendaftaran']=="SISWA MASUK")?'selected':'';?> >SISWA MASUK</option>
                                            <option <?= ($i['status_pendaftaran']=="SISWA PINDAHAN")?'selected':'';?> >SISWA PINDAHAN</option>
                                        </select>
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Jalur Masuk *</label>
                                         <select class="form-control" name="jalur_masuk" required>
                                            <option value="">--pilih jalur masuk--</option>
                                              <option <?= ($i['jalur_masuk']=="Jalur Umum")?'selected':'';?> >Jalur Umum</option>
                                              <option <?= ($i['jalur_masuk']=="Jalur Prestasi")?'selected':'';?> >Jalur Prestasi</option>
                                              <option <?= ($i['jalur_masuk']=="Jalur Afirmasi")?'selected':'';?> >Jalur Afirmasi</option>
                                          </select>
                                  </div>

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Berkas Pendukung (mohon isi berkas pendukung jika memilih jalur prestasi atau afirmasi)</label>
                                       <input type="file" name="berkas_pendukung" class="form-control" placeholder="Berkas Pendukung"> 
                                  </div> 
                        

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Sekolah Asal *</label>
                                        <input value="<?php echo $i['sekolah_asal'];?>" required type="text" name="sekolah_asal" class="form-control" placeholder="Nama Sekolah Asal"> 
                                        <input value="<?php echo $i['id_siswa'];?>" required type="hidden" name="id_siswa" class="form-control" placeholder="Nama Sekolah Asal"> 
                                  </div> 


                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Siswa *</label>
                                        <input value="<?php echo $i['nama'];?>" required type="text" name="nama" class="form-control" placeholder="Nama Siswa"> 
                                  </div> 

                                   <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Jurusan *</label>
                                        <select class="form-control" name="id_jurusan" required>
                                          <option value="">--pilih Jurusan--</option>
                                          <?php foreach ($this->db->get("jurusan")->result_array() as $key):?>
                                          <option <?= ($i['id_jurusan']==$key['id_jurusan'])?'selected':'';?> value="<?php echo $key['id_jurusan'];?>"><?php echo $key['nama_jurusan'];?></option>
                                          <?php endforeach;?>
                                        </select>
                                  </div> 


                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Tempat Lahir *</label>
                                        <input value="<?php echo $row['tempat_lahir'];?>" required type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir"> 
                                  </div> 


                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Tanggal Lahir *</label>
                                        <input value="<?php echo $i['tanggal_lahir'];?>" required type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir"> 
                                  </div> 
                                  
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Jenis kelamin *</label>
                                        <select class="form-control" name="jenis_kelamin" required>
                                          <option value="">--pilih jenis kelamin--</option>
                                          <option <?= ($i['jenis_kelamin']=="Laki-Laki")?'selected':'';?> >Laki-Laki</option>
                                          <option <?= ($i['jenis_kelamin']=="Perempuan")?'selected':'';?> >Perempuan</option>
                                        </select>
                                  </div> 
                                  
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Alamat *</label>
                                        <textarea class="form-control" name="alamat" required><?php echo $i['alamat'];?></textarea>
                                  </div> 
                                  
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Agama *</label>
                                         <select name="agama" class="form-control" >
                                            <option value="">-pilih agama-</option>
                                            <option <?= ($i['agama']=="Budha")?'selected':'';?> >Budha</option>
                                            <option <?= ($i['agama']=="Hindu")?'selected':'';?> >Hindu</option>
                                            <option <?= ($i['agama']=="Islam")?'selected':'';?> >Islam</option>
                                            <option <?= ($i['agama']=="Konghucu")?'selected':'';?> >Konghucu</option>
                                            <option <?= ($i['agama']=="Kristen Katolik")?'selected':'';?> >Kristen Katolik</option>
                                            <option <?= ($i['agama']=="Kristen Protestan")?'selected':'';?> >Kristen Protestan</option>
                                          </select> 
                                  </div> 


                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Kelas </label>
                                        <select class="form-control" name="id_kelas" >
                                          <option value="">--pilih kelas--</option>
                                          <?php foreach ($this->db->query("SELECT * FROM kelas,semester where kelas.id_semester=semester.id_semester")->result_array() as $key):?>
                                            <option <?= ($i['id_kelas']==$key['id_kelas'])?'selected':'';?> value="<?php echo $key['id_kelas'];?>"><?php echo $key['nama_kelas'];?> - <?php echo $key['nama_semeser'];?> - <?php echo $key['tahun_ajaran'];?></option>
                                          <?php endforeach;?>
                                        </select>
                                  </div> 


                                  
                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Ayah *</label>
                                        <input value="<?php echo $i['nama_ayah'];?>" required type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nama Ibu *</label>
                                        <input value="<?php echo $i['nama_ibu'];?>" required type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Alamat Ortu *</label>
                                        <textarea class="form-control" name="alamat_ortu" required><?php echo $i['alamat_ortu'];?></textarea> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Pekerjaan Ayah *</label>
                                        <input value="<?php echo $i['pekerjaan_ayah'];?>" required type="text" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Pekerjaan Ibu *</label>
                                        <input value="<?php echo $i['pekerjaan_ibu'];?>" required type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                        <label class="form-label" >Nomor Telp *</label>
                                        <input value="<?php echo $i['no_telp'];?>" required type="text" name="no_telp" class="form-control" placeholder="Nomor Telp"> 
                                  </div> 

                                  <div class="col-12 col-md-12" style="margin-bottom: 12px;">
                                    <div class="row">
                                      <div class="col-md-6">
                                        Nomor Akta *
                                        <input value="<?php echo $i['nomor_akta'];?>" required type="text" name="nomor_akta" class="form-control" placeholder="Nomor Akta">
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
                                        <input value="<?php echo $i['nomor_ijazah'];?>" type="text" name="nomor_ijazah" class="form-control" placeholder="Nomor Ijazah Sekolah Asal">
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
                                        <input value="<?php echo $i['nomor_kartu_keluarga'];?>" required type="text" name="nomor_kartu_keluarga" class="form-control" placeholder="Nomor Kartu Keluarga">
                                      </div>
                                      <div class="col-md-6">
                                        File Kartu Keluarga 
                                        <input  type="file" name="file_kartu_keluarga" class="form-control" >
                                      </div>
                                    </div> 
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



   <?php foreach ($data_siswa->result_array() as $i) :
                                            $id_siswa=$i['id_siswa'];
                                          ?>
       <form  action="<?php echo base_url().'siswa/hapus_siswa'?>" method="post" enctype="multipart/form-data">
   <div class="form-group">
                          <div class="modal fade text-left" id="ModalHapus<?php echo $id_siswa;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                          aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header bg-danger white">
                                  <h4 class="modal-title" id="myModalLabel9" style="color: white;"> <b>HAPUS siswa</b></h4>
                                  <button  type="button"  class="close"  data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" >&times;</span>
                                  </button>
                                </div>

    
                 <div class="modal-body">
                     
                       <input type="hidden" name="kode" value="<?php echo $id_siswa;?>">
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
  text: 'Siswa Berhasil di SIMPAN',
})
 </script>
<?php endif; ?>

<?php if($this->session->flashdata('berhasil_edit') == TRUE): ?>
 <script type="text/javascript">
    Swal.fire({
  icon: 'success',
  text: 'Siswa Berhasil di EDIT'
})
 </script>
<?php endif; ?>

<?php if($this->session->flashdata('berhasil_hapus') == TRUE): ?>
 <script type="text/javascript">
     Swal.fire({
  icon: 'success',
  text: 'Siswa Behasil di HAPUS'
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

