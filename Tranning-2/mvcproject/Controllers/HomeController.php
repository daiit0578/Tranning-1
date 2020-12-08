<?php

class HomeController extends BaseController
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
        $manage = $this->manageModel->getAll(); 
        $name = 'hello Dai';
        // echo $this->manageModel -> edit();
        // echo __METHOD__ ;
        $dataId =[];
        if($id)
            $dataId = $this->manageModel->getById($id);

        return $this->view('frontend.Homes.index',[
            'manage' =>$manage,
            'id' => $id,
            'dataId' => $dataId
        ]);
    }
    public function getRow()
    {
        $manageGetRow = $this->manageModel->getRow(['Id','Title','Description']); 

        // $manageGetRow = $this->manegeModel->getRow(['Id','Title']);
        return $this->view('frontend.Homes.getRow',[
            'manageGetRow' =>$manageGetRow
        ]);
    }
}?>
