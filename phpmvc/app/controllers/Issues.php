<?php

class Issues extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Issues';
        $data['issues'] = $this->model('Issues_model')->getAllIssues();
        $this->view('templates/header', $data);
        $this->view('issues/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Issues';
        $data['issues'] = $this->model('Issues_model')->getIssuesById($id);
        $this->view('templates/header', $data);
        $this->view('issues/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if( $this->model('Issues_model')->tambahIssues($_POST) > 0 ) {
            header('Location: ' . BASEURL . '/issues');
            exit;
        }
    }
}