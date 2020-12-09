<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
 
 
     $connect = mysqli_connect($hostname, $username, $password);
     mysqli_set_charset($connect,"utf8");
     if(!$connect)
     {  
         echo 'that bai';
     }
     else echo 'thanh conng';


$sql = 'create database Managedb';
if(mysqli_query($conn,$sql))
    echo 'thanh cong';
else
    echo 'that bai' . mysqli_error($conn);
echo 'Kết nối thành công';
mysqli_close($conn);
?>