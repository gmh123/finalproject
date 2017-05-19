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

function getCookie() {
    return document.cookie.split(';');
}

function isUserLoggedIn(){ 
	var loginVal = getCookie(); 
		if(loginVal == '') {
			$('#login').show();
			$('#logout').hide();
		} else { 
			$('#login').hide();
			$('#logout').show();
		}

	}

isUserLoggedIn();
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
                        <a href="Homepage.php">Home</a>
                    </li>
                    <li>
                        <a href="about_us.html">About</a>
                    </li>
                </ul>
            </div>
			<div class="collapse navbar-collapse myMenu" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Assignment 1</a></li>
					<li><a href="assignment2.php">Assignment 2</a></li>
					<li><a href="assignment3.php">Assignment 3</a></li>
					<li><a href="deliverable_a.php">Project Deliverable A</a></li>
					<li><a href="signup.php">Assignment 4</a></li>
					<li><a href="../ECT436_Assignment1/deliverable_b.php">Project Deliverable B</a></li
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
