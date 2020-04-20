<?php

class Produk_model extends CI_Model
{
    public function tampil_barang()
    {
        return $this->db->get('tb_barang');
    }
    public function tampil_kategori()
    {
        return $this->db->get('tb_kategori');
    }
    public function tampil_kategoriByname($name)
    {
        return $this->db->get_where('tb_kategori', ['nama_kategori' => $name])->row_array();
    }
    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
