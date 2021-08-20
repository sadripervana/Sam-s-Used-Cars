<?php

$mysqli = new mysqli('localhost','admin','admin','Cars');
/* check connection */
if(mysqli_connect_error()){
printf("Connect failed:%s\n",mysqli_connect_error());
exit();
}

echo 'Connected successfully to mySQL <BR>';

//select a database to work with
$mysqli->select_db("Cars");
echo ("Selected the Cars database.<br>");
