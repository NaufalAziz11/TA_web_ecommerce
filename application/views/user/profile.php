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
                        <br><br><br><br><br><br><br><br><br>
                        <div>
                            <p> <label for="name">Username</label></p>
                        </div>
                        <br>
                        <div>
                            <p>Email</p>
                        </div>
                        <br>
                        <div>
                            <p>Jenis Kelamin</p>
                        </div>
                        <br>
                        <div>
                            <p>Tanggal Lahir</p>
                        </div>
                        <br>
                        <div>
                            <p>Nomor Telepon</p>
                        </div>
                    </div>

                    <div class="col-md-6 ">
                        <?php if ($this->session->userdata('email')) { ?>
                            <form action="<?= base_url(); ?>user/profile" method="POST" enctype="multipart/form-data">
                                <div class="col-md-12 text-center">
                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="<?= base_url('assets/images/profile/') . $user_login['image'] ?>">
                                        </div>
                                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                        <div>
                                            <span class="btn btn-theme02 btn-file">
                                                <span class="fileupload-new" value="<?= $user_login['image']; ?>"><i class="fa fa-paperclip"></i> Select image</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="default" name="image" value="<?= $user_login['image']; ?>" required />
                                            </span>
                                            <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control text-center bg-light" value="<?= $user_login['nama']; ?>" style="width:100" id="nama" name="nama" aria-describedby="emailHelp" readonly>
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control text-center bg-light" value="<?= $user_login['email']; ?>" id="email" name="email" aria-describedby="emailHelp" readonly>
                                </div>
                                <div class="form-group">
                                    <select class="btn btn-success btn-sm dropdown-toggle" id="jenis_kelamin" name="jenis_kelamin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <option value="<?= $user_login['jenis_kelamin']; ?>"><?= $user_login['jenis_kelamin']; ?></option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $user_login['tanggal']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control text-center" name="no_telepon" id="no_telepon" value="<?= $user_login['no_telepon']; ?>">
                                </div>

                                <div class="form-group">
                                    <a href="<?= base_url() ?>user/ganti_pass">Ganti Password</a>
                                </div>
                                <button type="submit" class="btn btn-success btn-user btn-block">
                                    Simpan
                                </button>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</section>