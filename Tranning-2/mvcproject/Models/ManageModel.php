
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


    public function delete()
    {
        echo __METHOD__;
    }

    
    public function show()
    {
        echo __METHOD__;
    }


}