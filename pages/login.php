
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign In Page</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/login.css" rel="stylesheet">
    <!-- My Style Sheet-->
    <link href="../css/mystyle.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="http://sstatic.net/stackoverflow/img/favicon.ico">
    <!-- jQuery Core -->
    <script src="../js/jquery.js"></script>
    <!-- My JavaScript Code -->
    <script>
    $(document).ready(function() {
      //Hide Msg Div
      $("#loginresponsediv").hide();

      //On Form Submit
      $("form").submit(function(event){
        //Hide Msg Div
        $("#loginresponsediv").hide();

        //Prevent Submit
        event.preventDefault();

        //Get Information From Form
        var email = $("#inputemail").val();
        var password = $("#inputpassword").val();
        if(email && password){
          $.ajax({
            url: "../classes/login.class.php",
            type: "POST",
            data: {email:email, password:password},
            success: function(data){
              $("#loginresponsediv").html(data);
              $("#loginresponsediv").show();
            },
            error: function(err){
              console.log("Err:" + err);
            }
          });
        }
      });

    });
    </script>
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
                <li class="active"><a href="../pages/login.php">Login</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <br>
        <br>
        <form class="form-login">
          <h2 class="form-login-heading">Please Login</h2>
          <div class="alert alert-danger" id="loginresponsediv">
          </div>
          <label for="inputemail" class="sr-only">Email address</label>
          <input type="email" id="inputemail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputpassword" class="sr-only">Password</label>
          <input type="password" id="inputpassword" class="form-control" placeholder="Password" required>
          <div class="row">
            <div class="col-sm-6">
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" value="">
                  Remember Me
                </label>
              </div>
            </div>
          </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <div class="row">
          <div class="col-sm-6">
            <a href="../pages/signup.php">Sign Up!</a>
          </div>
          <div class="col-sm-6">
            <a class="pull-right" href="../pages/forgotpassword.php">Forgot password</a>
          </div>
        </div>
      </form>
    </div> <!-- /container -->
  </body>
</html>
