<?php
  class login{
    private $dbname="guestbook";
    private $dbhost="localhost";
    private $dbuser="root";
    private $dbpass="";
    private $mypdo;

    private function dbconnect(){
      try{
        $this->$mypdo=new PDO("mypdo:dbname=$this->dbname;dbhost=$this->dbhost;charset=utf8mb4", $this->dbuser, $this->dbpass);
      }catch(PDOException $e){
          echo "not connection.".$e->getMessage();
          throw $e;
      }
    }

    private function dbdisconnect(){
      unset($this->$mypdo);
    }

    public function dbselect(){}
  }
?>