<?php
namespace yahya\Controllers;

class IndexController extends AbstractController{

    protected $result;

    public function defaultAction(){
        $this->model = new \yahya\Models\Student;
        $this->result = $this->model->login();
        $this->_view();
        
    }
    public function salamAction(){
        $this->_view();
    }
}
?>