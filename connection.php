
<?php
//connecting to the server
$server="localhost";
$db="restaurant";
$user="root";
$password="";
//connection string
$con=mysqli_connect($server,$user,$password,$db);

if($con)
{
  echo "connected";
}
else{
  echo"not connected";
}