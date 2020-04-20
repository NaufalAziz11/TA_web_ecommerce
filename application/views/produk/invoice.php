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
                            <td>10004321</td>
                            <td>Naufal</td>
                            <td>Ds.kalisari</td>
                            <td>02/03/2020, jam 11.00</td>
                            <td>03/03/2020, jam 11.00</td>
                            <td>Belum dibayar</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="<?= base_url() ?>produk/detail_pesan">Detail</a>
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