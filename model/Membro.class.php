<?php

require_once("../database/Connection.class.php");

class Membro {
    public $username = null;
    public $password = null;

    function __construct($username, $password){
        $this->username = $username;
        $this->password = $password;
    }

    function getUsername(){
        return $this->username;
    }

    function setUsername($username){
        $this->username = $username;
    }

    function getPassword(){
        return $this->password;
    }

    function setPassword($password){
        $this->password = $password;
    }

    function auth(){
        $conn = Connection::getInstance();
        $query = "SELECT * FROM login_info WHERE login_user =  \"$this->username\" AND login_password = \"$this->password\"";
        $sql = $conn->query($query);
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    function register(){
        $conn = Connection::getInstance();
        $query = "INSERT INTO login_info VALUES (DEFAULT, '$this->username', 
        '$this->password', DEFAULT)";
        $sql = $conn->query($query);
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        return $this->auth();
    }

    function checkUsername(){
        $conn = Connection::getInstance();
        $query = "SELECT * FROM login_info WHERE login_user = '$this->username'";
        $sql = $conn->query($query);
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    function makeAdmin(){

    }

    function removeAdmin(){
        
    }

}
?>