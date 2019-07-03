<?php

class Izin extends Controller {

	public function __construct() {
		if (!isset($_SESSION['is_login'])) {
			header('Location: ' . BASEURL . '/login');
			exit();
		}
	}
	
	public function index()
	{
		$data['judul'] = 'Data Izin';
		$data['izin'] = $this->Model('Izin_model')->getAllIzin();
		$data['karyawan'] = $this->Model('Karyawan_model')->getAllKaryawan();
		$this->view('templates/header', $data);
		$this->view('izin/index', $data);
		$this->view('templates/footer');
	}

	public function tambah()
	{
		if( $this->model('Izin_model')->tambahDataIzin($_POST) > 0 ) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location: ' . BASEURL . '/izin');
			exit;
		} else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location: ' . BASEURL . '/izin');
			exit;
		}
	}

	public function hapus($id)
	{
		if( $this->model('Izin_model')->hapusDataIzin($id) > 0 ) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location: ' . BASEURL . '/izin');
			exit;
		} else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location: ' . BASEURL . '/izin');
			exit;
		}
	}

	public function getedit()
	{
		echo json_encode($this->model('Izin_model')->getIzinById($_POST['id']));


	}

	public function edit()
	{
		if( $this->model('Izin_model')->editDataIzin($_POST) > 0 ) {
			Flasher::setFlash('berhasil', 'diedit', 'success');
			header('Location: ' . BASEURL . '/izin');
			exit;
		} else {
			Flasher::setFlash('gagal', 'diedit', 'danger');
			header('Location: ' . BASEURL . '/izin');
			exit;
		}
	}
}