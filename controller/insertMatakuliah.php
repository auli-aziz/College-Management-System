<?php

require_once("../model/config.php");
$json = file_get_contents('php://input');
$data = json_decode($json);

$dbconn = pg_connect($connection_string);

$sqlstring = "INSERT INTO MataKuliah (NIM, NIDN, Nama) VALUES ({$data->NIM}, {$data->NIDN}, '{$data->Nama}')";

$query = pg_query($dbconn, $sqlstring);

if ($query) {
  echo "insert data matakuliah berhasil";
} else {
  echo "insert data matakuliah gagal";
}

?>