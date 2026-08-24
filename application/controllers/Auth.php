<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    // Tambahkan konstruktor ini untuk memuat session secara otomatis
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
    
    // Menampilkan halaman login
    public function index() {
        $this->load->view('v_login');
    }

    // Proses pengecekan login
    public function proses_login() {
        $username_admin = "admin";
        $password_admin = "admin123"; // Ganti password sesuai keinginan

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username == $username_admin && $password == $password_admin) {
            // Set session jika berhasil
            $data_session = array(
                'username' => $username,
                'status' => "login"
            );
            $this->session->set_userdata($data_session);

            // Arahkan ke dashboard admin (misal: views/admin/v_dashboard.php)
            redirect('admin/dashboard'); 
        } else {
            // Jika salah, kembalikan ke halaman login dengan alert
            echo "<script>alert('Username atau Password salah!'); window.location='".site_url('auth')."';</script>";
        }
    }

    // Fungsi Logout (Opsional)
    public function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }
}