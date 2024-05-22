<?php

namespace yahya\Controllers;
// protected $data;

class AuthentController extends AbstractController{
    public function __construct() {
        $this->model = new \yahya\Models\User;
    }
    public function loginAction(){
        $this->_view();
        $this->model->login();
        // $data = $this->model->getDataUser();
        // var_dump($data);
    }
    public function signupAction(){
        $this->_view();
        $dataUser = $this->model->signup();
        // var_dump($dataUser);
        
    }


}

?>