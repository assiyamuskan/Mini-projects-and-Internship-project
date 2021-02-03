<html>
<head>update</head>
<body>
<?php
if(isset($_POST['update']))
{
$conn=mysqli_connect("localhost","root",'','gas agency');
if(!$conn)
{
   die('could not connect');
}
$o_id=$_POST['o_id'];
$a_id=$_POST['a_id'];
$mysqli="update owner set a_id='$a_id' where o_id='$o_id'";
mysqli_select_db($dbh,'gas agency');
$ret=mysqli_query($mysqli,$conn);
if(!$ret)
{
  die('could not update data:');
  }
  
 echo "updated successfully\n";
 echo "<a href='viewowner.php'>view record</a>";
 
 mysqli_close($conn);
 }
 else
 {
 ?>
 <form method="post" action="">
 <table width "400" border="0" cellspacing="1" cellpadding="2">
 <tr>
 <td width="100">o_id</td>
 <td><input name="o_id" type="text" id="o_id"</td>
 </tr>
 <tr>
 <td width="100">a_id</td>
 <td><input name="a_id" type="text" id="a_id"</td>
</tr>
<tr>
<td width="100"></td>
<td></td>
</tr>
<td width="100"></td>
<td>
<input name="update" type="submit" id="update" value="UPDATE">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html>