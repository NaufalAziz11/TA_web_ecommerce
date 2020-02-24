<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
	<!-- my css-->
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/animate.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/aos.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/ionicons.min.css">

	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.timepicker.css">


	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">


	<!-- Custom fonts for this template-->
	<link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<!--fileupload-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/lib/bootstrap-fileupload/bootstrap-fileupload.css" />
	<title><?= $judul; ?></title>

</head>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Logout</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Yakin ingin keluar dari akun ?</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
				<a class="btn btn-primary" href="<?= base_url('login/logout'); ?>">Logout</a>
			</div>
		</div>
	</div>
</div>

<body>
	<div class="fixed-top">
		<ul class="nav justify-content-end bg-light ">
			<li class="nav-item">
				<a class="nav-link" href="">
					<div class="text-secondary">Katalog</div>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<div class="text-secondary">About</div>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">
					<div class="text-secondary">Kontak</div>
				</a>
			</li>


		</ul>

		<nav class="navbar navbar-expand-lg navbar-light bg-white shadow ">
			<a class="navbar-brand ml-3" href="<?= base_url(); ?>">
				<h2 class="text-success">AnyarTani</h2>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">

				<div class="input-group ml-5">
					<input type="text" class="form-control" placeholder="cari.." name="keyword">
					<div class="input-group-append">
						<button class="btn btn-success" type="submit">Cari</button>
					</div>
					<a href="<?= base_url(); ?>keranjang" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a>


					<?php if ($this->session->userdata('email')) { ?>
						<div class="nav-item dropdown no-arrow ">
							<a class="nav-link dropdown-toggle mb-2" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
								<img class="img-profile rounded-circle mr-2" style="max-height: 30px" src="<?= base_url('assets/images/profile/') . $user['image']; ?>">

							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="<?= base_url() ?>user/profile">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>

								<a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</div>
					<?php } else { ?>
						<form action="<?= base_url(); ?>login">
							<button class="btn btn-outline-success mr-2">Masuk</button>
						</form>
						<form action="<?= base_url(); ?>login/daftar">
							<button class="btn btn-success">Daftar</button>
						</form>
					<?php } ?>
				</div>
			</div>
		</nav>
	</div>