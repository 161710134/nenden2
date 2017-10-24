<?php

class nis{
	public $nama;
	public $Nis;
	public $kelas;
	public $sekolah;
//konstruktor
	public function __construct($n,$N,$k,$s){
		$this->nama=$n;
		$this->Nis=$N;
		$this->kelas=$k;
		$this->sekolah=$s;
	}

	public function get_nama(){
	return $this->nama;
	}
	public function get_Nis(){
	return $this->Nis;
}

	public function get_kelas(){
	return $this->kelas;
}

	public function get_sekolah(){
	return $this->sekolah;
}


}
?>