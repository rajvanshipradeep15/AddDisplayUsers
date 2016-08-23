<?php 
include 'DataBase.php';

/**
* 
*/
class User
{
	public $name;
	public $country;
	public $email;
	public $mobile;
	public $birthday;
	public $about_you;
	public $objDataBase;

	public $userError = array( 'name' => '', 'country' => '', 'email' => '', 'mobile' => '', 'birthday' => '', 'about_you' => '');

	public function __construct() 
	{
		$this->objDataBase = new DataBase();

	}

	public function validateUser()
	{
		$boolError = true;
		foreach($_REQUEST as $postKey => $postValue) {

			switch($postKey) {
				case 'name' :

					if ( empty($postValue) || !preg_match("/^[a-zA-Z ]*$/", $postValue)) { 
						$this->userError['name'] = "error";
						$boolError = false;
					}
				break;
				case 'email' :
					if (filter_var($postValue, FILTER_VALIDATE_EMAIL) === false) {
						$this->userError['email'] = "error";
						$boolError = false;
					}
				break;
				case 'mobile' :
					if ( empty($postValue) || !preg_match("/^[0-9]{10}$/", $postValue)) { 
						$this->userError['mobile'] = "error";
						$boolError = false;
					}
				break;
				case 'country' :
					if ( "0" == $postValue ) {
						echo "country: " . $postValue;exit;
						$this->userError['country'] = "error";
						$boolError = false;
					}
				break;
				case 'birthday' :
					if ( empty($postValue) ) { 
						$this->userError['birthday'] = "error";
						$boolError = false;
					}
				break;
			}
		}
		return $boolError;
	}

	public function addUser( $objUser )
	{
		if( $this->validateUser() ) {
			$this->objDataBase->insertUser( $objUser );
			header("Location: userList.php?addUser=1");
		} else {
			header("Location: index.php?" . http_build_query($this->userError));
		}
	}

	public function searchUser( $searchItem )
	{
		$userData = $this->objDataBase->getSearchResults($searchItem);
		return $userData;
	}

	public function getAllUsers()
	{
		$allUserDetails = $this->objDataBase->fetchUsers();
		return $allUserDetails;
	}

}

 ?>