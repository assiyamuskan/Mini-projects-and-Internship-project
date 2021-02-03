<html>
<body >
<?php
$dbh=mysqli_connect('localhost','root','','gas agency') or die(mysqli_error());
mysqli_select_db($dbh,'gas agency') or die (mysqli_error($dbh));

$b_id=$_REQUEST['b_id'];



$query="submit from booking where b_id='$b_id'";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data deleted successfully!!!!";

$var=mysqli_query($dbh,"SELECT * from booking");
echo"<table border size=1>";
echo"<tr><th>b_id</th> <th>c_id</th> <th>amount</th> <th>subsidy</th> </tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
}
echo"</table>";

?>

<h4><font color="cyan"><a href="bsubmit.html">click here to submit the booking details</a></font></h4>
<h4><font color="cyan"><a href="gas.html">click here to go back to the home page </a></font></h4>
</body>
</html>
<?php
$db_host="localhost";
$db_name="gas agency";
$db_user="root";
$db_pass="";
$con=mysqli_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysqli_select_db('gas agency')or die(mysqli_error($dbh));
$pO=mysqli_query("call total(@out);");
$rs=mysqli_query('SELECT @out');

while($arr=mysqli_fetch_row($rs))
{
	echo'<br>';
	echo'Total booking=   '.$arr[0];
}

mysqli_close($con);
?>