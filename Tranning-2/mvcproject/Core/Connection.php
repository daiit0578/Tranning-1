
<?php
class Database
{    
    public $hostname = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = "Managedb";
    
    public function connection()
    {
        $connect = mysqli_connect($this->hostname, $this->username, $this->password,$this->dbname);
        mysqli_set_charset($connect,"utf8");
        if(!$connect)
        {  
            return false;
        }
        return $connect;
    }
  
}
// $sql = 'create database Managedb';
// if(mysqli_query($conn,$sql))
//     echo 'thanh cong';
// else
//     echo 'that bai' . mysqli_error($conn);
// echo 'Kết nối thành công';
// mysqli_close($conn);
// $sql = "CREATE TABLE manage(
//     Id INT(11)NULL AUTO_INCREMENT PRIMARY KEY,
//     Title VARCHAR(250) ,
//     Description VARCHAR(250) ,
//     Image VARCHAR(100) ,
//     Status VARCHAR(250) ,
//     Create_at Datetime ,
//     Update_at Datetime
//     )";
//if(mysqli_query($conn,$sql))
//     echo 'thanh cong';
// else
//     echo 'that bai' . mysqli_error($conn);
// mysqli_close($conn);

?>