<?php

class Service1 {

	//private $db;
	//private $state;
	
	//public function __construct($_db, $_state) {
	//	$this->db = $_db;
	//	$this->state = $_state;
	//}

   public function action1($param) {
       $r = array();
       $r[]=$param;
       $r[]='Service-1';
       $r[]='Action-1';
       return $r;
   }
   
   public function action2($param) {
       $r = array();
       $r[]=$param;
       $r[]='Service-1';
       $r[]='Action-2';
       return $r;
   }
   
   public function sayhello($vorname) {
       $r = array();
       if($vorname != null){
           $r[] = 'Hello '.$vorname;
       } else {
           $r[] = $vorname;
       }
       return $r;
   }
   
}
