<?php
/**
 * Created by PhpStorm.
 * User: hong
 * Date: 29.06.15
 * Time: 01:12
 */
class Dispatcher {

    //public $smt;
    private $db;
    public $actions;

    public function __construct($actionstack) {
        //$this->smt = new Smarty ();
        // $this->db = new mysqli ( 'localhost', 'root', '', 'test' );
        // $this->db->set_charset ( "utf8" );
        $this->db = new model\FakeDb();
        $this->actions = $actionstack;
    }

    public function requestProcessing() {
        session_start ();
        $this->addMainActionToStack();
        //execute actionstack
        $results = array();
        foreach ($this->actions as $key => $action) {
            $sname = $action[0];
            $aname = $action[1];
            $service = $this->serviceFactory($sname);
            $result = $this->actionCall ($service, $aname);
            $results[$key] = array($result, $sname.$aname);
        }
        return $results;
    }

    public function addMainActionToStack() {
        $serviceName = 'service1';
        $actionName = 'action1';

        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            if(isset($_GET['service'])){
                $serviceName = $_GET['service'];
            }
            if(isset($_GET['action'])){
                $actionName = $_GET['action'];
            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(isset($_POST['service'])){
                $serviceName = $_POST['service'];
            }
            if(isset($_POST['action'])){
                $actionName = $_POST['action'];
            }
        }

        $this->actions['main'] = array($serviceName, $actionName);
    }

    private function serviceFactory($serviceName) {
        require_once ('service/'.$serviceName.'.php');

        $refClass = new ReflectionClass($serviceName);
        $refConstructor = $refClass->getConstructor();
        if (! $refConstructor)
            return $refClass->newInstance();
        $initValues = $this->parameterValues($refConstructor);
        return $refClass->newInstanceArgs($initValues);
    }

    private function actionCall($service, $actionName) {
        $refObject = new ReflectionObject($service);
        $refMethod = $refObject->getMethod($actionName);
        $values = $this->parameterValues($refMethod);
        return $refMethod->invokeArgs($service, $values);
    }

    private function parameterValues($refMethod) {
        $values = array();
        $parameters = $refMethod->getParameters();

        foreach ($parameters as $p => $parameter) {
            $parameterName = $parameter->getName();
            if ($parameterName == '_db') {
                $value = $this->db;
            } else if ($parameterName == '_state') {
                if ($_SESSION && array_key_exists('count', $_SESSION)) {
                    $value = $_SESSION ['count'];
                } else {
                    $value = null;
                }
            } else if ($parameterName[0] != '_' && array_key_exists($parameterName, $_GET)) {
                $value = $_GET[$parameterName];
            } else if ($parameterName[0] != '_' && $_SERVER['REQUEST_METHOD'] == 'POST' && array_key_exists($parameterName, $_POST)) {
                $value = $_POST[$parameterName];
            } else if ($parameter->isDefaultValueAvailable()) {
                $value = $parameter->getDefaultValue();
            } else {
                $value = null;
            }
            $values[$p] = $value;
        }
        return $values;
    }

}