<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model {
    
    // Ambil semua berita untuk halaman depan
    public function get_all_berita() {
        $this->db->order_by('id_berita', 'DESC'); // Berita terbaru di atas
        return $this->db->get('berita')->result();
    }

    // Ambil detail berita berdasarkan ID (untuk halaman "Baca Selengkapnya")
    public function get_detail_berita($id) {
        return $this->db->get_where('berita', array('id_berita' => $id))->row();
    }
}