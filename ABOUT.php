
<?php
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


$names="Constantine Nyirambarushimana";
$price=600;
$quantity=2;
$FTcost=$price*$quantity; 
//display
echo"HELLO!".$names."with net amount to pay".$FTcost."$$";
if($FTcost>600){
    echo"hello!".$names."with total amount to pay".$FTcost."$$";

}
else{
die("hello .$names.with total amount to pay .you are not allowed.</br>");
    }


?> 

<!DOCTYPE .html>
<html>
  <head>
    <script type="text/javascript">
      function validate_request(field,alerttxt)
      {with(field)
        {
          if(value==null||value=="")
          {
            alert(alerttxt);return false
          }
          else{
            return true;
          }
        }
      }
      function validate_request(thisform){
        with(thisform){
          if(validate_request("Email must be filled out!")==false)
          {
            email.focus();return false
          }
        }
      }
      </script>
    <u><b>customer food form</b></u>
  </head>
  <title>FOOD form</title>
  <body>
    <p>this form is filled before you are going to restaurant</p>
    <form>
      <form action="submit.html"onsubmit="return validate_form(this)"method="post">
        Email:<input type="text"name="email">
      <p>NAME:<input type="text" name="" size="20" /></p>
      <p>REGno:<input type="numeric" name="" size="20" /></p>
      <p>TEL:<input type="numeric" name="" size="20" /></p>
      <p>
        <input type="checkbox" name="beans lover" id="beans" checked />
        <label for="beans">beans</label>
        <br />
        <input type="checkbox" name="potatoes lover" id="potatoes" />
        <label for="potatoes">POTATOES</label>
        <br />

        <input type="checkbox" name="meat lover" />
        <label for="meat">MEAT</label>
        <br />
        <input type="checkbox" name="FISH soup lover" id="fish soup" />
        <label for="fish soup">FISH</label>
        <br />
        <input
          type="checkbox"
          name="CASSAVA LEAVES lover"
          id="cassava leaves"
        />
        <label for="cassava leaves">CASSAVA LEAVES</label>
        <br />
        <input type="checkbox" name="CASSAVA BREAD lover" />
        <label for="cassava bread">CASSAVA BREAD</label>
        <br />
        <input type="checkbox" name="maize flour lover" />
        <label for="maize flour">CASSAVA BREAD</label>
        <br />
        <input type="checkbox" name="rice lover" id="rice" />
        <label for="rice">RICE</label>
        <br />
        <input type="checkbox" name="spagett lover" id="spagett" />
        <label for="spagett">SPAGETT</label>
        <br />
        <input type="checkbox" name="BANANA lover" />
        <label for="BANANA">BANANA</label>
        <br />
        <input type="checkbox" name="VEGETABLES lover" />
        <label for="VEGETABLES">VEGETABLES</label>
      </p>
      <p>
        <select name="TABLE" size="20">
          <option value="T1">table1</option>
          <option value="T2">TABLE2</option>
          <option value="T3">TABLE3</option>
          <option value="T4">TABLE4</option>
          <option value="T5">TABLE5</option>
          <option value="T6">table6</option>
          <option value="T7">TABLE7</option>
          <option value="T8">TABLE8</option>
          <option value="T9">TABLE9</option>
          <option value="T10">TABLE10</option>
        </select>
      </p>
      <p>
        <select name="MECHANISM OF PAYMENT" size="20">
          <option value="MOBILE MONEY">MOMO</option>
          <option value="CASH IN HANDS">CASH</option>
          <option value="CREDIT CARD">CREDIT CARD</option>
          <option value="BY CHEQUE">CHEQUE</option>
          <br />
        </select>
      </p>

      <p>
        <select name="AMOUNT TO PAY" size="20">
          <option value="AMOUNT">(FULL CARD)30000</option>
          <option value="AMOUNT">(HALF CARD)15000</option>
          <option value="AMOUNT">(PARTIAL HALF CARD)8000</option>
          <option value="AMOUNT">(DETAIL)600</option>
        </select>
      </p>
      <p>Td DATE:<input type="date" name="" size="20" /></p>
      <p>password:<input type="password" name="" size="20" /></p>
      <p>UPLOAD:<input type="file" name="" size="20" /></p>
      <p>SUBMIT:<input type="submit" value="send" name="" size="20" /></p>
    </form>
  </body>
</html>
