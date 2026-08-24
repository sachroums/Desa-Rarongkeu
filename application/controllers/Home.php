<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
            // Mengambil 3 berita terbaru dari database
        $this->load->helper('text'); // Wajib untuk character_limiter
        $data['berita'] = $this->db->order_by('id_berita', 'DESC')->limit(3)->get('berita')->result();
        $data['galeri_beranda'] = $this->db->order_by('id_galeri', 'DESC')->limit(6)->get('galeri')->result();
        // Kirim data ke view
        $this->load->view('v_home', $data);
    }

    public function profil()
    {
        $this->load->view('v_profil');
    }

    // Ubah method galeri() untuk mengambil data dari tabel 'galeri'
    public function galeri() 
    {
        $this->load->helper('text'); // Agar character_limiter berfungsi jika dipakai
        $this->db->order_by('id_galeri', 'DESC'); // Foto terbaru muncul di atas
        $data['galeri'] = $this->db->get('galeri')->result();
        
        $this->load->view('v_galeri', $data); // Pastikan ini nama view front-end Anda
    }

    // Ubah method berita() untuk mengambil data dari tabel 'berita'
    public function berita()
    {
        $this->load->helper('text'); // Agar character_limiter berfungsi
        $this->db->order_by('id_berita', 'DESC'); // Berita terbaru muncul di atas
        $data['berita'] = $this->db->get('berita')->result();
        
        $this->load->view('v_berita', $data);
    }

    public function sarana()
    {
        $this->load->view('v_sarana');
    }

    public function perangkat()
    {
        $data['perangkat'] = $this->db->get('perangkat_desa')->result();
        $this->load->view('v_perangkat', $data); // sesuaikan nama view front-end Anda
    }

    public function potensi() {
        $this->load->helper('text'); // Agar character_limiter berfungsi pada deskripsi potensi
        $data['potensi'] = $this->db->get('potensi')->result(); // Mengambil data potensi dari database
        $this->load->view('v_potensi', $data); // Mengirim data ke view v_potensi[cite: 3]
    }

    // Ubah method detail_berita() agar mengambil data berdasarkan id_berita dari database
    public function detail_berita($id) {
        $data['berita'] = $this->db->get_where('berita', ['id_berita' => $id])->row();
        
        // Jika berita berdasarkan ID tidak ditemukan, kembalikan ke halaman berita
        if(empty($data['berita'])) {
            redirect('home/berita');
        }

        $this->load->view('v_detail_berita', $data);
    }

    public function detail_sarana($id = 1) {
        // (Kode sarana tetap biarkan seperti semula...)
        $data_sarana = [
            1 => [
                'id' => 1,
                'nama' => 'Kantor/Balai Desa Rarongkeu',
                'kategori' => 'Pemerintahan',
                'gambar' => base_url('assets/img/kantor.jpg'),
                'deskripsi' => 'Kantor/Balai Desa Rarongkeu merupakan Tempat pelaksanaan musyawarah desa, rapat warga, dan acara kemasyarakatan. dan koordinasi pemerintahan yang dirancang untuk mengakomodasi berbagai kegiatan sosial desa sehari-hari. Berfungsi sebagai tempat pelayanan kependudukan, pengurusan surat-surat penting warga, serta pusat musyawarah dan pengambilan kebijakan tingkat desa.'
            ],
            2 => [
                'id' => 2,
                'nama' => 'Puskesmas Pembantu (Pustu)',
                'kategori' => 'Kesehatan',
                'gambar' => base_url('assets/img/posyandu.jpg'),
                'deskripsi' => 'Puskesmas Pembantu (Pustu) Desa Rarongkeu menyediakan fasilitas layanan kesehatan dasar dan posyandu terpadu bagi masyarakat. Menjadi garda terdepan dalam pelayanan kesehatan ibu, anak, lansia, serta penanganan medis darurat tingkat pertama di desa.'
            ],
            3 => [
                'id' => 3,
                'nama' => 'Gedung Sekolah Dasar',
                'kategori' => 'Pendidikan',
                'gambar' => base_url('assets/img/sekolah.jpg'),
                'stats' => [
                    ['label' => 'Total Murid', 'value' => '142 Siswa'],
                    ['label' => 'Tenaga Pendidik', 'value' => '8 Guru'],
                    ['label' => 'Ruang Kelas', 'value' => '6 Kelas']
                ],
                'infrastruktur' => [
                    '2 Gedung Utama Blok Kelas',
                    '1 Perpustakaan',
                    'Ruang Kantor Kepala Sekolah & Guru',
                    'Lapangan Upacara & Olahraga'
                ],
                'struktur' => 'Dipimpin oleh 1 Kepala Sekolah, dan 6 Guru Kelas, 1 guru agama & 1 guru bahasa inggris, 1 Tenaga Administrasi, dan 2 Petugas Kebersihan.'
            ],
            4 => [
                'id' => 4,
                'nama' => 'Lapangan Olahraga Desa',
                'kategori' => 'Olahraga',
                'gambar' => base_url('assets/img/lapangan.jpg'),
                'stats' => [
                    ['label' => 'Luas Area', 'value' => '± 1.200 m²'],
                    ['label' => 'Jenis Lapangan', 'value' => 'Tanah'],
                    ['label' => 'Kondisi', 'value' => 'Layak Pakai']
                ],
                'infrastruktur' => [
                    'Lapangan Voli'
                ],
                'struktur' => 'Dikelola secara gotong royong oleh Karang Taruna, Pemuda Desa, dan Pemerintah Desa Rarongkeu.'
            ],
            6 => [ 
                'id' => 6,
                'nama' => 'Masjid & Sarana Ibadah',
                'kategori' => 'Keagamaan',
                'gambar' => base_url('assets/img/masjid.jpg'),
                'stats' => [
                    ['label' => 'Kapasitas Jamaah', 'value' => '400 Orang'],
                    ['label' => 'Luas Kompleks', 'value' => '600 m²'],
                    ['label' => 'Aktivitas BTQ', 'value' => 'Setiap Sore']
                ],
                'infrastruktur' => [
                    'Ruang Utama Sholat Berjamaah',
                    'Tempat Wudhu & Toilet Bersih',
                    'Menara Masjid & Sound System Utama',
                    'Baca Tulis Al-Qur\'an (BTQ)'
                ],
                'struktur' => 'Dikelola oleh Pengurus Badan Kesejahteraan Masjid (BKM) Desa Rarongkeu dan tokoh agama setempat.'
            ]
        ];

        $data['sarana'] = isset($data_sarana[$id]) ? $data_sarana[$id] : $data_sarana[1];
        $this->load->view('v_detail_sarana', $data);
    }
}