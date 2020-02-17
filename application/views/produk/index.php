<section class="ftco-section mt-4">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3 ">
            <div class="col-md-12 heading-section text-left ftco-animate mt-5">
                <a href="<?= base_url(); ?>home" style="color : green; text-decoration:none">Beranda > Kategori ></a>
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
                    <img class="img-fluid" src="<?= base_url(); ?>assets/images/product-1.jpg" alt="Colorlib Template">
                    <div class="overlay"></div>
                    </a>

                </div>
            </div>
            <div class="col-md-6 col-lg-6 ftco-animate heading-section ml-4">
                <h3>Paprika / kg kualitas atas harga merakyat</h3>
                <hr>
                <div class="row ml-2">
                    <div class="col-md-2 col-lg-2 ftco-animate ">
                        <h6 class="text-secondary">Harga </h6>
                    </div>
                    <div class="col-md-2 col-lg-2 ftco-animate ">
                        <h3 class="text-success"> Rp.100.000 </h3>
                    </div>

                </div>
                <hr>
                <div class="row ml-2">
                    <div class="col-md-2 col-lg-2 ftco-animate ">
                        <h6 class="text-secondary">Jumlah </h6>
                    </div>
                    <div class="col-md-8 col-lg-8 ftco-animate ">
                        <h6 class="text-dark"> Stok tersisa : 5 </h6>
                        <div id="input-group ftco-animate">
                            <input type="button" class="btn btn-success rounded-circle text-center" value="-" id="moins" onclick="minus()">
                            <input type="text" class="text-center" style="border : 0 ; outline: 0 ; backgroud : transparant ; border-bottom: 1px solid darkgray" size="2" value="1" id="count">
                            <input type="button" class="btn btn-success rounded-circle" value="+" id="plus" onclick="plus()">
                            <span class="text-secondary">Minimal pembelian 1 pcs</span>
                        </div>
                    </div>

                </div>

                <hr>
                <div class="row ml-2 ftco-animate">
                    <div class="col-md-2 col-lg-2 ftco-animate ">
                        <h6 class="text-secondary">Ongkos Kirim </h6>
                    </div>
                    <div class="col-md-1 col-lg-1 ftco-animate ">
                        <h6 class="text-secondary"> ke </h6>

                    </div>
                    <div class="dropdown">
                        <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pekalongan,Kajen
                        </button>
                        <div class="dropdown-menu" style="width:300px" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Kecamatan
                                <div class="dropdown">
                                    <button class="btn btn-success btn-sm dropdown-toggle text-left" style="max-width:250px" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pekalongan,Kajen
                                    </button>
                                    <div class="dropdown-menu" style="width:300px" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Kecamatan</a>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#">Kode Pos</a>

                        </div>
                    </div>

                </div>
            </div>
            <a name="1"></a>
        </div>


        <div>
            <hr>

            <div class="row ml-4 position-sticky">
                <a href="#1">Deskripsi</a>
                <a href="#deskripsi" class="ml-4">Ulasan</a>
                <a href="#ulasan" class="ml-4">Diskusi</a>
                <a href="#diskusi" class="ml-4">Rekomendasi</a>
            </div>
            <hr>
        </div>
        <div class="row ml-2 ftco-animate">
            <a name="deskripsi"><b>Deskripsi</b></a>
            <p class="text-justify" name="deskripsi">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus
                sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est
                sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est
                sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est
                quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi
                concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
        </div>
        <hr>
        <div class="row ml-2 ftco-animate">
            <a name="ulasan"><b>Ulasan</b>
                <p class="text-justify">
                    Paprika/kg
                </p>
                <div class="row ">
                    <div class="col-md-2 col-lg-3 ftco-animate ">
                        <h1 class="text-secondary">4.8 &nbsp; </h1>
                    </div>
                    <div class="col-md-2 col-lg-2 ml-3 mt-4 ftco-animate ">
                        <h6 class="text-secondary">/5</h6>
                    </div>

                </div>
            </a>
        </div>
        <hr>
        <div class="row ml-2 ftco-animate" name="diskusi">
            <a name="diskusi"><b>Diskusi</b></a>
        </div>
        <br>
        <div class="row">
            <div class="col-2">
                <a class="ftco-animate">
                    <img class="img-profile rounded-circle mr-2" style="max-height: 50px" src="<?= base_url('assets/images/profile/') . $user['image']; ?>">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                </a>
            </div>
            <div class="col-3">
                <a class="ftco-animate ml-5">
                    <h6>mantab mantab</h6>
                    <textarea style="width : 500px"></textarea>
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-2">
                <a class="ftco-animate">
                    <img class="img-profile rounded-circle mr-2" style="max-height: 50px" src="<?= base_url('assets/images/profile/') . $user['image']; ?>">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['nama']; ?></span>
                </a>
            </div>
            <div class="col-3">
                <a class="ftco-animate ml-5">
                    <h6>mantab mantab</h6>
                    <textarea style="width : 500px"></textarea>
                </a>
            </div>
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
                                <div class="pricing">
                                    <p class="price"><span class="mr-2 price-dc">$120.00</span><span class="price-sale">$80.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
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
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
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
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
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
                                <div class="pricing">
                                    <p class="price"><span>$120.00</span></p>
                                </div>
                            </div>
                            <div class="bottom-area d-flex px-3">
                                <div class="m-auto d-flex">
                                    <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                        <span><i class="ion-ios-menu"></i></span>
                                    </a>
                                    <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                        <span><i class="ion-ios-cart"></i></span>
                                    </a>
                                    <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                        <span><i class="ion-ios-heart"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    </div>
    <div class="fixed-bottom">
        <hr>
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
            <div class="collapse navbar-collapse col-3" id="navbarSupportedContent">
                <h6 class="ml-4">Paprika / kg kualitas atas harga merakyat</h5>
            </div>
            <div class="col-2">
            </div>
            <div class="col-4">
                <h5 class="text-success">Total: Rp.100.000 </h5>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form action="<?= base_url(); ?>produk/beli">
                    <button class="btn btn-outline-success mr-2" style="width:100px">Beli</button>
                </form>
                <form action="<?= base_url(); ?>produk/keranjang">
                    <button class="btn btn-success" style="width:200px">Tambah Keranjang</button>
                </form>
            </div>
    </div>
    </nav>


</section>