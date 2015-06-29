<?php
namespace model;

class FakeDb {
	public function getData ()
	{
		return  array ( //fake-data
			'menu1'=>array (
					'service1-action1' => 'index.php?service=service1&action=action1',
					'service1-action2' => 'index.php?service=service1&action=action2',
                    'sayhello' => 'index.php?service=service1&action=sayhello'),
		    'menu2'=>array (
		    		'service2-action1' => 'index.php?service=service2&action=action1&param=Hello21',
			        'service2-action2' => 'index.php?service=service2&action=action2&param=Hello22',
			        'service2-action3' => 'index.php?service=service2&action=action3&param=Hello23')
		);
	}
}