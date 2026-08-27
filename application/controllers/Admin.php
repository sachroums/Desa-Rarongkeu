<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect('auth');
        }
    }

    public function dashboard() {
        // Menghitung total data dari masing-masing tabel
        $data['total_berita']    = $this->db->count_all('berita');
        $data['total_galeri']    = $this->db->count_all('galeri');
        $data['total_perangkat'] = $this->db->count_all('perangkat_desa');
        $data['total_potensi']   = $this->db->count_all('potensi');

        // Mengirim data ke view dashboard
        $this->load->view('v_dashboard', $data);
    }

    public function berita() {
    $this->load->helper('text');
    $data['berita'] = $this->db->get('berita')->result();
    $this->load->view('v_kelola_berita', $data);
    } 

    public function edit_berita($id) {
        $data['berita'] = $this->db->get_where('berita', ['id_berita' => $id])->row();
        $this->load->view('v_edit_berita', $data);
    }

    public function update_berita($id) {
        $berita_lama = $this->db->get_where('berita', ['id_berita' => $id])->row();

        $config['upload_path']   = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size']      = 2048;

        $this->load->library('upload', $config);

        $data = [
            'judul'    => $this->input->post('judul'),
            'isi'      => $this->input->post('isi'),
            'tanggal'  => $this->input->post('tanggal'),
            'kategori' => $this->input->post('kategori'),
            'gambar'   => isset($file_data['file_name']) ? $file_data['file_name'] : ''
        ];

        if ($this->upload->do_upload('gambar')) {
            if (!empty($berita_lama->gambar) && file_exists('./assets/upload/' . $berita_lama->gambar)) {
                unlink('./assets/upload/' . $berita_lama->gambar);
            }
            
            $file_data = $this->upload->data();
            $data['gambar'] = $file_data['file_name'];
        }

        $this->db->where('id_berita', $id);
        $this->db->update('berita', $data);

        redirect('admin/berita');
    }

    public function tambah_berita() {
        $this->load->view('v_tambah_berita');
    }

     public function proses_tambah_berita() {
        $judul   = $this->input->post('judul');
        $isi     = $this->input->post('isi');
        $tanggal = date('Y-m-d');

        $config['upload_path']   = './assets/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);

        $gambar = '';
        if ($this->upload->do_upload('gambar')) {
            $fileData = $this->upload->data();
            $gambar   = $fileData['file_name'];
        }

        $data = array(
            'judul'   => $judul,
            'isi'     => $isi,
            'tanggal' => $tanggal,
            'gambar'  => $gambar
        );

        $this->db->insert('berita', $data);
        redirect('admin/berita');
    }

    public function hapus_berita($id) {
        $this->db->where('id_berita', $id);
        $this->db->delete('berita');
        redirect('admin/berita');
    }

    public function galeri()
    {
        $data['galeri'] = $this->db->get('galeri')->result();
        $this->load->view('Admin/v_galeri', $data);
    }

    public function tambah_galeri()
    {
        $this->load->view('Admin/v_tambah_galeri');
    }

    public function proses_tambah_galeri()
    {
        $config['upload_path']   = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $file_data = $this->upload->data();
            $data = [
                'judul'     => $this->input->post('judul'),
                'kategori'  => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                'gambar'    => $file_data['file_name']
            ];

            $this->db->insert('galeri', $data);
            redirect('admin/galeri');
        }
    }

    public function edit_galeri($id)
    {
        $data['galeri'] = $this->db->get_where('galeri', ['id_galeri' => $id])->row();
        $this->load->view('Admin/v_edit_galeri', $data);
    }

    public function update_galeri($id)
    {
        $data = [
            'judul'     => $this->input->post('judul'),
            'kategori'  => $this->input->post('kategori'),
            'deskripsi' => $this->input->post('deskripsi')
        ];

        if (!empty($_FILES['gambar']['name'])) {
            $config['upload_path']   = './assets/upload/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $galeri_lama = $this->db->get_where('galeri', ['id_galeri' => $id])->row();
                if($galeri_lama->gambar && file_exists('./assets/upload/'.$galeri_lama->gambar)){
                    unlink('./assets/upload/'.$galeri_lama->gambar);
                }
                
                $file_data = $this->upload->data();
                $data['gambar'] = $file_data['file_name'];
            }
        }

        $this->db->where('id_galeri', $id);
        $this->db->update('galeri', $data);
        redirect('admin/galeri');
    }

    public function hapus_galeri($id)
    {
        $galeri = $this->db->get_where('galeri', ['id_galeri' => $id])->row();
        if($galeri->gambar && file_exists('./assets/upload/'.$galeri->gambar)){
            unlink('./assets/upload/'.$galeri->gambar);
        }

        $this->db->where('id_galeri', $id);
        $this->db->delete('galeri');
        redirect('admin/galeri');
    }

    public function perangkat()
    {
        $data['perangkat'] = $this->db->get('perangkat_desa')->result();
        $this->load->view('Admin/v_perangkat', $data);
    }

    public function tambah_perangkat()
    {
        $config['upload_path']   = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            $gambar = $this->upload->data('file_name');
            $data = [
                'nama'    => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'tugas'   => $this->input->post('tugas'),
                'foto'    => $gambar
            ];
            $this->db->insert('perangkat_desa', $data);
            redirect('admin/perangkat');
        } else {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }
    }

    public function edit_perangkat($id)
    {
        // Fungsi ini bisa dibiarkan atau dihapus karena menggunakan modal pop-up
    }

    public function hapus_perangkat($id)
    {
        $perangkat = $this->db->get_where('perangkat_desa', ['id_perangkat' => $id])->row();
        if($perangkat && $perangkat->foto) {
            $target = './assets/upload/' . $perangkat->foto;
            if(file_exists($target)) { unlink($target); }
        }
        
        $this->db->delete('perangkat_desa', ['id_perangkat' => $id]);
        redirect('admin/perangkat');
    }

    public function update_perangkat()
    {
        $id = $this->input->post('id_perangkat');
        
        $data = array(
            'nama'    => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'tugas'   => $this->input->post('tugas')
        );

        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path']   = './assets/upload/';
            $config['allowed_types'] = 'jpg|jpeg|png';
            $config['max_size']      = '2048';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $perangkat_lama = $this->db->get_where('perangkat_desa', array('id_perangkat' => $id))->row();
                if ($perangkat_lama && !empty($perangkat_lama->foto)) {
                    $file_path = './assets/upload/' . $perangkat_lama->foto;
                    if (file_exists($file_path)) {
                        unlink($file_path);
                    }
                }

                $file_data = $this->upload->data();
                $data['foto'] = $file_data['file_name'];
            }
        }

        $this->db->where('id_perangkat', $id);
        $this->db->update('perangkat_desa', $data);

        redirect('admin/perangkat');
    }

    public function potensi()
    {
        $this->load->model('Model_potensi');
        $data['potensi'] = $this->Model_potensi->get_data()->result();
        $this->load->view('Admin/v_admin_potensi', $data);
    }

    public function proses_tambah_potensi()
    {
        $config['upload_path']   = './assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['max_size']      = 2048;
        
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $file_data = $this->upload->data();
            $data = [
                'nama_potensi' => $this->input->post('nama_potensi'),
                'kategori'     => $this->input->post('kategori'),
                'deskripsi'    => $this->input->post('deskripsi'),
                'foto'         => $file_data['file_name']
            ];

            $this->load->model('Model_potensi');
            $this->Model_potensi->insert_data($data);
            redirect('admin/potensi');
        }
    }

    public function tambah_potensi()
    {
        $this->load->view('Admin/v_tambah_potensi');
    }

    public function edit_potensi($id)
    {
        $this->load->model('Model_potensi');
        $where = array('id' => $id);
        // Menggunakan query builder langsung untuk mengambil baris data tunggal berdasarkan ID
        $data['potensi'] = $this->db->get_where('potensi', $where)->row();
        
        $this->load->view('Admin/v_edit_potensi', $data);
    }

