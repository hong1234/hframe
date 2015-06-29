<?php

class Service2 {

    //private $db;
    //private $state;
    
    //public function __construct($_db, $_state) {
    //  $this->db = $_db;
    //  $this->state = $_state;
    //}

   public function action1($param) {
       $r = array();
       $r[]=$param;
       $r[]='Service-2';
       $r[]='Action-1';
       return $r;
   }

   public function action2($param) {
       $r = array();
       $r[]=$param;
       $r[]='Service-2';
       $r[]='Action-2';
       return $r;
   }
   
   public function action3($param) {
       $r = array();
       $r[]=$param;
       $r[]='Service-2';
       $r[]='Action-3';
       return $r;
   }

}

