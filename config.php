<?php
$host = 'localhost';
$db = 'cv';
$user = 'cv_gian';
$pwd = 'meliodas378';

$conn = mysqli_connect($host, $user, $pwd, $db); // true | false

if (!$conn) {
  die('Gagal terhubung ke database'. mysqli_connect_error());
}
