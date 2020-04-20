<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus fa-sm">Tambah Produk</i></button>
    <br><br>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">

        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Barang</th>
                            <th>Kategori</th>
                            <th>gambar</th>
                            <th>harga</th>
                            <th>stok</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        foreach ($barang as $brg) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $brg->nama_barang ?>
                                <td><?= $brg->id_kategori  ?></td>
                                <td><?= $brg->gambar ?></td>
                                <td><?= $brg->harga ?></td>
                                <td><?= $brg->stok ?></td>
                                <td><?= $brg->deskripsi ?></td>
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