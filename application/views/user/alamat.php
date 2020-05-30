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
                        <div>
                            <p>Nama Kamu</p>
                        </div>
                        <br>
                        <div>
                            <p>Nomor Telepon</p>
                        </div>
                        <br>
                        <br>
                        <div>
                            <label for="">Provinsi</label>
                        </div>
                        <br>
                        <div>
                            <label for="">Kota</label>
                        </div>
                        <br>
                        <!-- <div>
                            <p>Kecamatan</p>
                        </div>
                        <br>
                        <div>
                            <p>Kode Pos</p>
                        </div>
                        <br> -->
                        <div>
                            <p>Alamat Lengkap</p>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <form>
                            <br>
                            <div class="form-group">
                                <input type="text" class="form-control text-center" style="width:100" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control text-center" style="width:100" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <select id="provinsi" onchange="get_kota()" class="form-control provinsi" name="provinsi"></select>
                            </div>
                            <div class="form-group">
                                <select id="kota" class="form-control kota" name="kota"></select>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <br>

                            <button type="submit" class="btn btn-success btn-lg btn-block">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>