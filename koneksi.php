<?php
$cnc = mysqli_connect("localhost", "root", "", "db_perpustakaan");

if (!$cnc) {
	die("Connection failed: " . mysqli_connect_error());
}
