<?php

require_once("config.php");
require_once("mysqlMainPro.php");
require_once("admin.php");
 abstract class User{
   public $name,$about,$email,$data;
   protected $password,$phone,$id;
   
   //private Admin $admin;
   private  $admin;
   public function __construct($name,$phone=NULL,$password=NULL,$email=NULL,$about=NULL,$image=NULL){
       $data= array(
        'name'=>$name,
        'phone'=>$phone,
        'password'=>$password,
        'email'=>$email,
        'about'=>$about,
       );
       $temp=new repeated();
       $afterEdit=$temp->verifyD($data);
       $this->data= $afterEdit;
       //var_dump($afterEdit);
       foreach($afterEdit as $key=>$value){
        $this->$key=$value;
      }
      
    }

 }
 class Vendor extends User{
    public $typeOF_trade;
    private $type="Vendor";
    public function __construct($name,$phone=NULL,$password=NULL,$email=NULL,$about=NULL,$image=NULL,$typeOF_trade=NULL){
        parent::__construct($name,$phone,$password,$email,$about,$image);
        $this-> $typeOF_trade= $typeOF_trade;
    }
    
 }


 class Purchaser extends User{
    private $type="Purchaser";
    public function __construct($name,$phone=NULL,$password=NULL,$email=NULL,$about=NULL,$image=NULL){
        parent::__construct($name,$phone,$password,$email,$about,$image);
    }
    
 }


 