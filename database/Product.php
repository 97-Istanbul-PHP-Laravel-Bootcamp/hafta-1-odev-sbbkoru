<?php
 class Product {
     public $db = null;

     public function __construct(dbController $db)
     {
         if(!isset($db->con)) return null;
         $this->db = $db;
     }

     // fetch product data
     public function getData($table = 'product'){
         $result = $this->db->con->query("SELECT * FROM {$table}");

         $resultArray = array();

         // fetch product data one by one
         while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){;
         $resultArray[] = $item;
         }
         return $resultArray;
     }
 }