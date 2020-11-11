<?php
 $DATABASE_HOST = 'localhost';
 $DATABASE_USER = 'root';
 $DATABASE_PASS = '';
 $DATABASE_NAME = 'carrental';
$link = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME); if ( mysqli_connect_errno() )
{ exit('Failed to connect to MySQL: ' . mysqli_connect_error()); }
     if(isset($_POST['btnsearch']))
     {
          $toSearch = $_POST['txtTRN'];
          $query = mysqli_query($link,"Select * from `tbltransaction` where CONCAT
(`TRNo`,`TDate`,`SubTotal`,`ProFee`,`eVAT`,`NetCost`,`CENo`,`CLID`) LIKE '%" .$toSearch. "%'");
} else {
         $query = mysqli_query($link,"SELECT * FROM tbltransaction");
     }
?>
<html>
<head>
<link rel="stylesheet" href="mystyle_copy.css">
<title>Seach and Delete</title>
</head>
<body>
<form action="searchDeleteRecord.php" method="POST">
<table>
<tr>
<td colspan="7">
SEARCH HERE: <input type="text" name="txtTRN" placeholder="Enter TRN" id="plateno" required>
<input type="submit" value="SUBMIT" name="btnsearch">
</td>
</tr>
<tr>
<th colspan="7">TRANSACTION LIST</th>
</tr>
<tr>
         <th>Transaction Number</th>
         <th>Transaction Date</th>
         <th>SubTotal</th>
         <th>ProFee</th>
         <th>eVAT</th>
         <th>NetCost</th>
         <th>Action</th>
</tr>
<?php while($row = mysqli_fetch_array($query)): ?>
<tr>
         <td><?php echo $row['TRNo']; ?></td>
         <td><?php echo $row['TDate']; ?></td>
         <td><?php echo $row['SubTotal']; ?></td>
         <td><?php echo $row['ProFee']; ?></td>
         <td><?php echo $row['eVAT']; ?></td>
         <td><?php echo $row['NetCost']; ?></td>
         <!--<td><//?php echo $row['CENo']; ?></td>
         <td><//?php echo $row['CLID']; ?></td>-->
         <td><a href="deleteProcess.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
</tr>
<?php endwhile; ?>
</table>
</form>
</body>
</html>