<?php
namespace yahya\Controllers;
// include APP_PATH . '/lib/frontController.php';
class AbstractController {
    protected $_controller;
    protected $_action;
    protected $_params;
    public $model;
    protected $_errors = false;
    protected $profileStatus;
    protected $navItems ;


    public function notFoundAction(){
        $this->_view();
    }

    public function setController($controllerName){
        $this->_controller = $controllerName;
    }
    public function setAction($actionName){
        $this->_action = $actionName;
    }
    public function setParams($params){
        $this->_params = $params;
    }

    protected function _view($data = []){
        $this->geterror();
       
        if ($this->_errors == true) {
            include_once VIEWS_PATH . 'notFound/notfound.view.php';
        }
        else {
            $view = VIEWS_PATH . $this->_controller . "/" . $this->_action . ".view.php";
            if (file_exists($view)) {
                include_once $view;
                extract($data, EXTR_SKIP);
            }
            else {
                include_once VIEWS_PATH . "notFound/noview.view.php";
            }
        }
    }

    protected function _model(){
        $this->geterror();

        if ($this_errors == false) {
            
        }
    }

    public function geterror(){
        if ($this->_controller == \yahya\LIB\FrontController::NOT_FOUND_CONTROLLER) {
            $this->_errors = true;
            // include_once APP_PATH . '/views/notFound/notfound.view.php';
        }
        else {
            if ($this->_action == \yahya\LIB\FrontController::NOT_FOUND_ACTION) {
                $this->_errors = true;
                // include_once APP_PATH . '/views/notFound/notfound.view.php';
            }
           
        }
    }
}
?>