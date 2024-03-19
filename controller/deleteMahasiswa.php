<?php
require_once("../model/config.php");
$nim = $_GET['nim'];
$json = file_get_contents('php://input'); $data = json_decode($json);
$dbconn = pg_connect($connection_string);
$sqlstring = "DELETE FROM Mahasiswa WHERE nim={$nim}";
$query = pg_query($dbconn, $sqlstring);
if ($query) {
echo "Delete data berhasil";
}else{
  echo "Delete data gagal";
}
?>
