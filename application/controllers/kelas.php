<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelas extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Kelas';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar');
        $this->load->view('kelas/index');
        $this->load->view('templates/footer');
    }
}
