<?php

require_once("../model/config.php");
$json = file_get_contents('php://input');
$data = json_decode($json);

$dbconn = pg_connect($connection_string);

$sqlstring = "INSERT INTO Dosen (NIDN, Nama) VALUES ({$data->NIDN}, '{$data->Nama}')";

$query = pg_query($dbconn, $sqlstring);

if ($query) {
  echo "insert data dosen berhasil";
} else {
  echo "insert data dosen gagal";
}

?>