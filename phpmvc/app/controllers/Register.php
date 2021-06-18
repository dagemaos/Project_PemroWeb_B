<?php

class Register extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Akun';
        $this->view('templates/header', $data);
        $this->view('register/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Register_model')->tambahUser($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/login');
            exit;
        }else {
            Flasher::setFlash('berhasil', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/register');
            exit;   
    }
    }

}