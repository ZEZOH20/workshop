<?php 

define('DSN','mysql:host=localhost;port=3306;dbname=workshop');
define('USERNAME','root');
define('PASSWORD','');

//$pdo_cn=new PDO(DSN,USERNAME,PASSWORD);
//var_dump($pdo_cn);


#...............................................
# repeated class 
 class repeated {
   public function verifyD($Data){
        foreach($Data as $key=>$value){
          if($value!=NULL){
            $other=trim($value);
            $Data[$key]=$other;
        }
          if($key=="phone" and $value!=NULL){
                $phone=filter_var(trim($value),FILTER_SANITIZE_NUMBER_INT);
                $Data[$key]=$phone;
         }
          if($key=="email" and $value!=NULL){
            $email=filter_var(trim($value),FILTER_SANITIZE_EMAIL);
            $Data[$key]=$email;
          }   
       } 
       return $Data;
    }
}

