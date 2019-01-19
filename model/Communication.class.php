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
    	$query = "INSERT INTO messages VALUES (DEFAULT, '$this->name', '$this->email', '$this->subject', '$this->message')";
    	$sql = $conn->query($query);
    	$row = $sql->fetch(PDO::FETCH_ASSOC);
    	return $row;
    }

}

?>