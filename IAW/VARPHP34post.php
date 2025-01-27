<?php
$km = $_POST["km"];
$h = $_POST["h"];

$m = $km * 1000;
$s = $h * 3600;

$mpors = $m / $s;

echo"Los metro por segundo son: $mpors";
?>