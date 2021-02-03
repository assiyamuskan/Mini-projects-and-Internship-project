<html>
<head><title>update</title></head>
<body>
<?php


$conn=mysqli_connect("localhost","root",",'gas agency');
if(!$conn)
{
   die('could not connect');
}
$sql="select * from owner";
mysqli_select_db($conn,'gas agency');
$res=mysqli_query($sql,$conn);
echo "<table border size=1>";
echo "<tr><th>o id</th> <th>o name</th> <th>a id</th> </tr>";
if(!$res)
{
die('could not get data');
}
while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
   echo "<tr>
         <td>{$row['o_id']}</td>
		 <td>{$row['o_name']}</td>
		 <td>{$row['a_id']}</td>
		 </tr>\n";
		 }
		 echo "</table>";
		 echo "fetched data succeessfully!!!!\n";
		 mysqli_close($conn);
 ?>
 </body>
</html>