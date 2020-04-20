<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data User(karyawan)</h1>
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
                            <th>Password</th>
                            <th>Aksi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        foreach ($user as $user) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $user->email ?>
                                <td><?= $user->password  ?></td>

                                <td>
                                    <div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>
                                </td>
                                <td>
                                    <div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>
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