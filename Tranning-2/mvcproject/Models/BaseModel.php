<?php

class BaseModel extends Database
{
    protected $connect;

    public function __construct()
    {
        
       $this->connect = $this->connection();
    }
    /**
     * lay ra tat ca du lieu trong bang
     */
    public function ALL($table)
    {
        $sql = "select * from ${table}";
        // if(!$this->connect)
        // echo 'that bai';
        $query = $this->_query($sql);
        // else echo 'thanh cong';
        $data =[];
        
        while($row = mysqli_fetch_assoc($query))
        {
            array_push($data,$row);
        }
         return $data;
    }
    /**
     * lay ra cot tuy chinh
     */
    public function getRows($table,$select)
    {
        $selects = implode(',',$select);
        print_r($selects);
        print_r('<br/>');
        $sql = "select ${selects} from ${table}";
        print_r($sql);
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data,$row);
            // var_dump($row);
        }
        return $data;
    }
    /**
     * lay ra 1 ban ghi
     */
    
    public function getId($table,$id)
    {
        $sql = "select * from $table where Id = $id";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query))
        {
            array_push($data,$row);
            // var_dump($row);
        }
        return $data;

    }
    /**
     * them 1 ban ghi
     */
    public function store()
    {
        
    }
    /**
     * xoa 1 ban ghi
     * 
     */
    
    public function _query($sql)
    {
       return mysqli_query($this->connect,$sql);
    }
}