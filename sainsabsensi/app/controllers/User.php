<?php

class User extends Controller {

	public function __construct() {
		if (!isset($_SESSION['is_login'])) {
			header('Location: ' . BASEURL . '/login');
			exit();
		}
	}
	
	public function index()
	{
		$data['judul'] = 'Data User';
		$data['user'] = $this->model('User_model')->getAllUser();
		$this->view('templates/header', $data);
		$this->view('user/index', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if( $this->model('User_model')->tambahDataUser($_POST) > 0 ) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASEURL . '/user');
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/user');
			exit;
		}
	}

	public function hapus($id)
	{
		if( $this->model('User_model')->hapusDataUser($id) > 0 ) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASEURL . '/user');
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASEURL . '/user');
			exit;
		}
	}

	public function getedit()
	{
		echo json_encode($this->model('User_model')->getUserById($_POST['id']));


	}

	public function edit()
	{
		if( $this->model('User_model')->editDataUser($_POST) > 0 ) {
			Flasher::setFlash('berhasil', 'diedit', 'success');
			header('Location: ' . BASEURL . '/user');
			exit;
		} else {
			Flasher::setFlash('gagal', 'diedit', 'danger');
			header('Location: ' . BASEURL . '/user');
			exit;
		}
	}
}