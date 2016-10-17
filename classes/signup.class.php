<?php
require('dbc.class.php');

//Connect To Database
$dbc = new dbc;
$dbc->connect_database();

//Get Data

//Do query

$result = $dbc->do_select_query($query);

//If result is not a string
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
}

?>
