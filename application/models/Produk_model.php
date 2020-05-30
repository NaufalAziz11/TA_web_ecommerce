<?php

class Produk_model extends CI_Model
{
    public function tampil_barang()
    {
        $this->db->select(
            'tb_barang.*, tb_kategori.id_kategori AS id_kategori, tb_kategori.id_kategori , tb_kategori.nama_kategori'
        );
        $this->db->from('tb_barang');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_barang.id_kategori');

        // $this->db->where(array('category.id' => 10));
        $query = $this->db->get();
        return $query->result();
        // return $this->db->get('tb_barang');
    }
    public function tampilBarangById($id)
    {
        return $this->db->get_where('tb_barang', ['id_barang' => $id])->row_array();
    }
    public function tampil_kategori()
    {
        return $this->db->get('tb_kategori');
    }
    public function tampil_kategoriByname($name)
    {
        return $this->db->get_where('tb_kategori', ['nama_kategori' => $name])->row_array();
    }
    public function tampil_barangBykategori($kategori)
    {
        return $this->db->get_where('tb_barang', ['id_kategori' => $kategori])->row_array();
    }
    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function hitungtotal($email)
    {
        $this->db->select_sum('total');
        $this->db->from('tb_keranjang');
        $this->db->where(array('tb_keranjang.email' => $email));
        return $this->db->get('')->row();
    }
    public function editBarang($data, $table)
    {
        $this->db->where('id_barang', $this->input->post('id_barang'));
        $this->db->update($table, $data);
    }
    public function deleteBarang($data, $table)
    {
        $this->db->where($data);
        $this->db->delete($table);
    }
    public function find($id)
    {
        $result = $this->db->where('id_barang', $id)
            ->limit(1)
            ->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
