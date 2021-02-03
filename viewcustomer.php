<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysqli_connect("localhost","root","",'');
if(!$conn)
{
   die('could not connect');
}
$sql=mysqli_query($dbh,"SELECT * FROM customer2");
mysqli_select_db('gas agency');
$res=mysqli_query($sql,$conn);
echo "<table border size=1>";
echo "<tr><th>c id</th> <th>c name</th> <th>a id</th> <th>location</th> </tr>";
if(!$res)
{
die('could not get data');
}
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
   echo "<tr>
         <td>{$row['c_id']}</td>
		 <td>{$row['c_name']}</td>
		 <td>{$row['a_id']}</td>
		 <td>{$row['location']}</td>
		 </tr>\n";
		 }
		 echo "</table>";
		 echo "fetched data succeessfully!!!!\n";
		 mysqli_close($conn);
 ?>
 </body>
</html>