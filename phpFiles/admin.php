<?php
 require_once("mysqlMainPro.php"); 
 require_once("user.php");
  class Admin{
     // public User $users;
      public $users;
      public $name,$phone;
      private $email;
	  protected $id;
	 function __construct($id){
	   $this->id=$id;
	 }
      function InsertUsers(User $user){
	    ($user->data)['aManage']=$this->id;
        $add=new Mysql_process($user->data,'user');
        var_dump($add->mysql_insert());
      }

  }

  class Superviser extends Admin{
    public $admins =[];

  }