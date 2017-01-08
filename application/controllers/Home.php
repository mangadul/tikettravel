<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('tiket');
		$this->load->model('tiket/MTiket');
		$this->mtiket = new MTiket();
	}

	public function index()
	{
		$data = $this->mtiket->getHarga();
		$dv = array('harga'=>$data);
		$this->load->view("depan", $dv);
		//$this->render('home', 'full_width');
	}
}