public function update_potensi($id)
    {
        $this->load->model('Model_potensi');

        // Data dasar yang akan di-update
        $data = [
            'nama_potensi' => $this->input->post('nama_potensi'),
            'kategori'     => $this->input->post('kategori'),
            'deskripsi'    => $this->input->post('deskripsi')
        ];

        // Cek apakah user mengunggah foto baru
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path']   = './assets/upload/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['max_size']      = 2048;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                // Ambil data lama untuk menghapus file foto fisik sebelumnya
                $where = array('id' => $id);
                $potensi_lama = $this->db->get_where('potensi', $where)->row();
                
                if ($potensi_lama && !empty($potensi_lama->foto)) {
                    $path = './assets/upload/' . $potensi_lama->foto;
                    if (file_exists($path)) {
                        unlink($path); // Hapus foto lama
                    }
                }

                // Masukkan nama file foto baru
                $file_data = $this->upload->data();
                $data['foto'] = $file_data['file_name'];
            }
        }

        // Eksekusi update ke database
        $this->db->where('id', $id);
        $this->db->update('potensi', $data);

        redirect('admin/potensi');
    }
    
    public function hapus_potensi($id)
    {
        $this->load->model('Model_potensi');

        // Ambil data untuk menghapus file foto fisiknya
        $where = array('id' => $id);
        $potensi = $this->db->get_where('potensi', $where)->row();
        
        if (!empty($potensi && $potensi->foto)) {
            $path = './assets/upload/' . $potensi->foto;
            if (file_exists($path)) {
                unlink($path);
            }
        }

        // Eksekusi fungsi delete_data yang ada di model Anda
        $this->Model_potensi->delete_data($where, 'potensi');
        redirect('admin/potensi');
    }
}
