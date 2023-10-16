<?php
include("connect.php");
$eid=$_GET['eid'];
$ename=$_GET['ename'];
$ephone=$_GET['ephone'];
$epos=$_GET['epos'];

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
<form action="employeeupdateval.php" method="post">

<label for="employeeid">   
Product Id :
<input type="text" id="employeeid" name="EmployeeId" value="<?php echo"$eid"?>"  />    
</label> <br>

<label for="firstname">   
Product Name :
<input type="text" id="firstname" name="EmployeeName" value="<?php echo"$ename"?>"  />    
</label> <br>

<label for="number">
Product Price:     
 <input type="text" id="number" name="EmployeeNumber" value="<?php echo"$ephone"?>"  /> 
</label> <br>

<label for="position">
Product Quantity:     
 <input type="text" id="position" name="Position" value="<?php echo"$epos"?>"  /> 
</label>

    <input type="submit" name="submit" value="submit" id="button" />
</form>
</Body>
</div>  
</Html>  


