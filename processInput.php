<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	include 'User.php';

	$objUser = new User();

	$objUser->name 			= $_REQUEST['name'];
	$objUser->country 		= $_REQUEST['country'];
	$objUser->email 		= $_REQUEST['email'];
	$objUser->mobile 		= $_REQUEST['mobile'];
	$objUser->about_you 	= $_REQUEST['about_you'];
	$objUser->birthday 		= $_REQUEST['birthday'];

	$objUser->addUser( $objUser );


