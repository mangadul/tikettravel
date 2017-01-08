<?php

class MTiket extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}

	function getHarga(){
		$q= 'select mht.*, k.nama_kota as asal, 
			kt.nama_kota as tujuan
			from m_harga_tiket mht
			inner join m_kota k on k.id_kota = mht.kota_asal
			inner join m_kota kt on kt.id_kota = mht.kota_tujuan
			';
		if($this->db->query($q)->num_rows() > 0){
			$res = $this->db->query($q)->result_array();
			return $res;			
		}
	}
}