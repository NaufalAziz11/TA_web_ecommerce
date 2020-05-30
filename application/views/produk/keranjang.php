<!--Query menu -->
<?php
$level_id = $this->session->userdata('level_id');
$queryMenu = "SELECT `user_menu`.`id`, `menu` 
                            FROM `user_menu` JOIN `user_access`
                            ON `user_menu`.`id` = `user_access`.`menu_id`
                            WHERE `user_access`.`level_id`= $level_id 
                            ORDER BY `user_access`.`menu_id` ASC
                            ";
$menu = $this->db->query($queryMenu)->result_array();

?>

<!-- Looping Menu -->
<?php foreach ($menu as $m) : ?>
    <div class="sidebar-heading">
        <?= $m['menu']; ?>
    </div>


    <!-- sub menu -->
    <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT * 
                            FROM `user_sub_menu` JOIN `user_menu`
                            ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                            WHERE `user_sub_menu`.`menu_id` = $menuId
                            AND `user_sub_menu`.`is_active` = 1
                            ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>

<?php endforeach; ?>
<section class="ftco-section mt-5">
    <div class="container">
        <!-- <form action="<?= base_url(); ?>Produk/pembayaran " method="post" enctype="multipart/form-data"> -->
        <div class="row">
            <div class="col-md-10 heading-section text-left ftco-animate ml-5">
                <div class="row ml-2">
                    <div class="col-md-4 col-lg-4 ftco-animate ">
                        <div class="form-check form-check-inline mt-5">
                            <h5>Keranjang Belanja Anda</h5>


                        </div>
                    </div>
                </div>
                <hr>
                <?php
                foreach ($this->cart->contents() as $items) : ?>
                    <div class="row ml-2">

                        <div class="col-md-2 col-lg-2 ftco-animate ">

                            <div class="product">
                                <img class="img-fluid" style="height: 100px ; width: 300px" src="<?= base_url('assets/images/produk/') . $items['image']; ?> ">
                                <div class="overlay"></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 ml-3">

                            <a class="text-secondary" href=" <?= base_url('produk/index/' . $items['id']); ?>"><b><?= $items['name'] ?></b></a>
                            <div id="input-group ftco-animate">
                                <h6 class="text-success">Harga : Rp.<?= number_format($items['price'], 0, ',', '.')  ?></h6>



                            </div>
                            <span class="" id="total">Total : Rp.<?= number_format($items['subtotal'], 0, ',', '.')  ?></span><br>


                            <div>
                                <span>QTY</span>
                                <!-- <input type="button" class="btn btn-success rounded-circle text-center" value="-" id="moins" onclick="minus()"> -->
                                <input type="text" class="text-center" value="<?= $items['qty'] ?>" style="border : 0 ; outline: 0 ; backgroud : transparant ; border-bottom: 1px solid darkgray" size="2" value="1" id="count" readonly>
                                <!-- <input type="button" class="btn btn-success rounded-circle" value="+" id="plus" onclick="plus()"> -->
                                <a href="<?= base_url('produk/hapus_keranjang/') . $items['rowid'] ?>" class="text-danger ml-3"><b>Hapus</b></a>
                            </div>

                        </div>


                    </div>
                    <br>

                <?php endforeach ?>
                <hr>
            </div>
            <div class="fixed-bottom">
                <hr>
                <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
                    <div class="collapse navbar-collapse col-10" id="navbarSupportedContent">
                        <h6 class="ml-4"><b>Total Harga</b></h6>
                        <h6 class="text-success ml-5 " id="total_semua"><b>Rp.<?= number_format($this->cart->total(), 0, ',', '.') ?></b></h6>
                        <h6 class="text-success " id="jal"><b></b></h6>
                        <!-- <input type="text" class="" id="jal"><br> -->
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- <form action="<?= base_url(); ?>Produk/tambah_invoice " method="post" enctype="multipart/form-data">
                                    <input type="text" value="" id="id_keranjang" name="id_keranjang[]">
                    <input type="text" value="" id="harga" name="harga">
                    <input type="text" value="" id="no" name="no">
                    <button class="btn btn-success" type="submit" style="width:200px">Beli</button>
                </form> -->
                        <!-- <input type="text" value="" id="kode_transaksi" name="kode_transaksi"> -->
                        <!-- </form> -->
                        <a href="<?= base_url('produk/pembayaran') ?>" class="btn btn-success" style="width:200px">Beli</a>

                    </div>
            </div>
        </div>
    </div>
</section>