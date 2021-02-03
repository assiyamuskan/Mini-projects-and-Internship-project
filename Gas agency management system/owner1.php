<html>
<body>

<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '','gas agency') or die(mysqli_error());
    mysqli_select_db($dbh,'gas agency') or die(mysqli_error($dbh));

    $o_id = $_REQUEST['o_id'];
    $o_name = $_REQUEST['o_name'];
    $a_id = $_REQUEST['a_id'];
     
    
     

    $query = "INSERT INTO owner VALUES ('$o_id', '$o_name','$a_id')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));

    echo "Data Inserted Successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM owner");

 echo"<table border size=1>";
 echo"<tr><th>o_id</th> <th>o_name</th><th>a_id</th> </tr>";
  
 while($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td><td>$arr[2]</td>  </tr>";
 } 
 echo"</table>";

?>

<h4><font color="cyan"><a href="ownerdel.html">click here to delete the owner details</a></font></h4>
<h4><font color="cyan"><a href="updateowner.php">click here to update the owner details</a></font></h4>
<h4><font color="cyan"><a href="gas.html">click here to go back to the home page </a></font></h4>

</body>
</html>