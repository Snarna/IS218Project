<?php
require('dbc.class.php');

//Start Session
session_start();

//Connect To Database
$dbc = new dbc;
$dbc->connect_database();

//Get Data
$email = $_POST['email'];
$password = $_POST['password'];

//Do query
$query = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."'";
$result = $dbc->do_select_query($query);

//If result is not a string
if(!is_string($result)){
  if($result->num_rows == 1){
    while($row = $result->fetch_assoc()){
      //Success
      $_SESSION['loginstatus'] = "1";
      $_SESSION['id'] = $row['id'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['firstname'] = $row['firstname'];
      $_SESSION['lastname'] = $row['lastname'];
      echo "pass";
    }
  }
  else{
    echo "Wrong email or password.";
  }
}
else{
  echo "Somthing went wrong so badly..";
}

?>
