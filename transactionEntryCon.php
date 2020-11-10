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
$eTRNo = mysqli_real_escape_string($link, $_REQUEST['txtTRNo']);
$eTDate = mysqli_real_escape_string($link, $_REQUEST['txtTDate']);
$eSubTotal = mysqli_real_escape_string($link, $_REQUEST['txtSubTotal']);
$eProFee = mysqli_real_escape_string($link, $_REQUEST['txtProFee']);
$eeVAT = mysqli_real_escape_string($link, $_REQUEST['txteVAT']);
$eNetCost = mysqli_real_escape_string($link, $_REQUEST['txtNetCost']);
$eCENo = mysqli_real_escape_string($link, $_REQUEST['txtCENo']);
$eCLID = mysqli_real_escape_string($link, $_REQUEST['txtCLID']);
$sql = "INSERT INTO tbltransaction (TRNo,TDate,SubTotal,ProFee,eVAT,NetCost,CENo,CLID)
VALUES ('$eTRNo', '$eTDate','$eSubTotal','$eProFee','$eeVAT','$eNetCost', '$eCENo', '$eCLID')";

if(mysqli_query($link, $sql))
{
    echo "Records added successfully.";
}
else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>