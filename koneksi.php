<?php

$server="localhost";
$user="root";
$database="uas";
$password="";

$koneksi=mysqli_connect($server,$user,$password,$database);


if($koneksi){
echo "Terkoneksi";
}else{
echo "Unconnected";
}

?>