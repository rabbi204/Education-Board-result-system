<?php

    require_once "../../config.php";
    namespace Edu\board\Support;

use Exception;
use PDO;

    /**
     * Database Managements
     */
    abstract class Database{

        /**
         * Server information
         */

         private $host = HOST;
         private $user = USER;
         private $pass = PASS;
         private $db = DB;
         private $connection;

         /**
          *     Database Connection
          */
        
          private function connection(){

            $connection =  new PDO("mysql:host=" .$this -> host. ";db_name=" . $this -> db, $this -> user, $this -> pass );
            
          }








    }



?>