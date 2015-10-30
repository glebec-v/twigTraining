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
        $this->_action = !empty($splits[1]) ? $splits[1].'Action' : 'indexAction';

        $count = count($splits);
        if (!empty($splits[2]) && ($count % 2 == 0)){
            $keys = $values = [];
            for ($i = 2; $i < $count; $i++){
                if ($i % 2 == 0){
                    $keys[] = $splits[$i];
                }else{
                    $values[] = $splits[$i];
                }
            }
            //todo проработать вариант неполного списка параметров и значений, нечетное число >= 3
            $this->_params = array_combine($keys, $values);
        }
    }

    public function route()
    {
        if (class_exists($this->getController())){
            $reflection = new ReflectionClass($this->getController());
            if ($reflection->implementsInterface('IController')){
                if ($reflection->hasMethod($this->getAction())){
                    $controller = $reflection->newInstance();
                    $method = $reflection->getMethod($this->getAction());
                    $method->invoke($controller);
                }else{
                    throw new Exception('Missing Action');
                }
            }else{
                throw new Exception('Missing Interface');
            }
        }else{
            throw new Exception('Missing Controller');
        }

    }
    public function getParams()     { return $this->_params; }
    public function getController() { return $this->_controller; }
    public function getAction()     { return $this->_action; }
    public function getBody()       { return $this->_body; }
    public function setBody($body)  { $this->_body = $body; }
}