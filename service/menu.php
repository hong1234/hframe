<?php

class Menu {

   private $db;
   
   public function __construct($_db) {
      $this->db = $_db;
   }

   public function menu1() {
   	return $this->db->getData()["menu1"];
   }
   
   public function menu2() {
   	return $this->db->getData()["menu2"];
   }
    
}
