<?php
namespace yahya\Controllers;


class BlogController extends AbstractController {
    
    public function __construct(){
        $this->model = new \yahya\Models\Blog;
    }

    public function defaultAction(){
        $this->_view();
        $this->model->getData();
    }

}
?>