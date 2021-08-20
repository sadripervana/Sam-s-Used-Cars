<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sam's Used Cars</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>Sam's Used Cars</h1>
    <h3>Complete Inventory</h3>
    <?php
    include 'includes/db.inc.php';
    $query = "SELECT * FROM INVENTORY;";
    /*Try to query the database */
    if($result = $mysqli->query($query)){
      //Dont do anything if successful.
    }
    else {
      echo "Error getting cars from database:".mysqli_error()."<br>";
    }

    //Create the table headers
    echo "<table id='Grid' style = 'width:80%'><tr> ";
    echo "<th style = 'width:50px'> Make </th>";
    echo "<th style = 'width:50px'> Model </th>";
    echo "<th style = 'width:50px' > Asking Price </th>";
    echo "</tr>\n";

    $class = "odd"; //Keep track of the whether a row was even or odd,so we can style it later


    //Loop through the rows returned by the query,creating a table row for each
    while($result_ar = mysqli_fetch_assoc($result)){
      echo "<tr class=\"$class\">";
      echo "<td> ".$result_ar['Make']."</td>";
      echo "<td>".$result_ar['Model']."</td>";
      echo "<td>".$result_ar['ASKING_PRICE']."</td>";
      echo "</td> </tr>\n";

      //If the last row was even, make the next one odd and vice-versa
      if($class == "odd"){
        $class = "even";
      }
      else
      {
        $class = "odd";
      }
    }
    echo "</table>";
    $mysqli->close();
     ?>

  </body>
</html>
