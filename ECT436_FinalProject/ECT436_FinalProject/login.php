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
	background-color: white;
}
.hidden{ 
	display: none;


}

.show{
	display: block;
}

#myfield{padding-left: 245px;}


#secondfield{padding-right: 40px;}

#login_field{text-align: center;}

.submitbtn{text-align: right;
		   margin-left: 900px;}

 .myMenu { 
	font-size: 10px;
	text-align:center;
 }


</style>


<body>
<div id="login">
	<button type="button" class="btn btn-primary mybtn">LOGIN</button>
</div>
<div id="logout">
	<button type="button" class="btn btn-primary mybtn" onclick="logoutCookie()">LOGOUT</button>
</div>
	<a class="btn btn-secondary secondbtn" href="signup.php">SIGNUP</a>

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
                        <h2 class="intro-text text-center"><strong>Login Page</strong></h2>
                    <hr>
                </div>
                <div id="login_field">
                <form id="signupform" method="post" action="login_success.php">
                    <label>Username:</label>
                    <input class="required" type="text" name="username" title="Please enter your username."/>
                    <br /><br />
                    <label>Password:</label>
                    <input class="required" type="password" name="pswd" title="Please enter your password."/>
                    <br /><br />
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
	
	
	
	
<!-- jQuery -->
    <script src="jquery.js"></script>
	
	 <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap.min.js"></script>
	
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
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
	
	
	
	
	
	
	
</body>

</html>
