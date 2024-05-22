<?php
namespace yahya\Controllers;

class IndexController extends AbstractController{

    protected $result;

    public function defaultAction(){
        $this->model = new \yahya\Models\User;
        // $this->result = $this->model->login();
        $this->_view();
        $this->model->logout();
        $data = $this->model->getDataUser();
        var_dump($data);
        
    }
    public function aboutusAction(){
        $this->_view();
    }
}
?>