<?php
require_once("user.php");
require_once("admin.php");
$user1=new Vendor('fares','sdff3478','zezo6574');
//var_dump($user1);


$Admin1=new Admin(1);
$Admin1->InsertUsers($user1);

/*function check($other,$password){

}*/