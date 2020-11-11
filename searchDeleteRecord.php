<?php
 $DATABASE_HOST = 'localhost';
 $DATABASE_USER = 'root';
 $DATABASE_PASS = '';
 $DATABASE_NAME = 'carrental';
$link = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME); if ( mysqli_connect_errno() )
{ exit('Failed to connect to MySQL: ' . mysqli_connect_error()); }
     if(isset($_POST['btnsearch']))
     {
          $toSearch = $_POST['txtName'];
          $query = mysqli_query($link,"Select * from `tblclient` where CONCAT
(`Client_Name`,`CAddress`,`Age`,`Gender`,`ContactNo`,`CStatus`) LIKE '%" .$toSearch. "%'");
} else {
         $query = mysqli_query($link,"SELECT * FROM tblclient");
     }
?>
<html>
<head>
<link rel="stylesheet" href="mystyle_copy2.css">
<title>Seach and Delete</title>
</head>
<body>
<form action="searchDeleteRecord.php" method="POST">
<table>
<tr>
<td colspan="7">
SEARCH HERE: <input type="text" name="txtName" placeholder="Enter Client Name" id="plateno" required>
<input type="submit" value="SUBMIT" name="btnsearch">
</td>
</tr>
<tr>
<th colspan="7">CLIENT LISTS</th>
</tr>
<tr>
         <th>Client Name</th>
         <th>City</th>
         <th>Age</th>
         <th>Gender</th>
         <th>Contact Number</th>
         <th>Civil Status</th>
         <th>Action</th>
</tr>
<?php while($row = mysqli_fetch_array($query)): ?>
<tr>
         <td><?php echo $row['Client_Name']; ?></td>
         <td><?php echo $row['CAddress']; ?></td>
         <td><?php echo $row['Age']; ?></td>
         <td><?php echo $row['Gender']; ?></td>
         <td><?php echo $row['ContactNo']; ?></td>
         <td><?php echo $row['CStatus']; ?></td>
         <td><a href="deleteProcess.php?CLID=<?php echo $row["CLID"]; ?>">Delete</a></td>
</tr>
<?php endwhile; ?>
</table>
</form>
</body>
</html>