<?php
require('connection.php');

if(isset($_POST['submit']))
{
  $user_name=$_POST['usrname'];
  $message=$_POST['message'];
$query="INSERT INTO  comment(USERNAME,Message) VALUES('$user_name','$message')";
$sub=mysqli_query($con,$query);
if($sub)
{
  echo "Successfully submitted";
}
else{
  echo "error -> ".mysqli_error($con);
}
}

?>

<!DOCTYPE .html>
<html>
  <head>
    <p>PUT YOUR COMMENT PLEASE</p>
    <style>
      body {
        background-color: blueviolet;
        color: burlywood;
      }
    </style>
  </head>
  <title>COMMENT FORM</title>
  <body>
    <form  method="post">
      Name: <input type="text" name="usrname" />
      Message:<input type="text area"name="message"placeholder="tpe your comment here">
      submitt:<input type="submit"value="sub"name="submit">
  </body>
</html>
