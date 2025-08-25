<?php

class Product{

    public $id;
    public $name;
    public $price;
    public $offerPrice;

    public function __construct($_id, $_name, $_price, $_offerPrice,)
    {
       $this->id = $_id; 
       $this->name = $_name; 
       $this-> price = $_price; 
       $this->offerPrice = $_offerPrice; 
    }
    public function save(){
       $data="$this->id,$this->name,$this-> price,$this->offerPrice ";
       if(filesize("productData.txt")>0){
            $data=PHP_EOL.$data;
       }
       file_put_contents("productData.txt",$data, FILE_APPEND);
       return"Data Saved Successfully";
    }

    public static function showProduct(){
       $data=file("productData.txt",FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
       $html="<table>";
       $html.="<tr><th>ID</th><th>Name</th><th>Price</th><th>Offer Price</th><th>Action</th></tr>";
      //  foreach ($data as $key => $row){
      //   list($id,$name,$price,$offerPrice)=explode(",",$row);
      //   $html.="<tr><td>{$id}</td><td>{$name}</td><td>{$price}</td><td>{$offerPrice}</td><td><button><a href="">Edit</a></button> <button><a href="">Delete</a></button></td></tr>";

      //  }
    } 

    public static function delete($_id){
      $data=file("productData.txt");
      $product="";
      foreach ( $data as $key => $value) {
        list($id)=explode(",", $value);
        if () {
         
        }
      }
    }


}


?>