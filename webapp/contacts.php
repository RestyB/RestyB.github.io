<html>
<?php		
		/*header("location:login.php");*/
		?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
	 <link href="style.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="css/scrolling-nav.css" rel="stylesheet">
	<link rel="shortcut icon" href="imag/icon.jpg">
	   
</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Project Portfolio</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->			
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a link href="index.php">Home</a>
                    </li>
                    <li>
                        <a link href="about.php">About</a>
                    </li>
                    <li>
                        <a link href="contacts.php">Contacts</a>
                    </li>
					<li>
                        <a link href="poftfolio.php">Portfolio</a>
                    </li>
					<li>
                        <a link href="admin.php">Administrator</a>
                    </li>
					<li>
                        <a link href="register.php">Register</a>
                    </li>
					<li>
                        <a link href="login.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	
	<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 "><br>
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">"For questions and suggestions? Let us know."</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm">
                        <div class="row">
                            <div class="col-md-center">
                                <div class="form-group">
                                    Name:<input type="text" class="form-control">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    Email Address:<input type="email" class="form-control">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    Enquiry:<input type="tel" class="form-control">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
