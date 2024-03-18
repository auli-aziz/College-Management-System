<?php

require_once("../model/config.php");
$json = file_get_contents('php://input');
$data = json_decode($json);

$dbconn = pg_connect($connection_string);

$sqlstring = "INSERT INTO Mahasiswa (NIM, Nama, Semester) VALUES ({$data->NIM}, '{$data->Nama}', {$data->Semester})";

$query = pg_query($dbconn, $sqlstring);

if ($query) {
  echo "insert data berhasil";
} else {
  echo "insert data gagal";
}

?>