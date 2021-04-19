<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('email') && $this->session->userdata('role_id') == 2) {
            redirect('tutor');
        } else if ($this->session->userdata('email') && $this->session->userdata('role_id') == 3) {
            redirect('pelajar');
        }
    }
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
