//<?php
require("connection.php");
if(isset($_POST["sub"])){
  echo $sname=$_POST["amazina"];
    $vat=0.18;
    echo $salary=$_POST["umushahara"];
    $gross=$salary*$vat;
    echo "BIIKA is clicked";
    $query="INSERT INTO CUSTOMER(cid,cfname,clname,ctel,clocation) VALUES(5,'$sname','NYIRAMBARUSHIMANA',0782004043,'KIGALi')";
    echo $query;
    $result=mysqli_query($con,$query);
    if($result){
      echo "submitted";  
    }
    else{
    echo "unisubmitted -".mysqli_error($con);
    }
  }
if(isset($_POST['ret'])){
    echo "BIKURA is clicked";
    $query="SELECT* FROM CUSTOMER";    
    $rs=mysqli_query($con,$query);
   if($rs){
    while($row=mysqli_fetch_array($rs)){
    echo "<br/>".$row['Cid'].$row['CFname']."<a href='userdetails.php'>"."<br/>";
    }
   }
   else{
    echo " byanze".mysqli_error($con);
    }
 } 
//variables

$names="Constantine Nyirambarushimana";
 $age=21;
 $salary=231.00;
 $vat=0.18;
$gross=$salary*$vat; 
//display
 echo"HELLO!".$names."with net salary".$gross."$$";
  if($gross>12){
  echo"hello!".$names."with net salary".$gross."$$";
}
else{
    for($i=0;$i<10;$i++){
       die("hello with law salary.</br>");
    }

}
?>  <hr/>



<!DOCTYPE html>
<html>
  <head align="center">
    
   <style>
    body{
      background-image: url("papers.gif");
  background-color: pink;
    }
    </style>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body> 
      <form method="post" action="">
      NAME:<input type="text" name="amazina" placeholder="uzuza amazina" /></br>
       salary:<input type="numeric" name="umushahara" placeholder="uzuza umushahara" /></br>
      send:<input type="submit" value="BIIKA" placeholder="ohereza" name="sub"/></br>
       ret:<input type="submit" value="BIKURA" placeholder="ohereza" name="ret" /></br>
</form>
    
      
    <header>
      <div class="logo">
        <span>G FOOD</span>
      </div>
      <div class="nav">
        <a href="LOG IN.html"> SIGN UP</a>
        <a href="ABOUT.html">ABOUT US</a>
        <a href="CONTACT.html">CONTACT</a>
        <a href="COMMENT.html">COMMENT</a>
        <a href="nconstantc.html">IN DETAILS</a>
        <a href="nconstantc.html">LANGUAGE</a>
      </div>
    </header>
    <div class="text">
      <img src="GOOD FOOD.png" alt="" width="500px" height="556px" />
      <div class="paragraph">
        <p>
          THis project is for
          <b
            >minimising<strike> elaborating</strike> the issue of long waiting
            time</b
          >
          by the customer while they are waiting to be served.
        </p>
        <p>
          The low level of service had been common issue where there is no
          satisfaction on the customer and in my point of view
        </p>
        <p>
          i found that i may use<b> the concept of programming </b>to make a
          website that will ensur the effective management of the restaurant
        </p>
        <p>
        and ensure good customer care hence the customer will be satisfied on this stage and this system will ensure the security by keeping all the tracks in the system </p>
BY that i create a website called <i><b>HAPPINESS RESTAURANT MANAGEMENT WEBSITE</b></i>
because it is the one where the problem is appered at high level due to it has many clients to serve but
      
          </p>
        <p>
          no system to manage them inorder to succed their wishes.still now they
          use the analog system of
        </p>
        <p>
          <b>ticking on printed paper </b> which increase the insecurity on the
          client cause while he/she misses that
        </p>
        <p>
          paper there is no way of reclamation because there is no saved file
          that shows that he's alread paid.
        </p>
        <!-- <p>
          So,this system is going to help them to increase the
          <b>SECURITY</b> by allowing the customer to manage his or her meal
          card online hence ,ensuring the trust to the customer
        </p>
        <p>for more information click <a href="nconstantc.html">service</a></p>
        <img src="sdg.jpj" />
      </div>
    </div>
<script type="text/javascript">
var data=new Date()
document.write(data);
    </script>
  </body>
</html>