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
        $data['user'] = $this->db->get_where('tutor', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Tutory';
        $this->load->view('templates/header', $data);
        $this->load->view('tutor/navbar', $data);
        $this->load->view('tutor/index', $data);
        $this->load->view('templates/about', $data);
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $data['fakultas'] = $this->db->get('fakultas')->result_array();
        $data['jurusan'] = $this->db->get('jurusan')->result_array();
        $data['user'] = $this->db->get_where('tutor', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Cari tutor';
        $this->load->view('templates/header', $data);
        $this->load->view('tutor/navbar', $data);
        $this->load->view('tutor/edit', $data);
        $this->load->view('templates/about', $data);
        $this->load->view('templates/footer');
    }

    public function prosesEdit()
    {
        $data['user'] = $this->db->get_where('tutor', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'nama', 'required|trim');

        if ($this->form_validation->run() == false) {

            redirect('http://localhost/tutory/tutor/edit');
        } else {
            $name = $this->input->post('nama');
            $saweria = $this->input->post('saweria');
            $overview = $this->input->post('overview');
            $no_telepon = '62' . $this->input->post('no_telepon');
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
                    </ul>
                    </div>');

                    redirect('tutor/edit');

                    die;
                }
            }
            $this->db->set('nama', $name);
            $this->db->set('overview', $overview);
            $this->db->set('no_telepon', $no_telepon);
            $this->db->set('saweria', $saweria);
            $this->db->set('nim', $nim);
            $this->db->set('fakultas', $fakultas);
            $this->db->set('jurusan', $jurusan);
            $this->db->where('email', $email);
            $this->db->update('tutor');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
            redirect('pelajar/profile');
        }
    }


    public function buatKelas()
    {
        $data['matkul'] = $this->db->get('matkul')->result_array();
        $data['user'] = $this->db->get_where('tutor', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Buat Kelas';
        $this->load->view('templates/header', $data);
        $this->load->view('tutor/navbar', $data);
        $this->load->view('tutor/buatkelas', $data);
        $this->load->view('templates/about', $data);
        $this->load->view('templates/footer');
    }

    public function kelas($id = 'NULL')
    {
        if ($id == 'NULL') {

            redirect('Home');
        }
        $data['kelas'] = $this->db->get_where('kelas', ['id' => $id])->row_array();
        // var_dump($data['kelas']);
        // die;
        $data['title'] = 'Kelas';
        $this->load->view('templates/header', $data);
        if ($this->session->userdata('role_id') == 3) {
            $data['user'] = $this->db->get_where('mahasiswa', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('pelajar/navbar', $data);
        } else if ($this->session->userdata('role_id') == 2) {
            $data['user'] = $this->db->get_where('tutor', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('tutor/navbar', $data);
        } else {
            $this->load->view('templates/navbar');
        }
        $this->load->view('kelas/index', $data);
        $this->load->view('templates/about');
        $this->load->view('templates/footer');
    }

    public function editkelas($id)
    {
        $data['kelas'] = $this->db->get_where('kelas', ['id' => $id])->row_array();
        $data['matkul'] = $this->db->get('matkul')->result_array();
        $data['user'] = $this->db->get_where('tutor', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Edit Kelas';
        $this->load->view('templates/header', $data);
        $this->load->view('tutor/navbar', $data);
        $this->load->view('tutor/editkelas', $data);
        $this->load->view('templates/about', $data);
        $this->load->view('templates/footer');
    }
    public function updatekelas()
    {
        $id = $this->input->post('id');
        if (!$this->session->userdata('email')) {
            redirect('Home');
        }

        $this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('mulai', 'Mulai', 'required|trim');
        $this->form_validation->set_rules('selesai', 'Selesai', 'required|trim');
        $this->form_validation->set_rules('via', 'Via', 'required|trim');
        $this->form_validation->set_rules('link', 'Link', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['kelas'] = $this->db->get_where('kelas', ['id' => $id])->row_array();
            $data['matkul'] = $this->db->get('matkul')->result_array();
            $data['user'] = $this->db->get_where('tutor', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = 'Edit Kelas';
            $this->load->view('templates/header', $data);
            $this->load->view('tutor/navbar', $data);
            $this->load->view('tutor/editkelas', $data);
            $this->load->view('templates/about', $data);
            $this->load->view('templates/footer');
        } else {
            // var_dump($id);
            // die;
            $kelas = htmlspecialchars($this->input->post('kelas', true));
            $deskripsi = htmlspecialchars($this->input->post('deskripsi', true));
            $tanggal = htmlspecialchars($this->input->post('tanggal', true));
            $mulai = htmlspecialchars($this->input->post('mulai', true));
            $selesai = htmlspecialchars($this->input->post('selesai', true));
            $via = htmlspecialchars($this->input->post('via', true));
            $link = htmlspecialchars($this->input->post('link', true));

            $this->db->set('nama_kelas', $kelas);
            $this->db->set('deskripsi', $deskripsi);
            $this->db->set('tanggal', $tanggal);
            $this->db->set('mulai', $mulai);
            $this->db->set('selesai', $selesai);
            $this->db->set('via', $via);
            $this->db->set('link', $link);
            $this->db->where('id', $id);
            $this->db->update('kelas');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat, Kelas anda berhasil diedit</div>');
            redirect("Tutor");
        }
    }

    public function hapuskelas($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kelas');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kelas anda berhasil dihapus</div>');
        redirect("Tutor");
    }
}
