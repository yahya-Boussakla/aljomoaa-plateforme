<?php
namespace yahya\Controllers;

class IndexController extends AbstractController{

    protected $data;


    public function __construct(){

        $this->model = new \yahya\Models\User;
    }

    public function defaultAction(){
        $this->model->logout();
        $this->data = $this->model->getDataUser();
        $this->_view();
        
    }
    public function aboutusAction(){
        $this->_view();
    }
}
?>