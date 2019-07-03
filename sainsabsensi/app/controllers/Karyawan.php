<?php

class Karyawan extends Controller {

	public function __construct() {
		if (!isset($_SESSION['is_login'])) {
			header('Location: ' . BASEURL . '/login');
			exit();
		}
	}
	
	public function index()
	{
		$data['judul'] = 'Data Karyawan';
		$data['karyawan'] = $this->model('Karyawan_model')->getAllKaryawan();
		$this->view('templates/header', $data);
		$this->view('karyawan/index', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if( $this->model('Karyawan_model')->tambahDataKaryawan($_POST) > 0 ) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASEURL . '/karyawan');
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/karyawan');
			exit;
		}
	}

	public function hapus($id)
	{
		if( $this->model('Karyawan_model')->hapusDataKaryawan($id) > 0 ) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASEURL . '/karyawan');
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASEURL . '/karyawan');
			exit;
		}
	}

	public function getedit()
	{
		echo json_encode($this->model('Karyawan_model')->getKaryawanById($_POST['id']));


	}

	public function edit()
	{
		if( $this->model('Karyawan_model')->editDataKaryawan($_POST) > 0 ) {
			Flasher::setFlash('berhasil', 'diedit', 'success');
			header('Location: ' . BASEURL . '/karyawan');
			exit;
		} else {
			Flasher::setFlash('gagal', 'diedit', 'danger');
			header('Location: ' . BASEURL . '/karyawan');
			exit;
		}
	}
}