<?php
  /*
   name of server (hostname) = $server
   username = $username
   password = $password
   name of database = $database
  */
  $server = "#";
  $username = "#";
  $password = "#";
  $database = "#";



  try {
    $connection = mysqli_connect($server, $username, $password, $database);
    if($connection) {
      echo "Database connection was successful";
    }
  }
  catch(Exception $errormsg) {
    echo $errormsg->getMessage()
  }
?>
