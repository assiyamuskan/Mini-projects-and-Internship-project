<html>
<body>

<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '','gas agency') or die(mysqli_error());
    mysqli_select_db($dbh,'gas agency') or die(mysqli_error($dbh));

    $cp_id = $_REQUEST['cp_id'];
    $comment = $_REQUEST['comment'];
     $a_id = $_REQUEST['a_id'];
     

    $query = "INSERT INTO complaint1 VALUES ('$cp_id', '$comment','$a_id')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));

    echo "Data Inserted Successfully!!!";

 $var=mysqli_query($dbh,"SELECT  * FROM  complaint1");

 echo"<table border size=1>";
 echo"<tr><th>cp_id</th> <th>comment</th> <th>a_id</th> </tr>";
  
 while ($arr=mysqli_fetch_row($var))
 { 
    echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td><td>$arr[2]</td> </tr>";
 } 
 echo"</table>";

?>

</body>
</html>