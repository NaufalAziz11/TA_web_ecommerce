<section class="ftco-section mt-4">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 heading-section text-left ftco-animate mt-5">
                <a style="color : green; text-decoration:none">Halaman Profile Anda</a>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-right ">

                        <br>
                        <!-- <div>
                            <label for="provinsi_asal">Provinsi Asal</label>
                        </div>
                        <br>
                        <div>
                            <label for="kota_asal">Kota Asal</label>
                        </div>
                        <br> -->
                        <br>
                        <div>
                            <label for="nama_penerima">Nama penerima</label>
                        </div>
                        <br>
                        <div>
                            <label for="no_telepon">No Telepon</label>
                        </div>
                        <br>
                        <br>
                        <div>
                            <label for="nama_penerima">Jenis Alamat</label>
                        </div>
                        <br>
                        <br>
                        <div>
                            <label for="provinsi">Provinsi</label>
                        </div>
                        <br>

                        <div>
                            <label for="kota">Kota</label>
                        </div>
                        <br>
                        <br>
                        <div>
                            <p>Alamat Lengkap</p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <?php if ($this->session->userdata('email')) { ?>
                            <form action="<?= base_url(); ?>ongkir/index" method="POST" enctype="multipart/form-data">
                                <br>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" name="email" id="email" value="<?= $user_login['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama_penerima" id="nama_penerima"  placeholder="ex. Bambang ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="no_telepon" id="no_telepon"  placeholder="ex. 085869277826">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="jenis_alamat" id="jenis_alamat"  placeholder="ex. Rumah">
                                </div>
                                <div class="form-group">
                                    <select id="provinsi" onchange="get_kota()" class="form-control provinsi" name="provinsi" ></select>
                                </div>
                                <div class="form-group">
                                    <select id="kota" class="form-control kota" name="kota" ></select>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap"  rows="3" placeholder="ex. Ds.Kalisari, Kec.Blado, Kab.Batang ,RT.04 RW.01"></textarea>
                                <span class="text-secondary">*Masukkan alamat dengan lengkap </span>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success btn-lg btn-block">Simpan</button>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</section>