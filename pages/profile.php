<?php
// Check Session
session_start ();
if (! isset ( $_SESSION ['loginstatus'] )) {
 header ( 'Location: ../pages/login.php' );
}

require('../classes/dbc.class.php');
//Connect To Database
$dbc = new dbc;
$dbc->connect_database();

//Do query
$query = "SELECT * FROM users WHERE id='".$_SESSION['id']."'";
$result = $dbc->do_select_query($query);
while($row = $result->fetch_assoc()){
	$email = $row['email'];
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$regdate = $row['reg_date'];
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>My Profile</title>
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

			<!-- jQuery Core -->
      <script src="../js/jquery.js"></script>
      <!-- Bootstrap JS -->
      <script src="../js/bootstrap.min.js"></script>
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
                  <ul class="nav navbar-nav">
                     <li><a href="../pages/home.php">Home</a></li>
                     <li><a href="#">More Items</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo $_SESSION['firstname']?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="../pages/profile.php"><i></i>Profile</a></li>
                           <li class="divider"></li>
                           <li><a href="../pages/logout.php"><i></i>Logout</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
         </nav>
         <br>
         <div class="container animated fadeIn">
            <div class="row">
               <div class="col-xs-12 col-sm-12">
                  <div class="well well-sm">
                     <div class="row">
                        <div class="col-sm-2">
                           <img src="../images/prifile-pic.png" alt="" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-sm-10">
                           <h4><?php echo $firstname . ' ' . $lastname?> </h4>
                           <p>
                              <i class="glyphicon glyphicon-envelope"></i> &nbsp; <?php echo $email?>
                              <br />
                              Registration Date: &nbsp; <?php echo $regdate?>
                           </p>
                           <!-- Split button -->
                           <div class="btn-group">
                              <button type="button" class="btn btn-primary">More Option (Edit?)</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /container -->
   </body>
</html>
