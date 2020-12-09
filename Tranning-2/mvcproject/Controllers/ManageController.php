<?php

class ManageController extends BaseController
{

    private $manageModel;
    public function __construct()
    {
        $this->model('ManageModel');
        $this->manageModel = new ManageModel;
    }

    public function index()
    {
        $id = $_GET['id'] ?? 0;
        $dataId =[];
        if($id)
            $dataId = $this->manageModel->getById($id);
        $table = $this->manageModel::TABLE;
        
        $manage = $this->manageModel->getAll();
        return $this->view('backend.Manage.index',[
            'manage'=>$manage,
            'table' =>$table,
            'dataId' => $dataId
        ]);
    }
    public function createNewRow()
    {
        if(isset($_POST['title'],$_POST['description'],$_POST['image'],$_POST['status']
                )){
            $title =$_POST['title'];
            $description = $_POST['description'];
            $image = 'Views/assets/image/'.$_POST['image'];
            $status = $_POST['status'];
            $id = "";
            date_default_timezone_set("asia/Ho_Chi_Minh");            
            $create_at = date("Y/m/d h:i:sa");
            $update_at = "";
            $data = [$id,$title,$description,$image,$status,$create_at,$update_at];            
            $this->manageModel->newRow($data);
        }
        $table = $this->manageModel::TABLE;
        $dataId =[];
        
        $manage = $this->manageModel->getAll();
        return $this->view('backend.Manage.index',[
            'manage'=>$manage,
            'table' =>$table,
            'dataId' => $dataId
        ]);
    }
    public function newRow ()
    {
        
        return $this->view('backend.Manage.newRow',[

        ]);
    }
    public function edit()
    {
        
        $id = $_GET['id'];
        $listId = $this->manageModel->getById($id);

        return $this->view('backend.Manage.edit',[
            'listId'=>$listId
        ]);
    }
    public function postEdit()
    {
        if(isset($_POST['title'],$_POST['description'],$_POST['image'],$_POST['status'],$_GET['id'])){
            $title =$_POST['title'];
            $description = $_POST['description'];
            $image = 'Views/assets/image/'.$_POST['image'];
            $status = $_POST['status'];
            $id = $_GET['id'];
            $data = [$title,$description,$image,$status,$id];            
            $this->manageModel->edit($data);
        }
        
        $table = $this->manageModel::TABLE;
        $dataId =[];
        
        $manage = $this->manageModel->getAll();
        return $this->view('backend.Manage.index',[
            'manage'=>$manage,
            'table' =>$table,
            'dataId' => $dataId
        ]);
    }
    public function delete()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $this ->manageModel->delete($id);
        }
        $table = $this->manageModel::TABLE;
        
        $manage = $this->manageModel->getAll();
        $dataId =[];

        return $this->view('backend.Manage.index',[
            'manage'=>$manage,
            'table' =>$table,
            'dataId' => $dataId
        ]);
    }
}