<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>
    <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahBarangPengelola"><i class="fas fa-plus fa-sm">Tambah Produk</i></button>
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
                                    <a href="" class="btn btn-primary btn-sm " id="edit_brg" data-toggle="modal" data-target="#editBarangPengelola" data-id_barang="<?= $brg->id_barang; ?>" data-nama="<?= $brg->nama_barang; ?>" data-kategori="<?= $brg->id_kategori; ?>" data-gambar="<?= $brg->gambar; ?>" data-harga="<?= $brg->harga; ?>" data-stok="<?= $brg->stok; ?>" data-deskripsi="<?= $brg->deskripsi; ?>"><i class="fa fa-edit"></i></a>
                                </td>
                                <td>
                                    <a href="<?= base_url() ?>Pengelola/delete_barang/<?= $brg->id_barang ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data <?= $brg->nama_barang; ?> ')"><i class="fa fa-trash"></i></a>
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