<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tiket extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model("MTiket");
		$mtiket = new MTiket();
	}

	function index(){

	}

	function hargatiket(){
		return $mtiket->getHarga();
	}

	function pesan(){
		echo "Terima kasih anda sudah memesan tiket. Kode booking anda adalah: DALBOOK-112314";
	}

}