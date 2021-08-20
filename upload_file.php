<?php
if($_FILES["file"]["error"]>0)
{
  echo "Error:".$_FILES["file"]["error"]."<br>";
}
else {
  echo "Upload:".$_FILES["file"]["name"]."<br>";
  echo "Size:".($_FILES["file"]["size"]/1024)."kB<br>";
  echo "Store in:"$_FILES["file"]["tmp_name"];
}
