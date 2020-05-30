<?php

class Order_model extends CI_Model
{
    public function tampil_keranjangByuser($id_user)
    {
        return $this->db->get_where('tb_keranjang', ['id_user' => $id_user])->row_array();
    }
    public function tampil_keranjangByuser2($email)
    {
        // $this->db->get_where('tb_keranjang', ['id_user' => $id_user])->row_array();
        $this->db->select(
            'tb_keranjang.*, tb_barang.id_barang AS id_barang, tb_barang.id_barang , tb_barang.nama_barang , tb_barang.harga, tb_barang.gambar',
            'tb_keranjang.*,tb_user.email AS email,tb_user.email tb_user.nama_user , tb_user.id_user'
        );
        $this->db->join('tb_barang', 'tb_barang.id_barang = tb_keranjang.id_barang');
        $this->db->join('tb_user', 'tb_user.email = tb_keranjang.email');
        $this->db->from('tb_keranjang');
        $this->db->where(array('tb_keranjang.email' => $email));
        // $this->db->where(array('category.id' => 10));
        $query = $this->db->get();
        return $query->result();
    }

    public function tambah_keranjang($data, $table)
    {
        $this->db->insert($table, $data);
    }


    public function tambah_invoice($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function tambah_bukti($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function tampil_buktiById($id_invoice)
    {
        return $this->db->get_where('tb_bukti', ['id_invoice' => $id_invoice])->row_array();
    }
    public function tampil_bukti()
    {
        return $this->db->get('tb_bukti');
    }
    public function update_bukti($data, $table)
    {
        $this->db->where('id_invoice', $this->input->post('id_invoice'));
        $this->db->update($table, $data);
    }
    public function update_invoice($data, $table)
    {
        $this->db->where('id_invoice', $this->input->post('id_invoice'));
        $this->db->update($data, $table);
    }

    public function tambah_inv()
    {

        date_default_timezone_set('Asia/Jakarta');
        $email = $this->input->post('email');
        $id_alamat = $this->input->post('id_alamat');
        $kurir = $this->input->post('kurir');
        $berat = $this->input->post('berat');
        $biaya_kirim = $this->input->post('service');
        $pembayaran = $this->input->post('pembayaran');
        // $status_pembayaran = $this->input->post('status_pembayaran');
        // $status_pengiriman = $this->input->post('status_pengiriman');

        $invoice = array(
            'email'   => $email,
            'id_alamat' => $id_alamat,
            'kurir'       => $kurir,
            'berat'     => $berat,
            'biaya_kirim'     => $biaya_kirim,
            'pembayaran'     => $pembayaran,
            'tgl_pesan'     => date('Y-m-d H:i:s'),
            'batas_bayar'     => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y')))

        );
        $this->db->insert('tb_invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        $biaya_kirim = $this->input->post('biaya_kirim');
        $subtotal = $this->input->post('sub_total');
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'id_invoice'    => $id_invoice,
                'id_barang'     => $items['id'],
                'nama_barang'   => $items['name'],
                'jumlah'        => $items['qty'],
                'harga'         => $items['price'],
                'biaya_kirim'   => $biaya_kirim,
                'sub_total'     => $subtotal,
            );
            $this->db->insert('tb_pesanan', $data);

            // redirect('produk/invoice');
        }
        return TRUE;
    }
    public function tampil_invoice()
    {
        $this->db->select(
            'tb_invoice.*, tb_alamat.email AS email, tb_alamat.email , tb_alamat.id_alamat, tb_alamat.alamat_lengkap, tb_alamat.nama_penerima,tb_alamat.jenis_alamat'
            // 'tb_keranjang.*,tb_user.email AS email,tb_user.email tb_user.nama_user , tb_user.id_user'
        );


        $this->db->join('tb_alamat', 'tb_alamat.email = tb_invoice.email');
        // $this->db->join('tb_user', 'tb_user.email = tb_keranjang.email');
        $this->db->from('tb_invoice');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function ambil_id_inv($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->limit(1)
            ->get('tb_invoice');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }

    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)
            ->get('tb_pesanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }


    public function tampil_ongkir($email)
    {
        return $this->db->get_where('tb_invoice', ['email' => $email])->row_array();
    }

    public function tampil_penjualan()
    {
        $this->db->select(
            'tb_pesanan.*, tb_invoice.id_invoice AS id_invoice, tb_invoice.id_invoice , tb_invoice.biaya_kirim, tb_invoice.tgl_pesan'
            // 'tb_keranjang.*,tb_user.email AS email,tb_user.email tb_user.nama_user , tb_user.id_user'
        );


        $this->db->join('tb_invoice', 'tb_invoice.id_invoice = tb_pesanan.id_invoice');
        // $this->db->join('tb_user', 'tb_user.email = tb_keranjang.email');
        $this->db->from('tb_pesanan');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
}
