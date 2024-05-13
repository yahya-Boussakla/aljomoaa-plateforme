<?php
namespace yahya\Controllers;



class StudentController extends AbstractController{

    protected $data;

    public function __construct(){

        $this->model = new \yahya\Models\Student();
    }

    public function defaultAction(){

        $this->data = $this->model->getAllStudents();
        $this->_view();
    }
}
?>