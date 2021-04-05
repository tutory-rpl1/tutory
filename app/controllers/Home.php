<?php 

    class home extends Controller{
        public function index(){

            $data['judul'] = 'Tutory';
            $data['nama'] = $this->model('User_model')->getUser();
            $this->view('template/header',$data);
            $this->view('Home/index', $data);
            $this->view('template/footer');

        }

    }

?>