<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Tutory';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('home/event', $data);
        $this->load->view('home/tutors', $data);
        $this->load->view('home/testi', $data);
        $this->load->view('templates/about', $data);
        $this->load->view('templates/footer');
    }
}
