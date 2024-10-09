<?php
$koneksi = mysqli_connect("localhost","root","","toko_online");
// check connection 
 if ($koneksi) {
    echo "";
 } else {
    echo "Failed to connect to the database";
 }
?>