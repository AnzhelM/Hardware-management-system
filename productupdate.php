<?php
include("connect.php");
$pid=$_GET['pid'];
$pname=$_GET['pname'];
$pprice=$_GET['pprice'];
$Qn=$_GET['Qn'];

?>
<!Doctype Html>  
<Html>     
<Head>      
<Title>     
PRODUCT  
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
<form action="productupdateval.php" method="post">

<label for="Productid">   
Product Id :
<input type="text" id="productid" name="ProductId" value="<?php echo"$pid"?>"  />    
</label> <br>

<label for="firstname">   
Product Name :
<input type="text" id="firstname" name="ProductName" value="<?php echo"$pname" ?>"  />    
</label> <br>

<label for="cost">
Product Price:     
 <input type="text" id="cost" name="ProductCost" value="<?php echo"$pprice" ?>"  /> 
</label> <br>

<label for="quantity">
Product Quantity:     
 <input type="text" id="quantity" name="Quantity" value="<?php echo"$Qn" ?>"  /> 
</label>
    <input type="submit" name="submit" value="submit" id="button" /> 
</form>
</Body>
</div>  
</Html>  


