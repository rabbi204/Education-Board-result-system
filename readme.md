## Education Board Result System

This is a learning purpose project for student result calculation. We use some programming language here.

#### Language Use

- HTML 5
- CSS 3
- javaScript
- jQuery
- PHP
- OOP
- PDO

#### Database Use

-MySQL

#### Database class design

```php
    require_once "../../config.php";
    namespace Edu\board\Support;


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
```