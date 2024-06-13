<?php
namespace yahya\Controllers;



class ApiController extends AbstractController {
    protected $likeModel;
    protected $readModel;

    public function __construct(){
        $this->model = new \yahya\Models\Save;
        $this->likeModel = new \yahya\Models\Like;
        $this->readModel = new \yahya\Models\Read;
    }
    
    public function likeAction(){
        $result = $this->likeModel->likedBlog();
        if ($result) {
            $this->likeModel->insertLike();
        }
        else {
            $this->likeModel->removeLike();
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