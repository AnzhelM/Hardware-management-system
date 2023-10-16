<?php
include("connect.php");
$custid=$_GET['custid'];
$custname=$_GET['custname'];
$custph=$_GET['custph'];
$bid=$_GET['bid'];

?>
<!Doctype Html>  
<Html>     
<Head>      
<Title>     
CUSTOMER  
</Title> 
<style>
h1{
color:darkblue;
text-align:center;
font-family: verdana;
}
h4{
    text-decoration: underline;
    font-family: calibri;
}
#cost{
    padding:auto;
    margin-bottom: 20px;

}
#firstname{
    padding:auto;
    margin-bottom:20px;
}
#productid{
    padding:auto;
    margin-bottom:20px;
}
#button{
    margin-bottom:1000px;
    
}

div{
background-color:lightblue;
}
</style> 
</Head>
<div id="one"> 
<Body> 
    <h1>PRODUCT UPDATE</h1>
    <form action="customerupdateval.php" method="post">

<label for="Customer id">
Customer id :
<input type="text" id="CustomerId" name="Customer_Id" value="<?php echo"$custid"?>"  />    
</label> <br>

<label for="firstname">
Customer Name :
<input type="text" id="CustomerName" name="CustomerName" value="<?php echo"$custname"?>"  />    
</label> <br>

<label for="Customer phno">
Customer Phno :
<input type="text" id="CustomerPhno" name="CustomerPhno" value="<?php echo"$custph"?>"  />    
</label> <br> 

<label for="Bill id">
Bill id:     
 <input type="text" id="billid" name="billid" value="<?php echo"$bid"?>"  /> 
</label>
<input type="submit" name="submit" value="submit" id="button" ></button> 
</label>  
</form>
</Body>
</div>  
</Html>  


