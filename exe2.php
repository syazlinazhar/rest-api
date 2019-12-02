<?php

$data = file_get_contents('coba.json');
$mahasiswa = json.decode($data,true);

var_dump($mahasiswa);
echo $mahasiswa[0]["lecturers"]["lecturer1"];

?>