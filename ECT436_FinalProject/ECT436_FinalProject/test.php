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
		$sqlCommand2 = "SELECT * FROM Customer;";
		$rs = $conn->Execute($sqlCommand2);
	} catch (exception $e) {
		die( "Could not connect - $e");
	}
	// check that the email address (username) is not already in the database
	$rs->Close();
	return $returnValue;
	
 }
 
 isValidUser();
?>
