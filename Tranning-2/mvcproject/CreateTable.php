<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = "Managedb";
 
     $connect = mysqli_connect($hostname, $username, $password,$dbname);
     mysqli_set_charset($connect,"utf8");
     if(!$connect)
     {  
         echo 'that bai';
     }
     else echo 'ket noi  thanh conng';

echo '<br>';
$sql = "CREATE TABLE manage(
    Id INT(11)NULL AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(250) ,
    Description VARCHAR(250) ,
    Image VARCHAR(100) ,
    Status VARCHAR(250) ,
    Create_at Datetime ,
    Update_at Datetime
    )";
if(mysqli_query($connect,$sql))
    echo 'thanh cong';
else
    echo 'that bai' . mysqli_error($connect);
mysqli_close($connect);
?>