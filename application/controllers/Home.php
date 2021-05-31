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
        $data['kelas'] = $this->db->get('kelas')->result_array();
        $data['tutors'] = $this->db->get('tutor')->result_array();
        $data['testimoni'] = $this->db->get('testimoni')->result_array();
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

    public function viewTutor($id)
    {
        $data['user'] = $this->db->get_where('tutor', array('id' => $id))->row_array();
        $data['title'] = 'Lihat profil tutor';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('tutor/index', $data);
        $this->load->view('templates/about', $data);
        $this->load->view('templates/footer');
    }
}
