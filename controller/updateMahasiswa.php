<?php
require_once("../model/config.php");
$nim = $_GET['nim'];
$json = file_get_contents('php://input'); 
$data = json_decode($json);
$dbconn = pg_connect($connection_string);
$sqlstring = "UPDATE Mahasiswa SET  Nama ='{$data->Nama}', Semester ={$data->Semester} WHERE nim={$nim}";
$query = pg_query($dbconn, $sqlstring);
if ($query) {
  echo "update data berhasil";
} else {
  echo "update data gagal";
}
?>
