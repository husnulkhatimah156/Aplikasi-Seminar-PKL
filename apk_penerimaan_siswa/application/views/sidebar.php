
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<?php if(empty($this->session->userdata('foto'))):?>
													<img src="<?php echo base_url();?>/assets/image/profil3.png" alt="image profile" class="avatar-img rounded-circle">
												<?php else:?>
													<img src="<?php echo base_url();?>/assets/image/<?php echo $this->session->userdata('foto');?>g" alt="image profile" class="avatar-img rounded-circle">
												<?php endif;?>
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?php echo $this->session->userdata('nama_lengkap');?>
									<span class="user-level"><?php echo $this->session->userdata('level');?></span>
									<!--<span class="user-level"><?php echo $this->session->userdata('level');?></span>-->
								</span>
							</a>
							<div class="clearfix"></div>

						
						</div>
					</div>
					<ul class="nav nav-primary">
						<?php if($this->session->userdata("level")=="Orang Tua / Wali Siswa"):?>

						<li class="nav-item <?php if($sidebar=="dashboard"): ?>active<?php endif;?>">
							<a href="<?php echo base_url();?>dashboard">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>

						

						<?php else:?>
						<li class="nav-item <?php if($sidebar=="dashboard"): ?>active<?php endif;?>">
							<a href="<?php echo base_url();?>dashboard">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>

						<?php endif;?>

						<?php if($this->session->userdata("level")=="Administrator"):?>

						<li class="nav-item 
						<?php if($sidebar=="pengguna"): ?>active<?php endif;?>
						<?php if($sidebar=="semester"): ?>active<?php endif;?>
						<?php if($sidebar=="jurusan"): ?>active<?php endif;?>
						">
							<a data-toggle="collapse" href="#charts">
								<i class="fas fa-server"></i>
								<p>Data Master</p>
								<span class="caret"></span>
							</a>
							<div class="collapse 
						<?php if($sidebar=="pengguna"): ?>show<?php endif;?>
						<?php if($sidebar=="semester"): ?>show<?php endif;?>
						<?php if($sidebar=="jurusan"): ?>show<?php endif;?>
							" id="charts">
								<ul class="nav nav-collapse">
									<li class="<?php if($sidebar=="pengguna"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>pengguna">
											<span class="sub-item">Pengguna</span>
										</a>
									</li>
									<li class="<?php if($sidebar=="semester"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>semester">
											<span class="sub-item">Semester</span>
										</a>
									</li>
									<li class="<?php if($sidebar=="jurusan"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>jurusan">
											<span class="sub-item">Jurusan</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						
						<li class="nav-item 
						<?php if($sidebar=="kelas"): ?>active<?php endif;?>
						<?php if($sidebar=="siswa"): ?>active<?php endif;?>
						<?php if($sidebar=="pengajuan_siswa_baru"): ?>active<?php endif;?>
						<?php if($sidebar=="history_pembayaran"): ?>active<?php endif;?>
						<?php if($sidebar=="pindah_sekolah"): ?>active<?php endif;?>
						">
							<a data-toggle="collapse" href="#charts2">
								<i class="fas fa-database"></i>
								<p>Transaksi Data</p>
								<span class="caret"></span>
							</a>
							<div class="collapse 
						<?php if($sidebar=="kelas"): ?>show<?php endif;?>
						<?php if($sidebar=="siswa"): ?>show<?php endif;?>
						<?php if($sidebar=="pengajuan_siswa_baru"): ?>show<?php endif;?>
						<?php if($sidebar=="history_pembayaran"): ?>show<?php endif;?>
						<?php if($sidebar=="pindah_sekolah"): ?>show<?php endif;?>
							" id="charts2">
								<ul class="nav nav-collapse">
									<li class="<?php if($sidebar=="kelas"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>kelas">
											<span class="sub-item">Kelas</span>
										</a>
									</li>
									<li class="<?php if($sidebar=="siswa"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>siswa">
											<span class="sub-item">Siswa</span>
										</a>
									</li>
									<li class="<?php if($sidebar=="pengajuan_siswa_baru"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>pengajuan_siswa_baru">
											<span class="sub-item">Pengajuan Siswa Baru</span>
										</a>
									</li>
								
									
									
								</ul>
							</div>
						</li>
						
						<li class="nav-item 
						<?php if($sidebar=="kelas2"): ?>active<?php endif;?>
						<?php if($sidebar=="siswa2"): ?>active<?php endif;?>
						<?php if($sidebar=="siswa3"): ?>active<?php endif;?>
						<?php if($sidebar=="siswa4"): ?>active<?php endif;?>
						<?php if($sidebar=="siswa5"): ?>active<?php endif;?>
						<?php if($sidebar=="pengajuan_siswa_baru2"): ?>active<?php endif;?>
						<?php if($sidebar=="pengajuan_siswa_baru3"): ?>active<?php endif;?>
						<?php if($sidebar=="pengajuan_siswa_baru4"): ?>active<?php endif;?>
						<?php if($sidebar=="history_pembayaran2"): ?>active<?php endif;?>
						<?php if($sidebar=="pindah_sekolah2"): ?>active<?php endif;?>
						">
							<a data-toggle="collapse" href="#charts3">
								<i class="fas fa-print"></i>
								<p>Laporan</p>
								<span class="caret"></span>
							</a>
							<div class="collapse 
						<?php if($sidebar=="kelas2"): ?>show<?php endif;?>
						<?php if($sidebar=="siswa2"): ?>show<?php endif;?>
						<?php if($sidebar=="siswa3"): ?>show<?php endif;?>
						<?php if($sidebar=="siswa4"): ?>show<?php endif;?>
						<?php if($sidebar=="siswa5"): ?>show<?php endif;?>
						<?php if($sidebar=="pengajuan_siswa_baru2"): ?>show<?php endif;?>
						<?php if($sidebar=="pengajuan_siswa_baru3"): ?>show<?php endif;?>
						<?php if($sidebar=="pengajuan_siswa_baru4"): ?>show<?php endif;?>
						<?php if($sidebar=="history_pembayaran2"): ?>show<?php endif;?>
						<?php if($sidebar=="pindah_sekolah2"): ?>show<?php endif;?>
							" id="charts3">
								<ul class="nav nav-collapse">
									
									<li class="<?php if($sidebar=="siswa2"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>siswa/lihat">
											<span class="sub-item">Laporan Siswa</span>
										</a>
									</li>
									<li class="<?php if($sidebar=="siswa3"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>siswa/lihat2">
											<span class="sub-item">Laporan Siswa Masuk</span>
										</a>
									</li>
									<li class="<?php if($sidebar=="siswa4"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>siswa/lihat3">
											<span class="sub-item">Laporan Siswa Pindahan</span>
										</a>
									</li>
									<li class="<?php if($sidebar=="pengajuan_siswa_baru2"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>pengajuan_siswa_baru/lihat">
											<span class="sub-item">Laporan Pengajuan Diterima</span>
										</a>
									</li>
									<li class="<?php if($sidebar=="pengajuan_siswa_baru3"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>pengajuan_siswa_baru/lihat2">
											<span class="sub-item">Laporan Pengajuan Ditolak</span>
										</a>
									</li>
									<li class="<?php if($sidebar=="pengajuan_siswa_baru4"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>pengajuan_siswa_baru/lihat3">
											<span class="sub-item">Laporan Perankingan Siswa Baru</span>
										</a>
									</li>
									<li class="<?php if($sidebar=="siswa5"): ?>active<?php endif;?>">
										<a href="<?php echo base_url();?>siswa/lihat4">
											<span class="sub-item">Laporan Grafik Pengajuan Siswa Baru</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

					<?php endif;?>


					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->