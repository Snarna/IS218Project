<?php
require('dbc.class.php');

//Connect To Database
$dbc = new dbc;
$dbc->connect_database();

//Get Data
$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$sq1 = $_POST['sq1'];
$sa1= $_POST['sa1'];
$sq2 = $_POST['sq2'];
$sa2 = $_POST['sa2'];
$reg_date = date('Y-m-d G:i:s');
$last_login_date = date('Y-m-d G:i:s');
//Do query
$query = "INSERT INTO users (email, password, firstname, lastname, security_question_1, security_answer_1, security_question_2, security_answer_2, reg_date, last_login_date) VALUES('".$email."','".$password."','".$firstname."','".$lastname."','".$sq1."','".$sa1."','".$sq2."','".$sa2."','".$reg_date."','".$last_login_date."')";
$result = $dbc->do_insert_query($query);

//If Success
if($result){
  header("Location https://localhost/pages/signupsuccess.php");
}
else{
  echo $result;
}
//If result is not a string
/*
if(!is_string($result)){
  if($result->num_rows == 1){
    while($row = $result->fetch_assoc()){
      //Success
      $_SESSION['loginstatus'] = "1";
      $_SESSION['email'] = $row['email'];
      $_SESSION['firstname'] = $row['firstname'];
      $_SESSION['lastname'] = $row['lastname'];
      header('Location: http://localhost/pages/home.php');
      die();
    }
  }
  else{
    echo "Wrong email or password.";
  }
}
else{
  echo "Somthing went wrong so badly..";
}*/

?>
