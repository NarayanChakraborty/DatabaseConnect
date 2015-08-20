<?php
include('config.php');
  	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data View Page</title>
</head>
<body>
<h2>View All Data From Database</h2>

<?php 
if(isset($error_msg))
{
    echo $error_msg;
}
if(isset($success_msg))
{
    echo $success_msg;
}
?>
<table  border="2" cellspacing="2" cellpadding="5" >
	<tr>
		<th>Serial No</th>
		<th>Student Name</th>
		<th>Student Roll</th>
		<th>Student Age</th>
		<th>Student Email</th>
		<th>Action</th>
	</tr>
	<?php
    $i=0;
	$result=mysql_query("select * from student");
	while($row=mysql_fetch_array($result))
	{ 
          $i++;
     	?>
	 <tr>
		<td><?php echo $i;?></td>
		<td><?php echo $row['std_name'];?></td>
		<td><?php echo $row['std_roll'];?></td>
		<td><?php echo $row['std_age'];?></td>
		<td><?php echo $row['std_email'];?></td>
		<td><a href="edit.php?id=<?php echo $row['std_id'];?>">Edit</a> &nbsp;|&nbsp;<a href="delete.php?id=<?php echo $row['std_id'];?>">Delete</a></td> 
	</tr>
    <?php
	}
	?>
</table>
<a href="index.php">Back to Previous</a>
</body>
</html>