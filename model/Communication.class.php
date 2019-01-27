<?php

require_once("../database/Connection.class.php");

class Communication {
	public $name = null;
	public $email = null;
	public $subject = null;
	public $message = null;

	function __construct($name, $email, $subject, $message){
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->message = $message;
    }

    function sendMessage(){
    	$conn = Connection::getInstance();
    	$query = "INSERT INTO messages VALUES (DEFAULT, '$this->name', '$this->email', '$this->subject', '$this->message', DEFAULT)";
    	$sql = $conn->query($query);
    	$row = $sql->fetch(PDO::FETCH_ASSOC);
    	return $row;
    }

    function getMessages(){
    	$conn = Connection::getInstance();
    	$query = "SELECT * FROM messages WHERE visualized = 0";
    	$sql = $conn->query($query);
    	$table = array();
    	$row = $sql->fetch(PDO::FETCH_ASSOC);
    	while($row){
    		array_push($table, $row);
    		$row = $sql->fetch(PDO::FETCH_ASSOC);
    	}
    	return $table;
    }

    function getAllMessages(){
    	$conn = Connection::getInstance();
    	$query = "SELECT * FROM messages";
    	$sql = $conn->query($query);
    	$table = array();
    	$row = $sql->fetch(PDO::FETCH_ASSOC);
    	while($row){
    		array_push($table, $row);
    		$row = $sql->fetch(PDO::FETCH_ASSOC);
    	}
    	return $table;
    }

    function markAsRead($msg_id){
    	$conn = Connection::getInstance();
    	$query = "UPDATE messages SET visualized = '1' WHERE Id = '$msg_id'";
    	$sql = $conn->query($query);
    	$row = $sql->fetch(PDO::FETCH_ASSOC);
    	return $row;
    }

}

?>