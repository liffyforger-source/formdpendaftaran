<?php
$server = "localhost";
$user = "ryo";
$password = "110809";
$nama_database = "pendaftaran_siswa1";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db){
    die("Gagal terhubung dengan database: ". mysqli_connect_error());
}
?>