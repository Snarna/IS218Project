
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
    <!-- My Style Sheet-->
    <link href="../css/mystyle.css" rel="stylesheet">
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
              <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">More Items</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      <br>
      <br>
      <form class="form-signup">
        <h2 class="form-signup-heading">Sign Up Form</h2>
        <div class="form-group">
          <label for="email" class="col-form-label">Email <span class="requiredstar">*</span> </label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="form-group row">
          <div class="col-sm-6">
            <label for="firstname" class="col-form-label">First Name <span class="requiredstar">*</span> </label>
            <input type="text" class="form-control" id="firstname" required>
          </div>
          <div class="col-sm-6">
            <label for="lastname" class="col-form-label">Last Name <span class="requiredstar">*</span> </label>
            <input type="text" class="form-control" id="lastname" required>
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-form-label">Password <span class="requiredstar">*</span> </label>
          <input type="password" class="form-control" id="password" required>
        </div>
        <div class="form-group">
          <label for="passwordconfirm" class="col-form-label">Confrim Password <span class="requiredstar">*</span> </label>
            <input type="password" class="form-control" id="passwordconfirm" required>
        </div>
        <div class="form-group">
          <label for="secquestion1" class="col-form-label">Security Question 1 <span class="requiredstar">*</span> </label>
          <select class="form-control" id="secquestion1">
            <option value="What high school did you attend?">What high school did you attend?</option>
            <option value="What was the make of your first car?">What was the make of your first car?</option>
            <option value="Which is your favorite web browser?">Which is your favorite web browser?</option>
          </select>
          <input type="text" class="form-control" id="secquestion1ans" required>
        </div>
        <div class="form-group">
          <label for="secquestion2" class="col-form-label">Security Question 2 <span class="requiredstar">*</span> </label>
          <select class="form-control" id="secquestion2">
            <option value="In what city were you born?">In what city were you born?</option>
            <option value="What is the name of your favorite pet?">What is the name of your favorite pet?</option>
            <option value="What is your favorite color?">What is your favorite color?</option>
          </select>
          <input type="text" class="form-control" id="secquestion2ans" required>
        </div>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up!</button>
      </form>

    </div> <!-- /container -->
  </body>
</html>
