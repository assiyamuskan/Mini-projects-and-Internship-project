<html>
<body >
<?php
$dbh=mysqli_connect('localhost','root','','gas agency') or die(mysqli_error());
mysqli_select_db($dbh,'gas agency') or die (mysqli_error($dbh));

$c_id=$_REQUEST['c_id'];



$query="delete from customer2 where c_id='$c_id'";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data deleted successfully!!!!";

$var=mysqli_query($dbh,"SELECT * from customer2");
echo"<table border size=1>";
echo"<tr><th>c_id</th> <th>c_name</th> <th>location</th> <th>a_id</th> </tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
}
echo"</table>";

?>

<h4><font color="cyan"><a href="customerdel.html">click here to delete the customer details</a></font></h4>
<h4><font color="cyan"><a href="gas.html">click here to go back to the home page </a></font></h4>
</body>
</html>