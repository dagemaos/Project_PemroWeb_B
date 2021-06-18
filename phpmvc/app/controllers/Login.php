<?php

class Login extends Controller {
	public function index()
	{
		$data['judul'] = 'Halaman Login';
		
		$this->view('templates/header', $data);
		$this->view('login/index', $data);
        $this->view('templates/footer');
	}

	public function prosesLogin() {
		if($row = $this->model('Login_model')->checkLogin($_POST) > 0 ) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['nama'] = $row['nama'];
				$_SESSION['session_login'] = 'sudah_login'; 

				//$this->model('LoginModel')->isLoggedIn($_SESSION['session_login']);
				
				header('location: '. BASEURL . '/home');
		} else {
			Flasher::setFlash('Username / Password','salah.','danger');
			header('location: '. BASEURL . '/login');
			exit;	
		}
	}
}