<?php

require_once 'dispatcher.php';
require_once 'model/FakeDb.php';
require_once 'view/smarty/libs/Smarty.class.php';

$actionstack = array (
	'menu1' => array('menu', 'menu1'),
	'menu2' => array('menu', 'menu2')
);

$dispatcher = new Dispatcher($actionstack);
$results = $dispatcher->requestProcessing();

require_once 'view/viewrender.php';





