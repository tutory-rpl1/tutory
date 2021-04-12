<?php
defined('BASEPATH') or exit('No direct script access allowed');

class daftar extends CI_Controller
{
    public function daftar()
    {
        $data['title'] = 'Tutory';
        $this->load->view('templates/header', $data);
        $this->load->view('daftar/pelajar', $data);
        $this->load->view('templates/footer');
    }

    public function tutor()
    {
        $data['title'] = 'Tutory';
        $this->load->view('templates/header', $data);
        $this->load->view('daftar/tutor', $data);
        $this->load->view('templates/footer');
    }
}
