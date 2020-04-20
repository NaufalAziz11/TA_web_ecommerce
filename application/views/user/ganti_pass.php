<section class="ftco-section mt-4">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 heading-section text-center ftco-animate mt-5 ">
                <h3 style="color : green; text-decoration:none; ">Halaman Ganti Password</h1>
                    <hr>
            </div>

            <div class="container">

                <div class="row">

                    <div class="col-md-3 text-right ">
                    </div>

                    <div class="col-md-6 ">
                        <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url(); ?>user/ganti_pass" method="POST">
                            <div class="form-group">
                                <label class="text-center">Password Lama</label>
                                <input type="password" class="form-control text-center bg-light" style="width:100" id="password1" name="password1" aria-describedby="emailHelp">
                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <label class="text-center">Password Baru</label>
                            <div class="form-group">
                                <input type="password" class="form-control text-center bg-light" style="width:100" id="password2" name="password2" aria-describedby="emailHelp">
                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <label class="text-center">Masukkan Password baru kembali</label>
                            <div class="form-group">
                                <input type="password" class="form-control text-center bg-light" style="width:100" id="password3" name="password3" aria-describedby="emailHelp">
                                <?= form_error('password3', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success btn-user btn-block">
                                Simpan
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
</section>