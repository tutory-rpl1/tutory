<?php 

    class home extends Controller{
        public function index(){

            $data['judul'] = 'Tutory';
            $data['nama'] = $this->model('User_model')->getUser();
            $this->view('template/header',$data);
            $this->view('Home/hero', $data);
            $this->view('Home/events', $data);
            $this->view('Home/tutors', $data);
            $this->view('Home/testi', $data);
            // $this->view('Home/index', $data);
            $this->view('template/footer');

        }

    }

?>