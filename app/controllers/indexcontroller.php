<?php
namespace yahya\Controllers;

class IndexController extends AbstractController{

    protected $data;
    protected $blogs;


    public function __construct(){

        $this->model = new \yahya\Models\User;
    }

    public function defaultAction(){
        $this->model->logout();
        $this->data = $this->model->getDataUser();
        $this->blogs = $this->model->getBlogs();
        $this->model->readBlog();
        $this->_view();
        
    }

    public function aboutusAction(){
        $this->_view();
    }

    public function findOne($id){
        return $this->model->findUser($id);
    }

    public function getMignature($blog){
        return $this->model->getMignature($blog);
    }

    public function passedTime($postdate){
        return $this->model->timer($postdate);
    }
    
}
?>