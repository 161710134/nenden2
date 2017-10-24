<?php

require_once 'Nis.php';

$nis1 = new nis ('Nenden','161710134','XI RPL2','Smk Assalaam');
echo "nama :".$nis1->get_nama() . '<br>';
echo "Nis :".$nis1->get_Nis() . '<br>';
echo "kelas :".$nis1->get_kelas() . '<br>';
echo "sekolah :".$nis1->get_sekolah() . '<br>'.'<br>';




?>