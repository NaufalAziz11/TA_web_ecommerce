<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="card shadow mb-4">

        <div class="card-body">
            <h4>Invoice</h4>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id invoice</th>
                            <th>Nama pemesan</th>
                            <th>Alamat</th>
                            <th>Tanggal Pesan</th>
                            <th>Batas Pembayaran</th>
                            <th>Status Pembayaran</th>
                            <th>Status Pengiriman</th>
                            <th>Aksi</th>
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
                            <td><?= $inv->status_pengiriman ?></td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm " id="update_invoice" data-toggle="modal" data-target="#updateinvoiceModal" data-id_invoice="<?= $inv->id_invoice; ?>" data-status_pembayaran="<?= $inv->status_pembayaran; ?>"><i class="fa fa-edit">Update</i></a>
                                <a class="btn btn-success btn-sm" href="<?= base_url('admin/detail_pesan/' . $inv->id_invoice) ?>">Detail</a>
                            </td>

                        </tr>
                    <?php endforeach ?>


                    </tbody>
                </table>
            </div>
            <br>
            <h4>Bukti Transfer</h4>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id invoice</th>
                            <th>Nama Pengirim</th>
                            <th>Kode Transfer</th>
                            <th>Bukti Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php

                            foreach ($bukti as $bukti) : ?>
                        <tr>
                            <td><?= $bukti->id_invoice ?></td>
                            <td><?= $bukti->bukti_pengirim ?>
                            <td><?= $bukti->bukti_kode ?></td>
                            <td><a href="<?= base_url('assets/images/bukti/') . $bukti->bukti_foto; ?>" data-lightbox="example-1"><img class="example-image" style="height: 80px ; width: 90px" src="<?= base_url('assets/images/bukti/') . $bukti->bukti_foto; ?>"></a></td>

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