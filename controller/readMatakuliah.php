<?php
require_once("../model/config.php");
$dbconn = pg_connect($connection_string);
$tampil = pg_query($dbconn, "SELECT * FROM MataKuliah");
$data = pg_fetch_all($tampil);
$jsonData = json_encode($data);
echo $jsonData;
?>
