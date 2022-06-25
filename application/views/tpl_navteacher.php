<ul class="nav ace-nav pull-right">

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								
							<span class="user-info">
									<small>Selamat Datang,</small>
									<?php  $id_session=$this->session->userdata('officer');
									echo $id_session; ?>
							</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="<?php echo base_url(); ?>officer/profil/upload_foto">
										<i class="icon-picture"></i>
										Upload Foto
									</a>
								</li>

								<li>
									<a href="<?php echo base_url(); ?>officer/profil/edit">
										<i class="icon-envelope"></i>
										Ubah Email
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url(); ?>officer/logout">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->