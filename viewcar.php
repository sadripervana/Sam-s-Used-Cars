<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sam's Used Cars</title>
  </head>
  <body>
    <h1>Sams's Used Cars</h1>
    <?php
      include_once 'includes/db.inc.php';
      $vin = $_GET['VIN'];
      $query = "SELECT * FROM INVENTORY WHERE VIN ='$vin';";
      /* TRY to query the database */
      if($result = $mysqli->query($query)){
        //Dont do anything if successful.
      }
      else {
        echo "Sorry a vehicle with Vin of $vin cannot be found".mysqli_error()."<br>";
      }
      //Loop through all the rows returned by the query,creating a table row for each\
      while($result_ar = mysqli_fetch_assoc($result)){
        $year = $result_ar['YEAR'];
        $make = $result_ar['Make'];
        $model = $result_ar['Model'];
        $trim = $result_ar['TRIM'];
        $color = $result_ar['EXT_COLOR'];
        $interior = $result_ar['INT_COLOR'];
        $mileage = $result_ar['MILEAGE'];
        $transmission = $result_ar['TRANSMISSION'];
        $price = $result_ar['ASKING_PRICE'];
      }

      $query = "SELECT * FROM images WHERE VIN ='$vin';";
      /* TRY to query the database */
      if($result = $mysqli->query($query)){
        //Dont do anything if successful.
      }
      else {
        echo "Sorry a vehicle with Vin of $vin cannot be found".mysqli_error()."<br>";
      }

      while($result_ar = mysqli_fetch_assoc($result)){
        $image = $result_ar['ImageFile'];
        echo "<img src='uploads/$image' width='250px' alt='$image'>";
      }
      // echo "<img src='/PHPProjects/JoyOfPhp/Images/car.jpg' width='250px' alt='$image'>";
      // var_dump();die;
      echo "<p> $year $make $model </p>";
      echo "<p> Asking Price: $price </p>";
      echo "<p> Exterior Color: $color </p>";
      echo "<p> Interior Color: $interior </p>";
      

      $mysqli->close();
     ?>
  </body>
</html>
