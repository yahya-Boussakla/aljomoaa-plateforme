<?php

namespace yahya\Controllers;

class AuthentController extends AbstractController{
    public function __construct() {
        $this->model = new \yahya\Models\User;
    }
    public function loginAction(){
        $this->_view();
        
    }
    public function signupAction(){
        $this->_view();
        $this->model->signup();
        
    }
}

?>