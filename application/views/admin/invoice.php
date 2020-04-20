<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="card shadow mb-4">

        <div class="card-body">

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
                            <td>10004321</td>
                            <td>Naufal</td>
                            <td>Ds.kalisari</td>
                            <td>02/03/2020, jam 11.00</td>
                            <td>03/03/2020, jam 11.00</td>
                            <td>Sudah dibayar</td>
                            <td>Belum dikonfirmasi
                                <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#updateModal"><i>Update</i></button>

                            </td>
                            <td>
                                <a class="btn btn-success btn-sm" href="<?= base_url() ?>admin/detail_pesan">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->