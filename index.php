<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Sam'sUsed Cars</h1>
    <form class="" action="SubmitCar.php" method="post">
      VIN:<input type="text" name="VIN" value=""> <br>
      Make:<input type="text" name="Make" value=""> <br>
      Model:<input type="text" name="Model" value=""><br>
      Price:<input type="text" name="ASKING_PRICE" value=""><br>
      <input type="submit" name="Submit1" value="submit">
      &nbsp;


    </form>
    <hr>
    <form class="" action="viewcar.php" method="get">
      Vin: <input type="text" name="VIN" value="">
      <input type="submit" name="Submit2" value="submit">
    </form>
    <hr>

    <form class="" action="ViewCarsAddImage.php" method="post" enctype="multipart/form-data">
      <label for="file">Filename:</label>
      Vin: <input type="text" name="VIN" value="">
      <input type="file" name="file" id ="file" value=""><br>
      <input type="submit" name="submit" value="Submit">

    </form>
  </body>
</html>
