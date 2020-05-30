<section class="ftco-section mt-4">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3 ">
            <div class="col-md-12 heading-section text-left ftco-animate mt-5">
                <a href="<?= base_url(); ?>user" style="color : green; text-decoration:none">Beranda > Kategori ></a>
                <a href="<?= base_url(); ?>kategori/peralatan" style="color : black; text-decoration:none">Peralatan </a>
                <hr>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-lg-4 ftco-animate ">
                <div class="product">
                    <img class="img-fluid" style="align:justify-content-center; width:350px; height:300px" src="<?= base_url('assets/images/produk/') . $barang['gambar']; ?> ">
                    <div class="overlay"></div>
                    </a>

                </div>
            </div>
            <div class="col-md-6 col-lg-6 ftco-animate heading-section ml-4">

                <h3><?= $barang['nama_barang'] ?></h3>
                <hr>
                <div class="row ml-2">
                    <div class="col-md-2 col-lg-2 ftco-animate ">
                        <h6 class="text-secondary">Harga </h6>
                    </div>
                    <div class="col-md-2 col-lg-2 ftco-animate ">
                        <h3 class="text-success">Rp.<?= number_format($barang['harga'], 0, ',', '.')  ?></h3>

                    </div>

                </div>
                <hr>
                <div class="row ml-2">
                    <div class="col-md-2 col-lg-2 ftco-animate ">
                        <h6 class="text-secondary">Jumlah </h6>
                    </div>


                    <div class="col-md-8 col-lg-8 ftco-animate ">
                        <h6 class="text-dark"> Stok tersisa : <?= $barang['stok'] ?></h6>
                        <div id="input_div">
                            <input type="button" class="btn btn-success rounded-circle text-center btn-number" value="-" id="moins" onclick="minus();jumlah()">
                            <input type="text" class="text-center input-number" size="25" value="1" id="count" style="border : 0 ; outline: 0 ; backgroud : transparant ; border-bottom: 1px solid darkgray" readonly>
                            <input type="button" class="btn btn-success rounded-circle text-center btn-number" value="+" id="plus" onclick="plus();jumlah()">
                        </div>
                        <br>
                        <span class="text-secondary">Minimal pembelian 1 pcs</span>
                    </div>

                </div>

            </div>
        </div>


        <div>
            <hr>

            <div class="row ml-4 position-sticky">
                <a href="#1">Deskripsi</a>
                <a href="#deskripsi" class="ml-4">Rekomendasi</a>
            </div>
            <hr>
        </div>
        <div class="row ml-2 ftco-animate">
            <a name="deskripsi"><b>Deskripsi</b></a>

        </div>
        <div class="row ml-2 ftco-animate">
            <p class="text-justify" name="deskripsi"> <?= $barang['deskripsi'] ?></p>
        </div>
        <hr>
        <div class="row ml-2 ftco-animate">
            <a name="rekomendasi"><b>Rekomendasi</b></a>
        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 ftco-animate ">
                    <div class="product">
                        <a href="<?= base_url(); ?>produk" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/images/product-1.jpg" alt="Colorlib Template">
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

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="#" class="img-prod"><img class="img-fluid" src="<?= base_url(); ?>assets/images/product-4.jpg" alt="Colorlib Template">
                            <div class="overlay"></div>
                        </a>
                        <div class="text py-3 pb-4 px-3 text-center">
                            <h3><a href="#">Purple Cabbage</a></h3>
                            <div class="d-flex">
                                <div class="text text-center">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="fixed-bottom">
        <hr>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
            <div class="collapse navbar-collapse col-3" id="navbarSupportedContent">
                <h6 class="ml-4"><?= $barang['nama_barang'] ?></h5>
            </div>
            <div class="col-2">
            </div>
            <div class="col-4">
                <h5 class="text-success" id="total">Total: Rp.<?= number_format($barang['harga'], 0, ',', '.')  ?> </h5>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form action="<?= base_url('produk/tambah_keranjang/' . $barang['id_barang']); ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="email" name="email" value="<?= $user_login['email'] ?>">
                    <input type="hidden" id="id_barang" name="id_barang" value="<?= $barang['id_barang'] ?>">
                    <input type="hidden" id="harga" name="harga" value="<?= $barang['harga'] ?>">
                    <input type="hidden" class="text-center input-number" size="100" value="1" id="qty" name="qty" style="border : 0 ; outline: 0 ; backgroud : transparant ; border-bottom: 1px solid darkgray">
                    <input type="hidden" id="total1" name="total" value="<?= $barang['harga'] ?>">
                    <button class="btn btn-success ml-5" type="submit" style="width:200px">Masuk Ke keranjang</button>
                </form>
            </div>
    </div>
    </nav>


</section>