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
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/issues');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/issues');
            exit;
        }
    }

    public function hapus($id_issues)
    {
        if( $this->model('Issues_model')->hapusIssues($id_issues) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/issues');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/issues');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Issues_model')->getIssuesById($_POST['id']));
    }

    public function ubah()
    {
        if( $this->model('Issues_model')->ubahIssues($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/issues');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/issues');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Issues';
        $data['issues'] = $this->model('Issues_model')->cariIssues();
        $this->view('templates/header', $data);
        $this->view('issues/index', $data);
        $this->view('templates/footer');
    }
}