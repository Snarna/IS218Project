
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign In Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/signup.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">
  </head>

  <body>
    <div class="container">
        <nav class="navbar navbar-default navbar-fixed-top">
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
                <li><a href="#">Home</a></li>
                <li><a href="#">More Items</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="../pages/signup.html">Sign Up</a></li>
                <li><a href="../pages/login.html">Login</a></li>
                <li><a href="../pages/logout.html">Logout</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <br>
        <br>
        <form class="form-signup">
          <h2 class="form-signup-heading">Find Your Password</h2>
          <div class="form-group">
            <label for="email" class="col-form-label">Please Enter Your Email Address<span class="requiredstar">*</span> </label>
            <input type="email" class="form-control" id="email" required>
          </div>
          <br>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Next</button>
        </form>
    </div> <!-- /container -->
  </body>
</html>
