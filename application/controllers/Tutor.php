<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tutor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        } else if ($this->session->userdata('role_id') != 2) {
            redirect('pelajar');
        }
    }
    public function index()
    {
        echo 'Selamat datang tutor';
    }
    public function getAllTutor()
    {
        echo  'HALOOO';
    }
}
