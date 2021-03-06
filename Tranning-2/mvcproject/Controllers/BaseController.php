<?php
 
class BaseController
{
    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Models';

    public function view($viewPath,array $data= [])
    {
        foreach($data as $key => $value)
        {
            $$key = $value;
        }
        return require (self::VIEW_FOLDER_NAME .'/'. str_replace('.','/',$viewPath) . '.php');
    }
    public function model($modelPath)
    {
        return require (self::MODEL_FOLDER_NAME . '/' . $modelPath . '.php');
    }
}
?>