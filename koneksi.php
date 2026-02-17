<?php
<<<<<<< Updated upstream
$conn = mysqli_connect("localhost", "root", "root", "skpp");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
=======
$conn = mysqli_connect("localhost", "root", "", "skpp");

if(!$conn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}

echo "Koneksi Berhasil!";
>>>>>>> Stashed changes


?>
