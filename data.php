<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $target = mktime(0,0,0,9,9,2021);
      $time = time();
      $difference = ($target - $time);
      $days = (int) ($difference / 86400);
      echo "Ditelindja ime eshte pas $days ditesh";
     ?>
  </body>
</html>
