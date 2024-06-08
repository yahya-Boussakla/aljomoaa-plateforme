<?php
namespace yahya\Controllers;



class ApiController extends AbstractController {


    public function __construct(){
        $this->model = new \yahya\Models\Save;
        
    }
    
    public function likeAction(){
        $result = $this->model->likedBlog();
        if ($result) {
            $this->model->insertLike();
        }
        else {
            $this->model->removeLike();
        }
        $this->_view();
    }


    public function saveAction(){
        $result = $this->model->savedBlog();
        if ($result) {
            $this->model->insertSave();
        }
        else {
            $this->model->removeSave();
        }
        $this->_view();
    }

}
?>