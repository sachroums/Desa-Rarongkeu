<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_potensi extends CI_Model {

    // Ambil data untuk ditampilkan di tabel
    public function get_data() {
        return $this->db->get('potensi');
    }

    // Tambah data baru
    public function insert_data($data) {
        return $this->db->insert('potensi', $data);
    }

    // Ambil data berdasarkan ID (hanya ada satu fungsi ini)
    public function get_by_id($id)
    {
        return $this->db->get_where('potensi', array('id' => $id))->row();
    }

    // Fungsi hapus data dengan parameter array (delete_data)
    public function delete_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    // (Opsional) Fungsi hapus alternatif jika ingin tetap disimpan
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('potensi');
    }
}