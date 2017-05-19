	<?php
	
	function GetResults() {

	$type1 = filter_input(INPUT_POST, 'checkbox1'); 
	$type2 = filter_input(INPUT_POST, 'checkbox2');
    $type3 = filter_input(INPUT_POST, 'checkbox3');	
    $type4 = filter_input(INPUT_POST, 'checkbox4');	
	$returnValue = true;
	$resturant_types = "";
 
	if ($type1 == "Seafood") { 
		$resturant_types = $resturant_types. " ". "'".$type1."'"; 
	
	}
	
	if ($type2 == "BarsandGrills") { 
		$resturant_types = $resturant_types. " ". ",'".$type2."'"; 
	
	} 
	
	if ($type3 == "Steakhouse") { 
		$resturant_types = $resturant_types. " ". ",'".$type3."'"; 
	
	} 
	
	if ($type4 == "Italian") { 
		$resturant_types = $resturant_types. " ". ",'".$type4."'"; 
	
	} 
	$resturant_types = trim($resturant_types, " ,");
	

	$connString= "Provider=Microsoft.ACE.OLEDB.12.0;Data Source=./Database/foodbook3.mdb;Persist Security Info=False;";
	try {
		$conn = new COM('ADODB.Connection');
		$conn->ConnectionTimeout = 60;
		$conn->Open($connString);
	} catch (exception $e) {
		die( "Could not connect - $e");
	}
	$sqlCommand = "select * from Restaurant where CuisineType IN ($resturant_types)";
 
	$rs = $conn->Execute($sqlCommand);
	
	if($rs->EOF) {
	     $returnValue = false;
	} else { 
			print "<center><h2>Your Search Results</h2>";
			print "<table border='1' padding ='3' width='300' style='font-size:15px;'>
					<tr>
					<th>Restaurant Name</th>
					<th>Description</th>
					<th></th>
					</tr>";
			while(!$rs->EOF)
			{
				
				print "<tr>";
				print "<td>" . $rs['RestName'] . "</td>";
				print "<td>" . $rs['Description'] . "</td>";
				print "<td><a href='/ghaynes1/post.php'>POST</a></td>";
				print "</tr>";
				  
			   $rs->MoveNext(); 
			}
			print "</table></center>";
	}
	$rs = $conn->Close();
 }
 

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
 
 
 .box { 
	text-align: center;
 
 }
 
  .myMenu { 
	font-size: 10px;
	text-align:center;
 }
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

<body>
<div id="login">
	<button type='submit' class='btn btn-primary mybtn'><a href="login.php">LOGIN</a></button>
</div>
<div id="logout">
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
		<div class="box">
			<?php GetResults(); ?> 
		</div>
        <!--div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">About
                        <strong>FOODBOOK</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="slide-2.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <p>Have you ever wanted to tell the world about a fantastic resturant that you went to? Or even a crappy resturant that you went to.
					You can do all of that with FOODBOOK.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div-->


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
