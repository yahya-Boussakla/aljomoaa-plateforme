<?php
namespace yahya\Controllers;



class BlogController extends AbstractController {

    protected $data;
    protected $blog;
    protected $others;

    public function __construct(){
        $this->model = new \yahya\Models\Blog;
        $this->model->logout();
        $this->model->acount();
        $this->model->brouillan();
        $this->model->saves();

    }

    public function defaultAction(){
        $this->model->logout();
        $this->data = $this->model->getDataUser();
        $this->_view();
        $this->model->insertBlog();
        $this->model->getBlogs();
    }

    public function detailsAction(){
        
        $this->data = $this->model->getDataUser();
        $this->blog = $this->model->getBlogDetails();
        $this->others = $this->model->otherBlogs();
        $this->readBlog();
        $this->navItems = ['الرئيسية',$this->blog['CATEGORY'],$this->blog['TITRE']];
        $this->_view();
    }

    public function passedTime($postdate){
        return $this->model->timer($postdate);
    }

    public function isLiked($blogId,$userId){
        return $this->model->checkLike($blogId,$userId);
    }

    public function likes($blogId){
        return $this->model->likeCount($blogId);
    }

    public function isSaved($blogId,$userId){
        return $this->model->checkSave($blogId,$userId);
    }

    public function views($blogId){
        return $this->model->readCount($blogId);
    }

    public function getMignature($blog){
        return $this->model->getMignature($blog);
    }

    public function readBlog(){
        if (isset($_POST['read'])) {
            $_SESSION['ID_BLOG'] = $_POST['ID_BLOG'];
            header("Location: http://localhost/jomoaa/blog/details");
        }
    }
}
?>