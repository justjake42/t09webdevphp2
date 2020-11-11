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

if(isset($_POST['txtid'])){
      if(count($_POST)>0)
      {
      $update = mysqli_query($link,"UPDATE tbltransaction SET TRNo='" . $_POST['txtTRN'] . "' , TDate='" .
      $_POST['txtDate'] . "', SubTotal='" . $_POST['txtSubTotal'] . "', ProFee='" . $_POST['txtProFee'] . "'
      ,eVAT='" . $_POST['txteVAT'] . "', NetCost='" . $_POST['txtNetCost'] . "' WHERE id='" .
      $_POST['txtid'] . "'");
      //var_dump($update);
      if (!$update) {
            printf("Error: %s\n", mysqli_error($link));
            exit();
        }else{
            $message = "Record Modified Successfully";
        }
      }
}
$id = $_GET['id'];
$result = mysqli_query($link,"SELECT * FROM tbltransaction WHERE id = '". $id . "'");
if (!$result) {
      print($_GET['id']);
      printf("Error: %s\n", mysqli_error($link));
      exit();
  }else{
      $row= mysqli_fetch_array($result);
  }
?>
<html>
<head>
<title>Update Client Data</title>
<link rel="stylesheet" href="mystyle_copy.css">
</head>
<body>
<div class="login">
       <h1>Edit Client List</h1>
<form name="frmUser" method="post" action="#">
<?php
if(isset($message))
{
        echo '<script>alert("Record Modified Successfully")</script>';
}
?>
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
<input type="submit" name="submit" value="Submit" class="buttom">
</form>
</div>
</body>
</html>