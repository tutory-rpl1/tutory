<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelas extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kelas';
        $this->load->view('templates/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('mahasiswa', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('pelajar/navbar', $data);
        } else {
            $this->load->view('templates/navbar');
        }
        $this->load->view('kelas/index');
        $this->load->view('templates/footer');
    }
}
