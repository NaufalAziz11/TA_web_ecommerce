<form action="<?= base_url(); ?>produk/proses_pesanan" method="post">
    <section class="ftco-section mt-4">
        <div class="container">
            <div class="row justify-content-center mb-3 pb-3 ">
                <div class="col-md-12 heading-section text-left ftco-animate mt-5">
                    <a href="<?= base_url(); ?>user" style="color : green; text-decoration:none">Beranda > Kategori ></a>
                    <a href="<?= base_url(); ?>kategori/beli" style="color : black; text-decoration:none">Pengiriman </a>
                    <hr>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 heading-section text-left ftco-animate ml-5">

                            <h3>Alamat Pengiriman</h3>
                            <hr>
                            <div class="row ml-2">
                                <div class="col-md-4 col-lg-10 ftco-animate ">
                                    <h6 class="text-secondary"><?= $alamat['jenis_alamat'] ?></h6>
                                    <h6 class="text-secondary"><?= $alamat['nama_penerima'] ?></h6>
                                    <input type="hidden" id="nama_penerima" value="<?= $alamat['nama_penerima'] ?>" class="text-secondary">
                                    <h6 class="text-secondary"><?= $alamat['no_telepon'] ?></h6>
                                    <h6 class="text-secondary"><?= $alamat['alamat_lengkap'] ?></h6>
                                </div>
                            </div>
                            <hr>
                            <div class="row justify-content-center">
                                <div>
                                    <a class="col-md-4 col-lg-4 ftco-animate" id="btn_ongkir" name="btn_ongkir" href="<?= base_url() ?>ongkir" style="text-decoration:none;">Atur Tujuan</a>
                                    <a class="col-md-4 col-lg-4 ftco-animate" id="btn_ongkir2" href="<?= base_url() ?>ongkir/edit_ongkir" style="text-decoration:none;">Edit Tujuan</a>
                                </div>
                            </div>
                            <hr>


                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-10 heading-section text-left ftco-animate ml-5">

                            <h6>Toko : Anyar Tani</h6>
                            <h6>Pasar Doro</h6>
                            <hr>
                            <div class="row ml-2">
                                <div class="form-group">

                                    <input type="hidden" id="alamat" name="alamat" value="<?= $alamat['alamat_lengkap'] ?>">
                                    <input type="hidden" id="provinsi_asal" value="10" onchange="get_kota_asal()" class="form-control provinsi">
                                    <!-- <option>Jawa Tengah </option>

                                    </> -->
                                </div>
                                <div class="form-group">
                                    <input type="hidden" id="kota_asal" class="form-control" value="348" name="kota_asal">
                                    <!-- <option>Pekalongan </option>
                                    </select> -->
                                </div>
                                <div class="form-group">
                                    <input type="hidden" id="provinsi" value="<?= $alamat['provinsi'] ?>" onchange="get_kota()" class="form-control provinsi" name="provinsi">
                                </div>
                                <!-- <div class="form-group">
                                    <input type="text" id="provinsi1" value=" tai" onchange="get_kota()" class="form-control provinsi" name="provinsi">
                                </div> -->
                                <div class="form-group">
                                    <input type="hidden" id="kota" value="<?= $alamat['kota'] ?>" class="form-control kota" name="kota">
                                </div>
                                <div class="form-group">

                                </div>

                                <?php
                                $grand_total = 0;
                                if ($keranjang = $this->cart->contents()) {

                                    foreach ($keranjang as $items) : ?>
                                        <!-- $grand_total = $grand_total + $items['subtotal'];
                                    
                                    echo "total : Rp" . number_format($grand_total, 0, ',', '.');
                                     -->
                                        <div class="col-md-2 col-lg-3 ftco-animate ">
                                            <div>
                                                <img class="img-fluid" style="height: 100px ; width: 100px" src="<?= base_url('assets/images/produk/') . $items['image']; ?> ">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-lg-3 ftco-animate ">

                                            <h6 class="text-secondary"><b><?= $items['name'] ?></b></h6>
                                            <span class="text-secondary"><?= $items['qty'] ?></span>
                                            <span> Barang (<?= $items['berat'] ?> Kg)</span> <br><br>
                                            <h6 class="text-success"><b>Rp. <?= number_format($items['subtotal'], 0, ',', '.') ?></b></h6>
                                            <br><br>
                                        </div>

                                    <?php endforeach; ?>
                                    <!-- <input type="text" class="text-secondary" value="<?= $items['id'] ?>">
                                    <input type="text" class="text-secondary" value="<?= $items['qty'] ?>">
                                     -->

                                    <input type="hidden" id="sub" name="total_harga" value="<?= $this->cart->total() ?>">
                                    <input type="hidden" id="ongkir1" name="biaya_kirim">
                                    <input type="hidden" id="sub_total" name="sub_total">








                            </div>
                            <hr>
                            <!-- <form action="<?= base_url(); ?>Produk/tambah_ongkir " method="post" enctype="multipart/form-data"> -->
                            <div class="row ml-2">
                                <div class="col-lg-10">
                                    <span class="float-left">Kurir / durasi pengiriman</span>
                                    <div class="dropdown float-right">
                                        <div class="form-group">
                                            <select name="kurir" onchange="get_ongkir()" id="kurir" class="btn btn-success btn-sm dropdown-toggle">
                                                <option value="">Pilih</option>
                                                <option value="jne">JNE</option>
                                                <option value="pos">POS</option>
                                                <option value="tiki">TIKI</option>
                                            </select>
                                        </div>

                                    </div>

                                    <br>
                                    <br>
                                    <span class="float-left">Pembayaran</span>

                                    <div class="dropdown float-right">
                                        <div class="form-group">
                                            <select name="pembayaran" id="pembayaran" class="btn btn-success btn-sm dropdown-toggle">
                                                <option value="">Pilih</option>
                                                <option value="bri">Transfer BRI</option>

                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="dropdown float-left">
                                        <div class="form-group">
                                            <select name="service" id="service" onchange="getbiaya()" class="btn btn-success btn-sm dropdown-toggle">
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <input type="hidden" id="alamat" name="id_alamat" value="<?= $alamat['id_alamat'] ?>">
                                <input type="hidden" name="berat" id="berat" class="form-control" value="<?= $items['berat'] ?>">
                                <input type="hidden" id="email" name="email" value="<?= $user_login['email'] ?>">
                                <!-- </form> -->
                            </div>

                            <hr>
                            <div class="row ml-2">
                                <div class="col-md-2 col-lg-12 ftco-animate ">
                                    <div class="btn-group dropright">

                                        <span class="float-left"><b>Subtotal</b></span>
                                        <span class="text-success" style="padding-left:650px;" id="sub_total2"><b>Rp.</b></span>


                                    </div>
                                </div>

                            </div>



                            <hr>
                            <div class="row ml-2">
                                <div class="col-md-2 col-lg-12 ftco-animate ">
                                    <h6>Ringkasan Belanja</h6>
                                    <br>
                                    <div class="col-md-2 col-lg-11">
                                        <a class="">Total Harga (<?= $items['qty'] ?> barang)
                                            <span style="float:right">Rp.<?= number_format($this->cart->total(), 0, ',', '.') ?></span>
                                        </a>
                                    </div>
                                    <br>
                                    <div class="col-md-2 col-lg-11">
                                        <a class="">Total Ongkos Kirim
                                            <span style="float:right" id="ongkir3">Rp.</span>
                                        </a>
                                    </div>
                                    <br>
                                    <div class="col-md-2 col-lg-11">
                                        <a class="">Total Potongan Harga
                                            <span style="float:right">Rp.0</span>
                                        </a>
                                    </div>


                                </div>


                            </div>
                            <hr>
                        </div>

                    </div>
                </div>
                <hr>
            </div>
            <div class="fixed-bottom">
                <hr>
                <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
                    <div class="collapse navbar-collapse col-10" id="navbarSupportedContent">
                        <h6 class="ml-4"><b>Total Tagihan</b></h6>
                        <h6 class="text-success ml-5" id="sub_total3"><b>Rp.</b></h6>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <button class="btn btn-success" type="submit" style="width:200px">Bayar</button>

                    </div>
            </div>
            </nav>


    </section>
</form>
<?php
} else {
    echo "<h4 class = text-danger >Keranjang Belanja Anda Kosong</h3>";
}
?>