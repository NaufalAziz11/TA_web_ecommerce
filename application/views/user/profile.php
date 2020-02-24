<section class="ftco-section mt-4">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 heading-section text-left ftco-animate mt-5">
                <a style="color : green; text-decoration:none">Halaman Profile Anda</a>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                            <div>
                                <span class="btn btn-theme02 btn-file">
                                    <span class="fileupload-new"><i class="fa fa-paperclip"></i> Ubah Foto</span>
                                    <span class="fileupload-exists"><i class="fa fa-undo"></i> Ubah Foto</span>

                                </span>
                                <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 text-right ">
                        <div>
                            <p>Username</p>
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
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control text-center" style="width:100" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Jenis Kelamin
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Laki-laki</a>
                                    <a class="dropdown-item" href="#">Perempuan</a>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control text-center" id="exampleInputPassword1">
                            </div>
                            <div class="form-group">
                                <a href="<?= base_url() ?>user/alamat">Atur Alamat</a>
                            </div>
                            <div class="form-group">
                                <a href="">Atur Password</a>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg btn-block">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>