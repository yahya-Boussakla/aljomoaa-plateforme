<?php
namespace yahya\Controllers;

class IndexController extends AbstractController{

    protected $data;
    protected $blogs;
    protected $readBlog;
    protected $navContent;


    public function __construct(){
        $this->readModel = new \yahya\Models\Read;
        $this->model = new \yahya\Models\User;
        $this->model->logout();
        $this->model->acount();
        $this->model->brouillan();
        $this->model->saves();
        $this->navItems = ['الرئيسية'];

        if (isset($_POST['read'])) {
            if ($this->readModel->readedBlog() == 0) {
                $this->readModel->insertRead();
            }
        }
    }

    public function defaultAction(){
       
        $this->data = $this->model->getDataUser();
        if (isset($_POST['search'])) {
            $this->blogs = $this->model->searchAceuill();
        }
        elseif (isset($_POST['navContent'])) {
        $this->navContent = $this->model->filter()[0];
            $this->blogs = $this->model->filter()[1];
            $this->navItems = ['الرئيسية',$_POST['navContent']];
        }
        else {
            $this->blogs = $this->model->getBlogs();
        }
        $this->model->readBlog();

        $this->_view();
        }
        
    public function aboutusAction(){
        $this->navItems = ['تعرف علينا'];
        $this->_view();
    }

    public function callusAction(){
        $this->navItems = ['اتصل بنا '];
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

    public function isLiked($blogId,$userId){
        return $this->model->checkLike($blogId,$userId);
    }

    public function likes($blogId){
        return $this->model->likeCount($blogId);
    }

    public function isSaved($blogId,$userId){
        return $this->model->checkSave($blogId,$userId);
    }

    
}
?>