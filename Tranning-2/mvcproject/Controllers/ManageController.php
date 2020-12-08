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
        
        $manage = $this->manageModel->getAll();
        return $this->view('backend.Manage.index',[
            'manage'=>$manage,
            'table' =>$table
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
}