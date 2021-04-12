<?php
defined('BASEPATH') or exit('No direct script access allowed');

class masuk extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login tutory';
        $this->load->view('templates/header', $data);
        $this->load->view('login/index', $data);
        $this->load->view('templates/footer');
    }
}
