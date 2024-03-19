<?php
require_once("../model/config.php");
$nim = $_GET['NIM'];
$nidn = $_GET['NIDN'];

$json = file_get_contents('php://input'); 
$data = json_decode($json);
$dbconn = pg_connect($connection_string);

$sqlstring = "UPDATE MataKuliah SET  Nama ='{$data->Nama}' WHERE nim={$nim} AND nidn={$nidn}";

$query = pg_query($dbconn, $sqlstring);

if ($query) {
  echo "update data matakuliah berhasil";
} else {
  echo "update data matakuliah gagal";
}
?>
