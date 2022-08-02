<?php
require("connection.php");
if(isset($_POST["sub"])){
   echo $sname=$_POST["NAME"];
   echo $sname=$_POST["NAME"];
    $vat=0.18;
    echo $REGno=$_POST["regno"];
    $salary=231.00;
   $gross=$salary*$vat;
   echo "STORE is clicked";
    $query="INSERT INTO CUSTOMER(cfname,clname,ctel,clocation) VALUES('$sname','$sname',0782004043,'KIGALi')";
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
    echo "RETRIEVE is clicked";
    $query="SELECT* FROM CUSTOMER";
   $rs=mysqli_query($con,$query);
   if($rs){
    while($row=mysqli_fetch_array($rs)){
    echo "<br/>".$row['Cid']." ".$row['CFname']."  ".$row['TIME OF REGISTRATION']." "."<br/>";
    }
   }
   else{
    echo " byanze".mysqli_error($con);
}
}
?>

<!DOCTYPE .html>
<html>
  <head>
    <style>
      body {
        background-color: grey;
      }
    </style>
    <script type="text/javascript">
      function show_alert() {
        alert("im an alert box!");
      }
      function show_prompt() {
        var time = prompt("please enter your time", " 11");
        if (time != null && time != "") {
          document.write("hello" + name + "!how are you to day?");
        }
      }
    
    </script>
  </head>

  <title>LOG IN FORM</title>
  <body>
    <form action=" " method="post">
    </br>Fname:<input type="text" name="NAME" placeholder="put your first name here " />
    </br>Lname:<input type="text" name="NAME" placeholder="put your second name here" />
    </br>REGno:<input type="numeric" name="regno" placeholder="put registration number" />
    </br>Ctel:<input type="numeric" name="tel" placeholder="fill your phone number"/>
    </br>Location:<input type="text" name="DISTRICT" placeholder="put your district here" />
    </br>send:<input type="submit" value="STORE" placeholder="send your credentials" name="sub"/>
    </br>ret:<input type="submit" value="RETRIEVE" placeholder="review your credentials" name="ret" />
    <!-- //<div class="imgcontainer">
       // <img src="img_avatar2.png" alt="Avatar" class="avatar" />
      //</div>
      //<br />
      //<div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="email"placeholder="Enter Username"name="uname"
          required
        />
        <br />
        <label for="psw"><b>Password</b></label>
        <input type="password"placeholder="Enter Password"name="psw" required
        />
        <br />
        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember" /> Remember me
        </label>
      </div>
      <br />
      <div class="container">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div> -->
    </form>
  </body>
</html>