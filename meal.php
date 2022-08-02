<?php
require('connection.php');

if(isset($_POST['save']))
{
  $foodType=$_POST['food_type'];
  $foodPrice=$_POST['food_price'];
  $tableNumber=$_POST['table_number'];
  $quantity=$_POST['quantity'];
  $total_cost=$_POST['total_cost'];
$query="INSERT INTO food(Ftype,FTtprice,Tno,FQUANTINTY,FTcost) VALUES('$foodType',$foodPrice,$tableNumber,$quantity,$total_cost)";
$submit=mysqli_query($con,$query);
if($submit)
{
  echo 'Successfully submitted';
}
else{
  echo 'error -> '.mysqli_error($con);
}
}
if(isset($_POST['rev'])){
    echo "review is clicked";
    $query="SELECT* FROM food";
   $rs=mysqli_query($con,$query);
   if($rs){
    while($row=mysqli_fetch_array($rs)){
    echo "<br/>".$row['Fid']." ".$row['Ftype']." ".$row['NAME']."<br/>";
    }
   }
   else{
    echo " byanze".mysqli_error($con);
}
}

?>
<html>
  <head>
    <style>
      body{
    background-color:grey;
      }
      </style>
    <title>Meal Page</title>
  </head>
  <body>
    <form action="" method="post">

    Food Type: <input type="text" name="food_type"placeholder="put your favorite food here"/> </br>
    NAME: <input type="text" name="NAME" placeholder="put your full name here"></br>
    Food Price:<input type="number" name="food_price" /> </br>
    Table number:<input type="number" name="table_number" /> </br>
    Quantity:<input type="number" name="quantity" /> </br>
    Total Cost:<input type="number" name="total_cost" /></br>
    <input type="submit" value="save" name="save"></br>
    <input type="submit" value="REVIEW " name="rev"></br>
    </form>

  </body>
</html>
