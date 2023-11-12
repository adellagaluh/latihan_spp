<?php
$koneksi = mysqli_connect('localhost','root','',);

if(!$koneksi){
    echo "Database terhubung";
}
?>