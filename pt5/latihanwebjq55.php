<?php

// echo $_POST['kode'];
// echo '<br>';
// echo $_POST['nama'];
// echo '<br>';
// echo $_POST['satuan'];
// echo '<br>';

$myObj = new stdClass();
$myObj->kode = $_GET['kode'];
$myObj->nama = $_GET['nama'];
$myObj->satuan = $_GET['satuan'];
$myJSON = json_encode($myObj);
echo $myJSON;
