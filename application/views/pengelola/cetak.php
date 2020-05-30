<!DOCTYPE html>
<html>

<body>

    <b>Laporan Stok Produk</b><br><br>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama barang</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($barang as $brg) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $brg->nama_barang ?>
                    <td><?= $brg->nama_kategori  ?></td>
                    <td><?= $brg->harga ?></td>
                    <td><?= $brg->stok ?></td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
    <hr>
    <br>
    <b>Laporan Penjualan</b><br><br>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama barang</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Biaya Ongkir</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($penjualan as $pj) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $pj->nama_barang ?>
                    <td><?= $pj->harga  ?></td>
                    <td><?= $pj->jumlah ?></td>
                    <td><?= $pj->biaya_kirim ?></td>
                    <td><?= $pj->sub_total ?></td>
                </tr> <?php endforeach ?> </tbody>
    </table>

    <script>
        window.print();
    </script>

</body>

</html>