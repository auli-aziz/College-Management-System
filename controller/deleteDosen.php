<?php
require_once("../model/config.php");
$nidn = $_GET['nidn'];
$json = file_get_contents('php://input'); $data = json_decode($json);
$dbconn = pg_connect($connection_string);
$sqlstring = "DELETE FROM Dosen  WHERE nidn={$nidn}";
$query = pg_query($dbconn, $sqlstring);
if ($query) {
echo "Delete data dosen berhasil";
}else{
  echo "Delete data dosen gagal";
}
?>
