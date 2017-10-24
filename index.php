<?php

{
class daerah {
	public $namadaerah = "Bandung";
	public $provinsi = "Jawa Barat";
}

$daerah1 = new daerah;
echo "Saya bertempat tinggal di :". $daerah1->namadaerah .'<br>';
echo "Yang terletak di Provinsi :". $daerah1->provinsi . '<br>';
echo "<br>";
}



{
class alamat {
	public $jalan = "Bojong Cilebak";
	public $komplek = "Cibogo Indah";
}
$alamat2 = new alamat;
echo "Alamat saya di jalan :". $alamat2->jalan . '<br>';
echo "Tepatnya di komplek :". $alamat2->komplek . '<br>';
echo "<br>";
}

?>