<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        } else if ($this->session->userdata('role_id') != 3) {
            redirect('tutor');
        }
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('mahasiswa', ['email' => $this->session->userdata('email')])->row_array();
        echo 'Selamat datang pelajar ' . $data['user']['nama'];
    }
}
