<?php

class FrontController
{
    protected $_controller, $_action, $_params, $_body;
    static $_instance;

    public static function getInstance()
    {
        if (!(self::$_instance instanceof self)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    protected function __construct()
    {
        $request = $_SERVER['REQUEST_URI'];
        $splits = explode('/', trim($request, '/'));
        $this->_controller = !empty($splits[0]) ? ucfirst($splits[0]).'Controller' : 'IndexController';
        $this->_action = !empty($splits[1]) ? ucfirst($splits[1]).'Action' : 'indexAction';
        if (!empty($splits[2])){
            $keys = $values = [];
            $count = count($splits);
            for ($i = 2; $i < $count; $i++){
                if ($i % 2 == 0){
                    $keys[] = $splits[$i];
                }else{
                    $values[] = $splits[$i];
                }
            }
            $this->_params = array_combine($keys, $values);
        }
    }

    public function route(){}
    public function getParams(){}
    public function getController(){}
    public function getAction(){}
    public function getBody(){}
    public function setBody($body){}
}