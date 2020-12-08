
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
?>