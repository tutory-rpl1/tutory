<?php 

class Acara extends Controller{
    public function index($nama='Tio Ramadhan', $pekerjaan = 'Gamer', $umur ="20"){
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About me';
        $this->view('template/header',$data);
        $this->view('Acara/index', $data);
        $this->view('template/footer');

    }
    public function page(){
        $data['judul'] = 'Pages';

        $this->view('template/header',$data);
        $this->view('Acara/page');
        $this->view('template/footer');

    }
}

?>