<?php
	
	function createUser() {

	$usernameData = filter_input(INPUT_POST, 'username'); 
	$passwordData = filter_input(INPUT_POST, 'pswd');
    $firstName = filter_input(INPUT_POST, 'fname');	
    $lastName = filter_input(INPUT_POST, 'lname');	
	$returnValue = true;
	

	$connString= "Provider=Microsoft.ACE.OLEDB.12.0;Data Source=./Database/foodbook3.mdb;Persist Security Info=False;";
	try {
		$conn = new COM('ADODB.Connection');
		$conn->ConnectionTimeout = 60;
		$conn->Open($connString);
	} catch (exception $e) {
		die( "Could not connect - $e");
	}
	$sqlCommand = "INSERT INTO customer(username, secret, firstname, sellout) 
	VALUES('$usernameData', '$passwordData', '$firstName', '$lastName')";
	$rs = $conn->Execute($sqlCommand);
	
	return $returnValue;
	if($rs->EOF) {
	     $returnValue = false;
	} else { 
		 $returnValue = true;
	
	}
	$rs = $conn->Close();
 }

 ?>

 <?php 
 $first_checkbox = filter_input(INPUT_POST, 'checkbox1');
 $second_checkbox = filter_input(INPUT_POST, 'checkbox2');
 $third_checkbox = filter_input(INPUT_POST, 'checkbox3');
 $fourth_checkbox = filter_input(INPUT_POST, 'checkbox4');
 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FOODBOOK</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style type="text/css"> 

.mybtn{ 
	margin-left: 1190px;
	width: 120px;
	height: 34px;
}
.secondbtn{ 
	margin-left: 1190px;
	width: 120px;
	height: 34px;
}
.hidden{ 
	display: none;
}

.show{
	display: block;
}

.submitbtn{text-align: right;
		   margin-left: 900px;}

#checkbox_field{text-align: center;}

</style>
<!-- jQuery -->
    <script src="jquery.js"></script>
	
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap.min.js"></script>
	<script> 

function loginCookie() {
    document.cookie = "loginvalue=yes; expires=Thu, 18 Dec 2019 12:00:00 UTC";
	isUserLoggedIn();
}

function logoutCookie() {
    document.cookie = "loginvalue=yes; expires=Thu, 18 Dec 2014 12:00:00 UTC";
	isUserLoggedIn();
	window.location = '/ghaynes1/Homepage.php';
	
}

function isUserLoggedIn(){ 
	var loginVal = getCookie("loginvalue"); 
	if(loginVal == null) {
			 $('#login').show();
			 $('#logout').hide(); 
		} else { 
			$('#login').hide();
			$('#logout').show(); 
		} 
	}
	 
	$( document ).ready(function() { 
		isUserLoggedIn(); 
	});
	

function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    } 
    return decodeURI(dc.substring(begin + prefix.length, end));
}

$( document ).ready(function() {
		
		isUserLoggedIn();
		
	});
</script>
<script>
	"use strict";
	$(function() {
	$('#checkboxform').submit(function() {
        if ($('input[type=checkbox]:checked').length == 0) {
            alert('Please select one or more of the following items.');
        }
		//e.preventDefault();
    });
	
	});
	</script>

<body>
<div id="login" class="login">
	<button type='button' class='btn btn-primary mybtn'><a href="login.php">LOGIN</a></button>
</div>
<div id="logout" class="logout">
	<button type="button" class="btn btn-primary mybtn" onclick="logoutCookie()">LOGOUT</button>
</div>
	<button type="button" class="btn btn-secondary secondbtn"><a href="signup.php">SIGNUP</a></button>

    <div class="brand">FOODBOOK</div>
    <div class="address-bar">Where eating, dining, and resturant taste can become social</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Homepage.php">Home</a>
                    </li>
                    <li>
                        <a href="about_us.php">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
						<h2 class="intro-text text-center">Select the different kinds of resturants you prefer.</h2>
                    <hr>
                </div>
				<div id="checkbox_field">
				<form id="checkboxform" action="View_results.php" method="post">
				<label for="category"><h3>Resturant Categories</h3></label><br /><br />
				<fieldset class="group">
					<label>Seafood:</label>
					<input type="checkbox" name="checkbox1" value="Seafood"/>
					<br /><br />
					<label>Bars and Grills:</label>
					<input type="checkbox" name="checkbox2" value="BarsandGrills"/>
					<br /><br />
					<label>Steakhouses:</label>
					<input type="checkbox" name="checkbox3" value="Steakhouse"/>
					<br /><br />
					<label>Italian:</label>
					<input type="checkbox" name="checkbox4" value="Italian"/>
					<br /><br />
				</fieldset>
                </div>
				<button type="submit" class="btn btn-primary submitbtn">CONTINUE</button>
				</form>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
