<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login tutory';
        $this->load->view('templates/header', $data);
        $this->load->view('login/index', $data);
        $this->load->view('templates/footer');
    }
    public function regisPelajar()
    {
        $data['fakultas'] = $this->db->get('fakultas')->result_array();

        $data['title'] = 'Tutory';
        $this->load->view('templates/header', $data);
        $this->load->view('daftar/pelajar', $data);
        $this->load->view('templates/footer');
    }

    public function regisTutor()
    {
        $data['fakultas'] = $this->db->get('fakultas')->result_array();

        $data['matkul'] = $this->db->get('matkul')->result_array();

        $data['title'] = 'Tutory';
        $this->load->view('templates/header', $data);
        $this->load->view('daftar/tutor', $data);
        $this->load->view('templates/footer');
    }

    public function cekJurusan()
    {
        echo json_encode($this->db->get_where('jurusan', array('fakultas_id' => $_POST['id']))->result_object());
    }
}
