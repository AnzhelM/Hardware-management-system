<?php
include("connect.php");
$eid=$_GET['eid'];
$l=$_GET['leave'];
$sd=$_GET['sdate'];
$sa=$_GET['samt'];

?>
<!Doctype Html>  
<Html>     
<Head>      
<Title>     
SALARY  
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
#EmployeeId{
    padding:auto;
    margin-bottom: 20px;

}
#Leaves{
    padding:auto;
    margin-bottom:20px;
}
#SalaryDate{
    padding:auto;
    margin-bottom:20px;
}
#SalaryAmount{
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
    <form action="salaryupdateval.php" method="post">

<label for="Employee id">
Employee id :
<input type="text" id="EmployeeId" name="EmployeeId" value="<?php echo"$eid"?>"  />    
</label> <br>

<label for="Leave">
Leaves :
<input type="text" id="Leaves" name="Leave" value="<?php echo"$l"?>"  />    
</label> <br>

<label for="Salary Date">
Salary Date :
<input type="text" id="SalaryDate" name="SalaryDate" value="<?php echo"$sd"?>"  />    
</label> <br> 

<label for="Salary Amount">
Amount:     
 <input type="text" id="SalaryAmount" name="Amount" value="<?php echo"$sa"?>"  /> 
</label>
<input type="submit" name="submit" value="submit" id="button" ></button> 
</label>  
</form>
</Body>
</div>  
</Html>  


