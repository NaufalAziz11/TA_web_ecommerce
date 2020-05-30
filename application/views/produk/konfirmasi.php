<section class="ftco-section mt-4">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 heading-section text-left ftco-animate mt-5">
                <a style="color : green; text-decoration:none">Masukkan foto struk, kode transfer dan nama pengirim Sebagai bukti pembayaran</a>
                <br><a style="color : green; text-decoration:none">No. Rek Anyar Tani 180239102397</a>
                <hr>
            </div>
            <div class="container">
                <form action="<?= base_url(); ?>produk/update_bukti" method="post" enctype="multipart/form-data">
                    <div class="row ftco-animate">
                        <div class="col-md-12 text-center">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                                    <span class="btn btn-theme02 btn-file">
                                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" class="default" name="bukti_foto" required />
                                    </span>
                                    <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                </div>
                            </div>
                            <br>

                            <p>Nama Pengirim</p>
                            <input type="hidden" class="text-center" name="id_invoice" value="<?= $bukti['id_invoice'] ?>" style="width:500px; height:50px" required>
                            <input type="text" class="text-center" name="nama_pengirim" style="width:500px; height:50px" placeholder="ex:Naufal Aziz" required><br><br>
                            <p>Kode Transfer</p>
                            <input type="text" class="text-center" name="kode" placeholder="ex:18019237" style="width:500px; height:50px"><br><br>
                            <button type="submit" class="btn btn-success" style="width:500px;">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
</section>