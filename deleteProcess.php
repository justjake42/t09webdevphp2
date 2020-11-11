<?php
 $DATABASE_HOST = 'localhost';
 $DATABASE_USER = 'root';
 $DATABASE_PASS = '';
 $DATABASE_NAME = 'carrental';
$link = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME); if ( mysqli_connect_errno() )
{ exit('Failed to connect to MySQL: ' . mysqli_connect_error()); }
if(count($_POST)>0)
{
    mysqli_query($link,"Delete from tbltransaction WHERE id=" . $_POST['txtid'] . "");
    $message = "Record Successfully DELETED";
    header('Location: searchDeleteRecord.php');
}
$result = mysqli_query($link,"SELECT * FROM tbltransaction WHERE id=" . $_GET['id'] . "");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Data</title>
<link rel="stylesheet" href="mystyle_copy.css">
</head>
<body>
<div class="login">
<h1>You are about to delete this record. Click SUBMIT button to proceed. </h1>
<form name="frmUser" method="post" action="deleteProcess.php">
<label for="carengine">

<i class="fas fa-user">Transaction Number</i>
</label>
<input type="hidden" name="txtid" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="txtTRN"  value="<?php echo $row['TRNo']; ?>">
<label for="carmodel">

<i class="fas fa-user">Transaction Date</i>
</label>
<input type="text" name="txtDate" class="txtField" value="<?php echo $row['TDate']; ?>">
<label for="carbrand">

<i class="fas fa-user">Sub Total</i>
</label>
<input type="text" name="txtSubTotal" class="txtField" value="<?php echo $row['SubTotal']; ?>">
<label for="price">

<i class="fas fa-user">Professional Fee</i>
</label>
<input type="text" name="txtProFee" class="txtField" value="<?php echo $row['ProFee']; ?>">
<label for="carcolor">

<i class="fas fa-user">eVAT</i>
</label>
<input type="text" name="txteVAT" class="txtField" value="<?php echo $row['eVAT']; ?>">
<label for="plateno">

<i class="fas fa-user">Net Cost</i>
</label>
<input type="text" name="txtNetCost" class="txtField" value="<?php echo $row['NetCost']; ?>">
<label for="plateno">

<input type="submit" name="submit" value="Submit" class="buttom">
</form>
</div>
</body>
</html>