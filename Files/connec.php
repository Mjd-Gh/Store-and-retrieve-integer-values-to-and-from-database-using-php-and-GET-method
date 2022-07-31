<?php
  
  $username = "root";
  $password = "";

  //Connect to the database & check for any error connection

  try{
      $database = new PDO("mysql:host=localhost;dbname=integers;", $username, $password);
      $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch(PDOException $e){
      echo "Connection failed: " . $e->getMessage();
  }
  
?>