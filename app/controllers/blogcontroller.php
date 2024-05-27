<?php
namespace yahya\Controllers;



class BlogController extends AbstractController {

    protected $data;
    
    public function __construct(){
        $this->model = new \yahya\Models\Blog;
    }

    public function defaultAction(){
        $this->data = $this->model->getDataUser();
        $this->_view();
        $this->model->getBlog();
    }

}
?>