<?php
 $DATABASE_HOST = 'localhost';
 $DATABASE_USER = 'root';
 $DATABASE_PASS = '';
 $DATABASE_NAME = 'carrental';
  $link = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
  if ( mysqli_connect_errno() )
  {
         exit('Failed to connect to MySQL: ' . mysqli_connect_error());
  }
$cName = mysqli_real_escape_string($link, $_REQUEST['txtName']);
$cAddress = mysqli_real_escape_string($link, $_REQUEST['txtAddress']);
$cAge = mysqli_real_escape_string($link, $_REQUEST['txtAge']);
$cGender = mysqli_real_escape_string($link, $_REQUEST['txtGender']);
$cContactNo = mysqli_real_escape_string($link, $_REQUEST['txtConNo']);
$cStatus = mysqli_real_escape_string($link, $_REQUEST['txtStatus']);
$sql = "INSERT INTO tblclient (Client_Name,CAddress,Age,Gender,ContactNo,CStatus) VALUES ('$cName', '$cAddress',
'$cAge','$cGender','$cContactNo','$cStatus')";
if(mysqli_query($link, $sql))
{
    echo "Records added successfully.";
}
else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>