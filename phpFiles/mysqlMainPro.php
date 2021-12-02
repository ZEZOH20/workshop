<?php 
   
class Mysql_process{
    public $tName,$data,$size,$admin_Id;
    public function __construct($data,$tName){
        $this->tName=$tName;
        $this->data=$data;
        $this->size=sizeof($this->data);
    }
    
    public function mysql_insert(){
        $pdo_cn=new PDO(DSN,USERNAME,PASSWORD);
        var_dump($pdo_cn);
        //require_once("config.php");

            $query="insert into"." ".$this->tName."(";
            //var_dump($this->data); 
            foreach(($this->data) as $key=>$value){
                if($value!=NULL){
                    $query.=$key.',';    
                }  
            }
            $query=substr_replace($query,"",-1); 
            $query.=')values('; //''''''''''''
            foreach(($this->data) as $key=>$value){
                if(!empty($value)){
                    $query.=':'.$key.',';
                }  
            }
            $query=substr_replace($query ,"",-1); 
			$query.=')';
            //var_dump($query);
            $sth=$pdo_cn->prepare($query);
            $execute_array=array(); // execute 
            foreach (($this->data) as $key=>$value){
                if($value!=NULL){
                    $sth->bindParam(':'.$key,$value);
                    var_dump($sth->bindParam(':'.$key,$value));
                    $execute_array[':'.$key]=$value;
                }  
            }
            $sth->execute($execute_array);
            //var_dump($sth->execute()); // ? ? ? ? ? ? ? 
            return $query;
        } 
    }
    //..............................................
  
