<?php
class dbc {
	private $servername;
	private $username;
	private $password;
	private $database;
	private $con;

	public function __construct(){
		$this->servername = "sql2.njit.edu";
		$this->username = "ml289";
		$this->password = "Gd2PyqnI1";
		$this->database = "ml289";
	}

	public function connect_database(){
		//Connection
		$this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
		if($this->con->connect_error){
			return "Connection Failed! :" . $this->con->connect_error;
		}
		return "Success to database";
	}

	public function do_select_query($query){
		try{
			$result = $this->con->query($query);
			return $result;
		}
		catch(Exception $e){
			return $e;
		}
	}

	public function do_insert_query($query){
		try{
			$result = $this->con->query($query);
			return $result;
		}
		catch(Exception $e){
			return $e;
		}
	}

}

?>
