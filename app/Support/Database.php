<?php
    namespace Edu\Board\Support;
 

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

           return $this -> connection =  new PDO("mysql:host=" .$this -> host. ";dbname=" . $this -> db, $this -> user, $this -> pass );

          }

          /**
           *  Data Check
           */
          public function dataCheck($table, $data)
          {
            $stmt =  $this -> connection() -> prepare("SELECT*FROM $table WHERE email='$data' || uname='$data' ");
            $stmt -> execute();

            // koyta data ache check korer jonno
            $num = $stmt -> rowCount();

            return [
              'num' => $num,
              'data' => $stmt,
            ];

          }



    }



?>