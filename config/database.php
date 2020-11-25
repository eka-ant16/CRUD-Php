<?php
    $host="localhost";
    $user="id15499455_ekakun";
    $password="Oqh1fU95~Fb8RK^8";
    $db="id15499455_web";
    
    $kon = mysqli_connect($host,$user,$password,$db);
    if (!$kon){
          die("Koneksi gagal:".mysqli_connect_error());
    }
?>