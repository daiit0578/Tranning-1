
<?php

class ManageModel extends BaseModel
{
    const TABLE = 'manage';
    
    
    public function getAll()
    {
        return $this-> all(self::TABLE);
    }

    public function getRow($select =['*'])
    {
        return $this-> getRows(self::TABLE,$select);
    }
    public function getById($id)
    {
        return $this-> getId(self::TABLE,$id);
    }


    public function edit($select=[])
    {
        $title ='"'.$select[0].'"';
        $description = '"'.$select[1].'"';
        $image = '"'.$select[2].'"';
        $status = '"'.$select[3].'"';
        $id = $select[4];
        $table = self::TABLE;
        if($image=='"Views/assets/image/"')
        {
            $sql = "update $table set Description=$description,Title=$title,Status =$status where id =$id";
             
        }else{
            $sql = "update $table set Description=$description,Title=$title,Image=$image,Status =$status where id =$id";
        }
        $query = $this->_query($sql);
        // echo $sql;
        
    }
    public function newRow($data=[])
    {
        $rows = implode(',',array_keys($data));
        $newValue = array_map(function($value){
            return "'".$value . "'";
        },array_values($data));
        $table = self::TABLE;
        $newValue = implode(',',$newValue);
        $sql = "insert into $table values ($newValue)";
        $query = $this->_query($sql);
        
    }

    public function delete($id)
    {
        $table = self::TABLE;
        $sql = "delete from $table where id=$id";
        $this->_query($sql);
    }

    
    public function show()
    {
        echo __METHOD__;
    }


}