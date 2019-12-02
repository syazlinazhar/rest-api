<?php

// $mahasiswa = [
//     [
//         "name" => "Nur Syaqinah Binti Safaruddin",
//         "matric" => "193043405",
//         "email" => "qinah@gmail.com"
//     ],
//     [
//         "name" => "Maizatul Fatihah Binti Mohd Salleh",
//         "matric" => "193042605",
//         "email" => "mai@gmail.com"
//     ]
// ]; 

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc1', 'root', '' );
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

?>