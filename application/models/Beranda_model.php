<?php

class Mahasiswa_model extends CI_model
{
    public function getAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }


    public function getKategoriById($id)
    {
        return $this->db->get_where('kategori', ['id' => $id])->row_array();
    }
}
