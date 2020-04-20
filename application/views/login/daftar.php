<div class="container">
	<div class="row justify-content-center ">

		<div class="col-lg-6 ">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
									<h2 class="text-success">AnyarTani</h2>
									<hr>
									<h3 class="text-dark">Daftar Sekarang!</h3>
									<h6 class="text-dark">Sudah Punya Akun ?</h5>
										<a href="<?= base_url(); ?>login">Masuk</a>
										<br><span>--------------------Daftar--------------------</span>
								</div>
								<form class="user" method="post" action="<?= base_url(); ?>login/daftar">
									<div class="form-group">
										<input type="hidden" class="form-control form-control-user" id="id_user" name="id_user" value="<?= set_value('id_user'); ?>">
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama..." value="<?= set_value('nama'); ?>">
										<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email..." value="<?= set_value('email'); ?>">
										<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" value="<?= set_value('password'); ?>">
											<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
										</div>
										<div class="col-sm-6">
											<input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Password">
										</div>
									</div>
									<button type="submit" class="btn btn-success btn-user btn-block">
										Selesai
									</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>