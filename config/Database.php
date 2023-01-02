<?php
session_start();
class Database{
	
	private $host  = "localhost"; //enter host name
    private $user  = "root"; //enter user's name
    private $password   = ""; //enter password
    private $database  = "library-system"; //enter database name
    private $port ="8111"; //enter sql port number

    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database,$this->port);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>