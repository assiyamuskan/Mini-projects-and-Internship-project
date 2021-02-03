<html>
<body>
<?php
$dbh=mysqli_connect('localhost','root','')or die(mysqli_error());
mysqli_select_db($dbh,'gas agency') or die(mysqli_error($dbh));


$var=mysqli_query($dbh,"SELECT * FROM agency");
echo "<table border size=1>";
  echo "<tr><th>a_id</th> <th>a_name</th> <th>location</th>  </tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td>  </tr>";
   } 
   echo"</table>";


   echo '<a href="agencyindex.html">back </a>';
    
 $db_host="localhost";
 $db_name="gas agency";
 $db_user="root";
 $db_pass="";
$con=mysqli_connect("$db_host","$db_user","$db_pass")or die("could not connect");
mysqli_select_db($dbh,'gas agency') or die(mysqli_error($dbh));




 

mysqli_close($con);

?>
</body>
</html>	