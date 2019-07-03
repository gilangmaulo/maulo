<?php

/**
  * 
  */
 class Absen extends Controller{

 	public function submit()
 	{
 		$data = $this->model('Absen_model')->getdata();
 		if (empty($data)) {
 			$this->model('Absen_model')->insert();
 		} else {
 			$this->model('Absen_model')->update($data['id']);
 		}
 		header('Location: ' . BASEURL . '/home');
 		exit();
 	}
 } 