<?php 
	
	function isValidUser() {

	$usernameData = filter_input(INPUT_GET, 'username'); 
	$passwordData = filter_input(INPUT_GET, 'pswd'); 
	$returnValue = false;
	

	$connString= "Provider=Microsoft.ACE.OLEDB.12.0;Data Source=.Database/foodbook3.mdb;Persist Security Info=False;";
	try {
		$conn = new COM('ADODB.Connection');
		$conn->ConnectionTimeout = 60;
		$conn->Open($connString);
	} catch (exception $e) {
		die( "Could not connect - $e");
	}
	// check that the email address (username) is not already in the database
	$sqlCommand = "SELECT * FROM customers WHERE username = '$username' AND password='$password';";
	$rs = $conn->Execute($sqlCommand);
	if($rs->EOF) {
	     $returnValue = false;
	} else { 
		 $returnValue = true;
	
	}
	$rs->Close();
	return $returnValue;
	
 }
?>