<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sam's Used Cars</title>
  </head>
  <body>
    <h1>Sam's Used Cars</h1>
    <?php
      include_once 'includes/db.inc.php';
      $vin = $_GET['VIN'];
      $query = "DELETE FROM INVENTORY WHERE VIN = '$vin';";
      echo "$query <br>";
      if($result = $mysqli->query($query)){
        echo "The vehicle with VIN $vin has been deleted.";
      }
      else {
        echo "Sorry, a vehicle with VIN of $vin cannot be found".nysql_error()."<br>";
      }
      /*Try to execute the Delete against the database*/
      $mysqli->close();
     ?>

  </body>
</html>
