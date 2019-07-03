<?php

/**
 * 
 */
class About extends controller {

	public function __construct() {
		if (!isset($_SESSION['is_login'])) {
			header('Location: ' . BASEURL . '/login');
			exit();
		}
	}
	public function index($nama = 'Gilang Maulana', $pekerjaan = 'presiden', $umur = 30)
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
		
	}
	public function page()
	{
		$data['judul'] = 'Pages';
		$this->view('templates/header', $data);
		$this->view ('About/page');
		$this->view('templates/footer');
		
	}
}