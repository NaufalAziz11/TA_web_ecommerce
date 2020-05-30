<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data User(karyawan)</h1>
    <?= $this->session->flashdata('message'); ?>
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahuserModal"><i class="fas fa-plus fa-sm">Tambah User</i></button>
    <br><br>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Email</th>
                            <th>Level user</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        foreach ($user as $user) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $user->email ?>
                                <td><?= $user->level_id  ?></td>

                                <td>
                                    <a href="<?= base_url() ?>Pengelola/delete_user/<?= $user->email ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data <?= $user->nama; ?> ')"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->