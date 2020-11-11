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

if(isset($_POST['txtCLID'])){
      if(count($_POST)>0)
      {
      $update = mysqli_query($link,"UPDATE tblclient SET Client_Name='" . $_POST['txtName'] . "' , CAddress='" .
      $_POST['txtAddress'] . "', Age='" . $_POST['txtAge'] . "', Gender='" . $_POST['txtGender'] . "'
      ,ContactNo='" . $_POST['txtConNo'] . "', CStatus='" . $_POST['txtStatus'] . "' WHERE CLID='" .
      $_POST['txtCLID'] . "'");
      //var_dump($update);
      if (!$update) {
            printf("Error: %s\n", mysqli_error($link));
            exit();
        }else{
            $message = "Record Modified Successfully";
        }
      }
}
$clid = $_GET['CLID'];
$result = mysqli_query($link,"SELECT * FROM tblclient WHERE CLID = '". $clid . "'");
if (!$result) {
      print($_GET['CLID']);
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
<label for="clientname">
<i class="fas fa-user">Client Name</i>
</label>
<input type="hidden" name="txtCLID" class="txtField" value="<?php echo $row['CLID']; ?>">
<input type="text" name="txtName"  value="<?php echo $row['Client_Name']; ?>">
<label for="city">
<i class="fas fa-user">City</i>
</label>
<input type="text" name="txtAddress" class="txtField" value="<?php echo $row['CAddress']; ?>">
<label for="age">
<i class="fas fa-user">Age</i>
</label>
<input type="text" name="txtAge" class="txtField" value="<?php echo $row['Age']; ?>">
<label for="gender">
<i class="fas fa-user">Gender</i>
</label>
<input type="text" name="txtGender" class="txtField" value="<?php echo $row['Gender']; ?>">
<label for="contactnumber">
<i class="fas fa-user">Contact Number</i>
</label>
<input type="text" name="txtConNo" class="txtField" value="<?php echo $row['ContactNo']; ?>">
<label for="civilstatus">
<i class="fas fa-user">Civil Status</i>
</label>
<input type="text" name="txtStatus" class="txtField" value="<?php echo $row['CStatus']; ?>">
<input type="submit" name="submit" value="Submit" class="buttom">
</form>
</div>
</body>
</html>