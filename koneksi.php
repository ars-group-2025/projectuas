<?php
$connect = mysqli_connect("localhost", "root", "", "database_uts");

if (!$connect) {
    ("Database gagal dihubungkan: " . mysqli_connect_error());
}

?>