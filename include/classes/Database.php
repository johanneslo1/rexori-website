<?php

class Database
  {

    private $host = '8.8.8.8';

    private $dbname = array('BullzNET_Website');

    private $user = 'user';

    private $password = 'password';


      /**
      * dbConnect
      *
      * Create foreach Database a new object
      *
      *
      * @return  object  pdo objects
      */

    public function dbConnect()
      {

        for($i=0; $i < count($this->dbname); $i++)
          {
            try {
              $objects[$this->dbname[$i]] = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname[$i], $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            } catch(PDOException $e) {
              if($e) {
               die("MySQL ERROR");
             }
            }
          }
            return $objects;

      }
  }

?>
