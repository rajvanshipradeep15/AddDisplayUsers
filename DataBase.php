<?php

class DataBase {

	public $conn;

	public function __construct()
	{
		$servername = "localhost";
		$username = "root";
		$password = "123pradeep";

		// Create connection
		$this->conn = new mysqli($servername, $username, $password,"pradeep_assignment");
		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
	}

	public function insertUser( $objUser )
	{
		$sql = 'INSERT INTO users '.
      '(name,country, email, mobile, about_you, birthday)'.
      'VALUES ( "'.$objUser->name.'", "'.$objUser->country.'", "'.$objUser->email.'", "'.$objUser->mobile.'", "'.$objUser->about_you.'", "'.$objUser->birthday.'" )';

		if ($this->conn->query($sql) === TRUE) {
			 header('Location: '."userList.php?add=1");
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $this->conn->error;
		}
	}

	public function fetchUsers()
	{
		$sql = "SELECT * FROM users";
		$userData = array();
		$retval = $this->conn->query($sql);
		if(! $retval )
		{
		  die('Could not get data: ' . mysql_error());
		}

		if ($retval->num_rows > 0) {
			// output data of each row
			while($row = $retval->fetch_assoc()) {
				$userData[$row['id']]['id'] = $row['id'];
				$userData[$row['id']]['name'] = $row['name'];
				$userData[$row['id']]['country'] = $row['country'];
				$userData[$row['id']]['email'] = $row['email'];
				$userData[$row['id']]['mobile'] = $row['mobile'];
				$userData[$row['id']]['about_you'] = $row['about_you'];
				$userData[$row['id']]['birthday'] = $row['birthday'];
			}
		}

		return $userData;
	}

	public function getSearchResults( $searchItem )
	{
		$sql = "SELECT * FROM users WHERE name like "."'$searchItem'"." OR email like "."'$searchItem'";

		$userData = array();
		$retval = $this->conn->query($sql);
		if(! $retval )
		{
		  die('Could not get data: ' . mysql_error());
		}

		if ($retval->num_rows > 0) {
			// output data of each row
			while($row = $retval->fetch_assoc()) {
				$userData[$row['id']]['id'] = $row['id'];
				$userData[$row['id']]['name'] = $row['name'];
				$userData[$row['id']]['country'] = $row['country'];
				$userData[$row['id']]['email'] = $row['email'];
				$userData[$row['id']]['mobile'] = $row['mobile'];
				$userData[$row['id']]['about_you'] = $row['about_you'];
				$userData[$row['id']]['birthday'] = $row['birthday'];
			}
		}
		return $userData;
	}

	public function getCountries() 
	{
		$sql = "SELECT * FROM countries WHERE 1 ";

		$countries = array();
		$retval = $this->conn->query($sql);
		if(! $retval )
		{
		  die('Could not get data: ' . mysql_error());
		}

		if ($retval->num_rows > 0) {
			// output data of each row
			while($row = $retval->fetch_assoc()) {
				$countries[$row['id']]['id'] = $row['id'];
				$countries[$row['id']]['name'] = $row['name'];
			}
		}

		return $countries;
	}
}
?>
