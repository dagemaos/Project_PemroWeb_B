<?php

class User extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar User';
        $data['user'] = $this->model('User_model')->getAlluser();
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail User';
        $data['user'] = $this->model('User_model')->getUserById($id) ;
        $this->view('templates/header', $data);
        $this->view('user/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('User_model')->tambahUser($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        }else {
            Flasher::setFlash('berhasil', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;   
    }
    }

    public function hapus($id)
    {
        if( $this->model('User_model')->hapusUser($id) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        }else {
            Flasher::setFlash('berhasil', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;   
    }
    }
}