<?php
namespace yahya\Controllers;


class ProfileController extends AbstractController{

    protected $data;
    protected $myBlogs;
    protected $profileData;
    

    public function __construct(){
        $this->readModel = new \yahya\Models\Read;
        $this->model = new \yahya\Models\Profile;
        $this->data = $this->model->getDataUser();
        $this->navItems = ['حسابي'];
        $this->model->logout();
        $this->model->acount();
        $this->model->brouillan();
        // $this->model->saves();

        if (isset($_POST['read'])) {
            if ($this->readModel->readedBlog() == 0) {
                $this->readModel->insertRead();
            }
        }
    }

    public function defaultAction(){
        
        if ($_SESSION['STATUS'] == 'profile') {
            $this->profileData = $this->model->findUserAcount($_SESSION['USER']);
            $this->myBlogs = $this->model->myBlogs();
            $this->profile = 'مقالاتي';
        }
        elseif($_SESSION['STATUS'] == 'brouillan'){
            $this->profileData = $this->model->findUserDraft($_SESSION['USER']);
            $this->myBlogs = $this->model->draftBlogs();
            $this->profile = 'مقالات المسودة';
            $this->navItems = ['المسودة'];
        }
        // elseif ($_SESSION['STATUS'] == 'saves') {
        //     $this->profileData = $this->model->findUserAcount($_SESSION['USER']);
        //     $this->myBlogs = $this->model->saveBlogs();
        //     $this->profile = 'مقالات تم حفظها';
        //     $this->navItems = ['تم حفظها '];
        // }
        $this->readBlog();
        $this->_view();
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

    public function readBlog(){
        if (isset($_POST['read'])) {
            $_SESSION['ID_BLOG'] = $_POST['ID_BLOG'];
            header("Location: http://localhost/jomoaa/blog/details");
        }
    }
}
?>