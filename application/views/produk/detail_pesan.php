<!-- Begin Page Content -->
<div class="container-fluid ">

    <!-- Page Heading -->

    <br><br>
    <!-- DataTales Example -->
    <div class="card shadow mt-5">

        <div class="card-body mt-4">

            <div class="table ">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama barang</th>
                            <th>Qty</th>
                            <th>Harga&emsp;&emsp;&emsp;&emsp;</th>
                            <th>Sub total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $total = 0;
                        // if (($pesanan) || is_object($pesanan)) {
                        foreach ($pesanan as $psn) :
                            $subtotal = $psn->jumlah * $psn->harga;
                            $total += $subtotal;
                            ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $psn->nama_barang ?></td>
                                <td><?= $psn->jumlah ?></td>
                                <td><?= number_format($psn->harga, 0, ',', '.') ?></td>
                                <td><?= number_format($subtotal, 0, ',', '.') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Total&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp; :</td>
                            <td>Rp.<?= number_format($total, 0, ',', '.') ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Ongkir&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp; :</td>
                            <td>Rp.<?= number_format($ongkir['biaya_kirim'], 0, ',', '.') ?></td>

                        </tr>
                    </tfoot>
                    </tbody>
                </table>

            </div>
            <form action="<?= base_url(); ?>produk/tambah_bukti" method="post">
                <input type="hidden" id="ongkir" value="<?= $ongkir['biaya_kirim'] ?>">
                <input type="hidden" id="total" value="<?= $total ?>">
                <input type="hidden" id="id_invoice" name="id_invoice" value="<?= $psn->id_invoice ?>">
                <input type="hidden" id="status" name="status" value="<?= $invoice->status_pembayaran ?>">
                <span class="text-success" style="margin-left: 770px" id="total_semua"></span><br>

        </div>
        <br>
        <button type="submit" id="btn_submit" class="btn btn-success float-right">Bayar</button>
        <a href="<?= base_url('produk/status_pesanan/') . $invoice->id_invoice; ?>" id="btn_submit2" class="btn btn-success float-right">Lihat Pesanan</a>
        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->