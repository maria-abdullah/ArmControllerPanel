
<?php

define("DB_SERVER", "localhost");
define("DB_USER"  , "root");
define("DB_PASS"  , "");
define("DB_NAME"  , "arm");

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$engine1 =$_POST['engine1'];
$engine2 =$_POST['engine2'];
$engine3 =$_POST['engine3'];
$engine4 =$_POST['engine4'];
$engine5 =$_POST['engine5'];
$engine6 =$_POST['engine6'];


$sql = "INSERT INTO engines(engine1,engine2,engine3,engine4,engine5,engine6)
        VALUES ('$engine1','$engine2','$engine3','$engine4','$engine5','$engine6')"; 


if ($conn->query($sql)==TRUE) {
  header('location: index.html');
 
}
else {
  echo"Error ! Try again";
}


$conn->close();

?>

