<html>
<body>

<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '','gas agency') or die(mysqli_error());
    mysqli_select_db($dbh,'gas agency') or die(mysqli_error($dbh));

    $c_id = $_REQUEST['c_id'];
    $c_name = $_REQUEST['c_name'];
    $a_id=$_REQUEST['a_id'];
   $location = $_REQUEST['location'];

    $query = "INSERT INTO customer2 VALUES ('$c_id', '$c_name','$a_id','$location')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));

    echo "Data Inserted Successfully!!!";

 $var=mysqli_query($dbh,"SELECT * FROM customer2 ");

 echo"<table border size=1>";
 echo"<tr><th>c_id</th> <th>c_name</th><th>a_id</th><th>location</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td><td>$arr[2]</td><td>$arr[3]</td> </tr>";
 } 
 echo"</table>";

?>

<h4><font color="cyan"><a href="customerdel.html">click here to delete the customer details</a></font></h4>
<h4><font color="cyan"><a href="updatecustomer.php">click here to update the customer details</a></font></h4>
<h4><font color="cyan"><a href="gas.html">click here to go back to the home page </a></font></h4>


</body>
</html>