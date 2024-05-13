<?php

namespace yahya\LIB;

class FrontController{
    const NOT_FOUND_CONTROLLER = 'yahya\Controllers\NotFoundController';
    const NOT_FOUND_ACTION = 'notFoundAction';

    private $_controller = 'index';
    private $_action = 'default';
    private $_params = [];

    public function __construct(){
        $this->_parseUrl();
    }
    
    private function _parseUrl(){
        if (isset($_GET['url'])) {
            $url = explode('/',$_GET['url'],3);
        }
        if (isset($url[0])) {
            if ($url[0] != "") {
                $this->_controller = $url[0];
            }
        }
        if (isset($url[1])) {
            if ($url[1] != "") {
                $this->_action = $url[1];
            }
        }
        if (isset($url[2])) {
            if ($url[2] != "") {
                $this->_params = explode('/',trim($url[2],'/'));
            }
        }
       
    }

    public function dispatch(){
        $controllerClassName = 'yahya\Controllers\\' . ucfirst($this->_controller) . "Controller";
        $actionName = $this->_action . "Action";
        
        if (!class_exists($controllerClassName)) {
            $this->_controller = $controllerClassName = self::NOT_FOUND_CONTROLLER;
        }
        

        $controller = new $controllerClassName();
        if (!method_exists($controller, $actionName)) {
            $this->_action = $actionName = self::NOT_FOUND_ACTION;
        }
        $controller->setController($this->_controller);
        $controller->setAction($this->_action);
        $controller->setParams($this->_params);
        $controller->$actionName();
        
    }
}

?>