<!--content-->
<!--slider-->
<div class="home-slider owl-carousel">
	<div class="slider-item" style="background-image: url(<?= base_url(); ?>assets/images/bg_1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="col-md-12 ftco-animate text-center">
					<h1 class="mb-2">One Stop Farming</h1>
					<h2 class="subheading mb-4">Pertanian Satu Atap</h2>
				</div>

			</div>
		</div>
	</div>

	<div class="slider-item" style="background-image: url(<?= base_url(); ?>assets/images/bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

				<div class="col-sm-12 ftco-animate text-center">
					<h1 class="mb-2">100% Aman &amp; Terpercaya</h1>
					<p><a href="#" class="btn btn-primary">Selengkapnya</a></p>
				</div>

			</div>
		</div>
	</div>
</div>

<!--kategori-->
<section class="ftco-section">
	<div class="container">
		<div class="col-md-12 heading-section text-center ftco-animate">
			<h2 class="mb-4">Kategori</h2>
		</div>
		<div class="row no-gutters ftco-services">
			<?php foreach ($kategori as $ktg) : ?>
				<div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
					<a class="media block-6 services mb-md-0 mb-4" href="<?= base_url(); ?>user/kategori" style="text-decoration:none">
						<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
							<img src="<?= base_url() . 'assets/images/icons/' . $ktg->image ?>">
						</div>
						<div class="media-body">
							<h3 class="heading"><?= $ktg->nama_kategori ?></h3>
						</div>
					</a>
				</div>

			<?php endforeach; ?>

		</div>
	</div>
</section>

<!-- promo -->
<section class="ftco-section testimony-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">

				<h2 class="mb-4">Promo</h2>

			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel">
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/images/product-1.jpg" alt="Colorlib Template">
							<span class="status">30%</span>
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Bell Pepper</a></h3>
							<div class="d-flex">
								<div class="text text-center">
									<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
								</div>
							</div>
							<div class="d-flex">
								<div class="text">
									<h6 class="mr-2 text-success mt-2">Stok : 5</h6>
								</div>
							</div>

						</div>
					</div>
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/images/product-2.jpg" alt="Colorlib Template">
							<span class="status">30%</span>
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Bell Pepper</a></h3>
							<div class="d-flex">
								<div class="text text-center">
									<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
								</div>
							</div>
							<div class="d-flex">
								<div class="text">
									<h6 class="mr-2 text-success mt-2">Stok : 5</h6>
								</div>
							</div>

						</div>
					</div>
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/images/product-3.jpg" alt="Colorlib Template">
							<span class="status">30%</span>
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Bell Pepper</a></h3>
							<div class="d-flex">
								<div class="text text-center">
									<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
								</div>
							</div>
							<div class="d-flex">
								<div class="text">
									<h6 class="mr-2 text-success mt-2">Stok : 5</h6>
								</div>
							</div>

						</div>
					</div>
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/images/product-4.jpg" alt="Colorlib Template">
							<span class="status">30%</span>
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Bell Pepper</a></h3>
							<div class="d-flex">
								<div class="text text-center">
									<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
								</div>
							</div>
							<div class="d-flex">
								<div class="text">
									<h6 class="mr-2 text-success mt-2">Stok : 5</h6>
								</div>
							</div>

						</div>
					</div>
					<div class="product">
						<a href="#" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/images/product-5.jpg" alt="Colorlib Template">
							<span class="status">30%</span>
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="#">Bell Pepper</a></h3>
							<div class="d-flex">
								<div class="text text-center">
									<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
								</div>
							</div>
							<div class="d-flex">
								<div class="text">
									<h6 class="mr-2 text-success mt-2">Stok : 5</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--paling banyak dibeli-->
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Paling Banyak Di Beli</h2>
			</div>
		</div>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/images/product-1.jpg" alt="Colorlib Template">
						<span class="status">30%</span>
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">Bell Pepper</a></h3>
						<div class="d-flex">
							<div class="text text-center">
								<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
							</div>
						</div>
						<div class="d-flex">
							<div class="text">
								<h6 class="mr-2 text-success mt-2">Stok : 5</h6>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/images/product-2.jpg" alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">Strawberry</a></h3>
						<div class="d-flex">
							<div class="text text-center">
								<p class="price"><span>$120.00</span></p>
							</div>
						</div>
						<div class="d-flex">
							<div class="text">
								<h6 class="mr-2 text-success mt-2">Stok : 5</h6>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/images/product-3.jpg" alt="Colorlib Template">
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">Green Beans</a></h3>
						<div class="d-flex">
							<div class="text text-center">
								<p class="price"><span>$120.00</span></p>
							</div>
						</div>
						<div class="d-flex">
							<div class="text">
								<h6 class="mr-2 text-success mt-2">Stok : 5</h6>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="product">
					<a href="#" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/images/product-1.jpg" alt="Colorlib Template">
						<span class="status">30%</span>
						<div class="overlay"></div>
					</a>
					<div class="text py-3 pb-4 px-3 text-center">
						<h3><a href="#">Bell Pepper</a></h3>
						<div class="d-flex">
							<div class="text text-center">
								<p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
							</div>
						</div>
						<div class="d-flex">
							<div class="text">
								<h6 class="mr-2 text-success mt-2">Stok : 5</h6>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
</section>

<!--produk-->

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-3 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Produk</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($barang as $brg) : ?>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="product">
						<a href="<?= base_url() ?>produk/index/<?= $brg->id_barang ?>" class="img-prod text-center"><img class="img-fluid" style="width:250px; height:200px" src="<?= base_url() . 'assets/images/produk/' . $brg->gambar ?>" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="<?= base_url() ?>produk/index/<?= $brg->id_barang ?>"><?= $brg->nama_barang ?></a></h3>
							<div class="d-flex">
								<div class="text text-center">
									<p class="price"><span class="mr-2 price">Rp.<?= $brg->harga ?></span>
								</div>
							</div>
							<div class="d-flex">
								<div class="text">
									<h6 class="mr-2 text-success mt-2">Stok : <?= $brg->stok ?></h6>
								</div>
							</div>

						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>