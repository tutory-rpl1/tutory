<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kelas extends CI_Controller
{


    public function index($id = 'NULL')
    {
        if ($id == 'NULL') {

            redirect('Home');
        }
        $data['kelas'] = $this->db->get_where('kelas', ['id' => $id])->row_array();
        // var_dump($data['kelas']);
        // die;
        $data['title'] = 'Kelas';
        $this->load->view('templates/header', $data);
        if ($this->session->userdata('email')) {
            $data['user'] = $this->db->get_where('mahasiswa', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('pelajar/navbar', $data);
        } else {
            $this->load->view('templates/navbar');
        }
        $this->load->view('kelas/index', $data);
        $this->load->view('templates/about');
        $this->load->view('templates/footer');
    }

    public function buat()
    {
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
            $data['matkul'] = $this->db->get('matkul')->result_array();
            $data['user'] = $this->db->get_where('tutor', ['email' => $this->session->userdata('email')])->row_array();
            $data['title'] = 'Buat Kelas';
            $this->load->view('templates/header', $data);
            $this->load->view('tutor/navbar', $data);
            $this->load->view('tutor/buatkelas', $data);
            $this->load->view('templates/about', $data);
            $this->load->view('templates/footer');
        } else {
            $sampul = 'default.jpg';
            $upload_image = $_FILES['sampul']['name'];
            if ($upload_image) {
                $config['upload_path'] = './assets/img/sampul';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '1024';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('sampul')) {
                    $sampul = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gambar harus sesuai dengan format</div>');

                    redirect('tutor/buatKelas');

                    die;
                }
            }
            $data = [
                'pembuat' => htmlspecialchars($this->input->post('pembuat', true)),
                'foto_pembuat' => htmlspecialchars($this->input->post('foto_pembuat', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
                'mulai' => htmlspecialchars($this->input->post('mulai', true)),
                'selesai' => htmlspecialchars($this->input->post('selesai', true)),
                'via' => htmlspecialchars($this->input->post('via', true)),
                'link' => htmlspecialchars($this->input->post('link', true)),
                'sampul' => $sampul,
                'date_created' => time(),

            ];
            $this->db->insert('kelas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat, Kelas anda berhasil dibuat</div>');
            redirect("Tutor");
        }
    }
}
