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
        $data['kelas'] = $this->db->get('kelas')->result_array();
        $data['user'] = $this->db->get_where('mahasiswa', ['email' => $this->session->userdata('email')])->row_array();
        // echo 'Selamat datang pelajar ' . $data['user']['nama'];
        $data['title'] = 'Tutory';
        $this->load->view('templates/header', $data);
        $this->load->view('pelajar/navbar', $data);
        $this->load->view('home/event', $data);
        $this->load->view('templates/about', $data);
        $this->load->view('templates/footer');
    }

    public function viewTutor()
    {
        $data['user'] = $this->db->get_where('mahasiswa', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Cari tutor';
        $data['tutors'] = $this->db->get('tutor')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('pelajar/navbar', $data);
        $this->load->view('home/tutors', $data);
        $this->load->view('templates/about', $data);
        $this->load->view('templates/footer');
    }
    public function detailTutor($id)
    {
        $data['tutor'] = $this->db->get_where('tutor', array('id' => $id))->row_array();
        $data['user'] = $this->db->get_where('mahasiswa', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Lihat profil tutor';
        $this->load->view('templates/header', $data);
        $this->load->view('pelajar/navbar', $data);
        $this->load->view('tutor/detail', $data);
        $this->load->view('templates/about', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['user'] = $this->db->get_where('mahasiswa', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Cari tutor';
        $this->load->view('templates/header', $data);
        $this->load->view('pelajar/navbar', $data);
        $this->load->view('pelajar/index', $data);
        $this->load->view('templates/about', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['fakultas'] = $this->db->get('fakultas')->result_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $data['user'] = $this->db->get_where('mahasiswa', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Cari tutor';
        $this->load->view('templates/header', $data);
        $this->load->view('pelajar/navbar', $data);
        $this->load->view('pelajar/edit', $data);
        $this->load->view('templates/about', $data);
        $this->load->view('templates/footer');
    }

    public function prosesEdit()
    {
        $data['user'] = $this->db->get_where('mahasiswa', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');

        if ($this->form_validation->run() == false) {

            redirect('http://localhost/tutory/pelajar/edit');
        } else {
            $name = $this->input->post('nama');
            $email = $this->input->post('email');
            $nim = $this->input->post('nim');
            $jurusan = $this->input->post('jurusan');
            $fakultas = $this->input->post('fakultas');
            $upload_image = $_FILES['pp']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/img/profile';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '1024';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('pp')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar harus sesuai dengan format<br>
                    <ul>
                        <li>Format file harus png, jpg, atau gif</li>
                        <li>Size gambar harus kurang dari 1 mb</li>
                    </ul></div>');

                    redirect('pelajar/edit');

                    die;
                }
            }
            $this->db->set('nama', $name);
            $this->db->set('nim', $nim);
            $this->db->set('fakultas', $fakultas);
            $this->db->set('jurusan', $jurusan);
            $this->db->where('email', $email);
            $this->db->update('mahasiswa');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('pelajar/profile');
        }
    }
}
