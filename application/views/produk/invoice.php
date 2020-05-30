<!-- Begin Page Content -->
<div class="container-fluid ">

    <!-- Page Heading -->

    <br><br>
    <!-- DataTales Example -->
    <div class="card shadow mt-5">

        <div class="card-body mt-4">

            <div class="table-responsive ">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id invoice</th>
                            <th>Nama Pemesan</th>
                            <th>Alamat</th>
                            <th>Tanggal Pesan </th>
                            <th>Batas Pembayaran</th>
                            <th>Status Pembayaran</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php

                            foreach ($invoice as $inv) : ?>
                        <tr>
                            <td><?= $inv->id_invoice ?></td>
                            <td><?= $inv->nama_penerima ?>
                            <td><?= $inv->alamat_lengkap ?></td>
                            <td><?= $inv->tgl_pesan ?></td>
                            <td><?= $inv->batas_bayar ?></td>
                            <td><?= $inv->status_pembayaran ?></td>
                            <td><?= anchor('produk/detail_pesan/' . $inv->id_invoice, '<div class="btn btn-success btn-sm">Detail</div>') ?>

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