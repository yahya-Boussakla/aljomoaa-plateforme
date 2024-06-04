<?php
namespace yahya\Controllers;



class BlogController extends AbstractController {

    protected $data;
    protected $blog;

    public function __construct(){
        $this->model = new \yahya\Models\Blog;
    }

    public function defaultAction(){
        $this->model->logout();
        $this->data = $this->model->getDataUser();
        $this->_view();
        $this->model->insertBlog();
        $this->model->getBlogs();
    }

    public function detailsAction(){
        $this->model->logout();
        $this->data = $this->model->getDataUser();
        $this->blog = $this->model->getBlogDetails();
        $this->_view();
    }

}
?>