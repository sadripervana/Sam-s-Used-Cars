
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 ?>
 <?php
include_once 'includes/db.inc.php' ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Car Saved</title>
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    <?php
    //Capture the values post to this php program from the text fields in the form
    $VIN = $_POST['VIN'];
    $Make = $_POST['Make'];
    $Model = $_POST['Model'];
    $Price = $_POST['ASKING_PRICE'];

    //Build a sql Query using the values from above

    $query = "INSERT INTO INVENTORY
    (VIN, Make, Model, ASKING_PRICE)
    VALUES (
      '$VIN',
      '$Make',
      '$Model',
      '$Price'
    )";

    //Print the query to browser so you can see it
    echo($query."<br>");

    $mysqli = new mysqli('localhost','admin','admin','Cars');
    //check connection
    if(mysqli_connect_error()){
      printf("Connect failed:%s\n",mysqli_connect_error());
      exit();
    }

    echo 'Connected successfully to mySQL <br>';

    //select a database to work with
    $mysqli ->select_db("Cars");


    /* Try to insert the new car into database */
    if($result = $mysqli->query($query)){
      echo "<p> You have successfully entered $Make $Model into the database. </p>";
    }
    else
    {
      echo "Error entering $VIN into database".$mysqli->error."<br>";
    }
    $mysqli->close();
     ?>
  </body>
</html>
