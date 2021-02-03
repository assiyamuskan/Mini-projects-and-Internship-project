<html>
<body>

<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '','gas agency') or die(mysqli_error());
    mysqli_select_db($dbh,'gas agency') or die(mysqli_error($dbh));

    $a_id = $_REQUEST['a_id'];
    $a_name = $_REQUEST['a_name'];
     $location = $_REQUEST['location'];
     

    $query = "INSERT INTO agency VALUES ('$a_id', '$a_name','$location')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));

    echo "Data Inserted Successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM agency");

 echo"<table border size=1>";
 echo"<tr><th>a_id</th> <th>a_name</th> <th>location</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td><td>$arr[2]</td> </tr>";
 } 
 echo"</table>";

?>
<h4><font color="cyan"><a href="agencydel.html">click here to delete the agency details</a></font></h4>
<h4><font color="cyan"><a href="gas.html">click here to go back to the home page </a></font></h4>

</body>
</html>