 <?php

class Connection {

    private static  $instance;

    private $host = "localhost";
    private $dbname = "dbase";
    private $usernameDb = "root";
    private $passwdDb = "";

    private function __construct(){
        //
    }

    public static function getInstance(){
        if(!isset(self::$instance)){
            try{
                self::$instance = new PDO("mysql:host=localhost;dbname=dbase", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            } catch (PDOException $e){
                var_dump($e);
            }
        }
        return self::$instance;
    }

}

?>