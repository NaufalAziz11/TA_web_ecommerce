<section class="ftco-section mt-4">
    <div class="container">
        <div class="row ">
            <div class="col-md-12 heading-section text-left ftco-animate mt-5">
                <hr>
            </div>
            <div class="container">
                <div class="col-md-12 heading-section text-left ftco-animate mt-5">
                    <div class="row no-gutters ftco-services">
                        <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                            <a class="media block-6 services mb-md-0 mb-4" style="text-decoration:none">
                                <img src="<?= base_url() ?>assets/images/icons/icons8-box-80.png">
                                <div class="media-body">
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" id="sdp" style="width:20px; height:20px" disabled>
                                    </div>
                                </div>
                            </a>

                        </div>
                        <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                            <a class="media block-6 services mb-md-0 mb-4" style="text-decoration:none">

                                <img src="<?= base_url() ?>assets/images/icons/icons8-shipped-80.png">

                                <div class="media-body">
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" id="sdk" style="width:20px; height:20px" disabled>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                            <a class="media block-6 services mb-md-0 mb-4" style="text-decoration:none">

                                <img src="<?= base_url() ?>assets/images/icons/icons8-tick-box-80.png">

                                <div class="media-body">
                                    <div class="form-check form-check-inline ml-3">
                                        <input class="form-check-input" type="checkbox" id="dtrm" style="width:20px; height:20px" disabled>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                    <hr>
                </div>
                <div class="container ftco-animate">
                    <a style="color : black; text-decoration:none">Status Pemesanan</a>
                    <input type="text" id="id_invoice" value="<?= $invoice->id_invoice ?>">
                    <input type="hidden" id="status_pengiriman" value="<?= $invoice->status_pengiriman ?>">
                    <hr>
                    <div class="col-lg-12">
                        <div class="form-check form-check-inline check-on ml-3">
                            <input class="form-check-input ccd" type="checkbox" id="sedang_diproses" style="width:20px; height:20px" disabled>
                        </div>
                        <div class="form-check form-check-inline ml-3">
                            <span><b>Pesanan sedang diproses</b><br>Melakukan konfirmasi dan verifikasi pembayaran
                                lalu packing barang
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <div class="form-check form-check-inline check-on ml-3">
                            <input class="form-check-input" type="checkbox" id="sedang_dikirim" style="width:20px; height:20px" disabled>
                        </div>
                        <div class="form-check form-check-inline ml-3">
                            <span><b>Pesanan sedang dikirim</b><br>Pesanan dalam pengiriman yang sedang dikirim oleh kurir
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-12">
                        <div class="form-check form-check-inline check-on ml-3">
                            <input class="form-check-input" type="checkbox" id="diterima" style="width:20px; height:20px" disabled>
                        </div>
                        <div class="form-check form-check-inline ml-3">
                            <span><b>Pesanan telah diterima</b><br>Pesanan sudah diterima oleh pembeli
                            </span>
                        </div>
                    </div>
                </div>

</section>