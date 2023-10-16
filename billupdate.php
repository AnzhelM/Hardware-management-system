<?php
include("connect.php");
$bid=$_GET['bid'];
$bdate=$_GET['bdate'];
$cid=$_GET['custid'];
$pid=$_GET['pid'];
$qn=$_GET['qn'];
$amt=$_GET['amt'];

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
    <form action="bilupdateval.php" method="post">

    <label for="Bill id">
Invoice Number :
<input type="text" id="BillId" name="BillId" value="<?php echo"$bid"?>"  />    
</label> <br>

<label for="Bill Date">
Bill Date :
<input type="text" id="BillDate" name="BillDdate" value="<?php echo"$bdate"?>"  />    
</label> <br>

<label for="Customer Id">
ProductId :
<input type="text" id="CustomerId" name="CustomerId" value="<?php echo"$cid"?>"  />    
</label> <br>

<label for="Product Id">
ProductId :
<input type="text" id="ProductId" name="ProductId" value="<?php echo"$pid"?>"  />    
</label> <br>

<label for="Quantity">
Quantity :     
 <input type="text" id="Quantity" name="Quantity" value="<?php echo"$qn"?>"  /> 
</label> 

<label for="Bill Amount">
Bill Amount :     
 <input type="text" id="BillAmount" name="BillAmount"value="<?php echo"$amt"?>"  /> 
</label> 

  <input type="submit" name="submit" value="submit" id="button" ></button>
  <a href="2.php">Return home</a> 
</form>
</Body>
</div>  
</Html>  


