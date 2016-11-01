<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start ();

// Unset all of the session variables.
$_SESSION = array ();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get ( "session.use_cookies" )) {
	$params = session_get_cookie_params ();
	setcookie ( session_name (), '', time () - 42000, $params ["path"], $params ["domain"], $params ["secure"], $params ["httponly"] );
}

// Finally, destroy the session.
session_destroy ();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Logout Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/logout.css" rel="stylesheet">
    <!-- My Style Sheet-->
    <link href="../css/mystyle.css" rel="stylesheet">
    <!-- CSS3 Animation -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- Favicon -->
    <link rel="icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">
  </head>

  <body>
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top mytransparent">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">LOGO</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
              	<li class="active"><a href="../pages/login.php">Login</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      <br>
        <div class="row animated fadeInUp">
          <h1>
            You Have Successfully Logged Out.
          </h1>
        </div>

    </div> <!-- /container -->
  </body>
</html>
