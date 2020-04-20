<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center ">

        <div class="col-lg-5 mt-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">AnyarTani</h1>
                                    <h6 class="h6 text-gray-900">Ganti Password untuk </h6>
                                    <h6 class="mb-4"><?= $this->session->userdata('reset_email') ?></h6>
                                </div>
                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url() ?>login/change_password">
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Masukkan Password..." >
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password3" name="password3" placeholder="Konfirmasi..." >
                                        <?= form_error('password3', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-user btn-block">
                                        Reset Password
                                    </button>

                                </form>
                            
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>