<?php
namespace yahya\Controllers;


class BlogController extends AbstractController {
    
    public function __construct(){

    }

    public function defaultAction(){
        $this->_view();
    }

}
?>