

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
	
	
	<link href="jquery-te-1.4.0.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
	
	<!-- Font Icon CSS -->
	 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

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
 a{ 
	text-decoration: none;
 }
 
 .box { 
	text-align: center;
 
 }
 
  .myMenu { 
	font-size: 10px;
	text-align:center;
 }
 
 #deneme { 
			
			margin:150px auto;
			text-align: center;
		
}
 
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
  
    <!-- jQuery -->
    <script src="jquery.js"></script>
	
	<script src="jquery-te-1.4.0.js"></script>

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
		
		$(".foodbookTextBody").jqte(); 
	});
</script>




<body>
<div id="login">
	<button type='button' class='btn btn-primary mybtn'>LOGIN</button>
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
                        <a href="Hompage.php">Home</a>
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
                        <h2 class="intro-text text-center"><strong>Write Your Review of This Resturant</strong></h2>
                    <hr>
                </div> 
				<form action="Homepage.php" method="post">
					<center>
						<div style="width: 500px; align:left;">
							<h4>
								Title
							</h4>
							<input name="nameAreaFoodBookTitle" id="txtAreaFoodBookTitle" class="foodbookTextTitle" style="width: 400px;"></input>
							<br/><br/>
							<h4>
								Body
							</h4>
							<textarea name="nameAreaFoodBookBody" id="txtAreaFoodBookBody" class="foodbookTextBody" rows="40" cols="25" ></textarea>
							<button type="submit" class="btn btn-primary submitbtn postbtn">POST</button> 
						</div>
					</center>
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
