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
  echo "pass";
}
else{
  echo "This shouldn't happen:" . $result;
}


?>
