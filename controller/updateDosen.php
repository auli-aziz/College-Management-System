<?php
require_once("../model/config.php");
$nidn = $_GET['nidn'];
$json = file_get_contents('php://input'); 
$data = json_decode($json);
$dbconn = pg_connect($connection_string);
$sqlstring = "UPDATE Dosen SET  Nama ='{$data->Nama}' WHERE nidn={$nidn}";
$query = pg_query($dbconn, $sqlstring);
if ($query) {
  echo "update data dosen berhasil";
} else {
  echo "update data dosen gagal";
}
?>
