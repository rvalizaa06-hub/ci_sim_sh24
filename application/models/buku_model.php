<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

    private $table = 'buku';

    public function get_all()
    {
        // JOIN ke tabel kategori untuk ambil nama_kategori
        $this->db->select('buku.*, kategori.nama_kategori');
        $this->db->from($this->table);
        $this->db->join('kategori', 'kategori.id = buku.id_kategori', 'left');
        return $this->db->get()->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }
}
?>