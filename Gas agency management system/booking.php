<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '','gas agency') or die(mysqli_error());
    mysqli_select_db($dbh,'gas agency') or die(mysqli_error($dbh));

    $b_id = $_REQUEST['b_id'];
    $c_id = $_REQUEST['c_id'];
     $amount = $_REQUEST['amount'];
    $subsidy = $_REQUEST['subsidy']; 

    $query = "INSERT INTO booking VALUES ('$b_id','$c_id','$amount','$subsidy')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));

    echo "Data Inserted Successfully!!!";

 $var=mysqli_query($dbh," SELECT * FROM booking");

 echo"<table border size=1>";
 echo"<tr><th>b_id</th> <th>c_id</th> <th>amount</th> <th>subsidy</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td><td>$arr[2]</td> <td>$arr[3]</td> </tr>";
 } 

echo"</table>";
 echo "<a href='bookingdel.html'>delete record</a><br>";
echo "<a href='complaint1.html'>complaint details</a>";
echo "<br>";
?>

</body>
</html>

