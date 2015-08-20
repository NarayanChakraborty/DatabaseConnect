<?php
include('config.php');
if(isset($_REQUEST['id']))
{
      $id=$_REQUEST['id'];
	  $result=mysql_query("delete from student where std_id='$id'");
	   header('location: view.php');
}
else
{
    header('location: view.php');
}
