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
#position{
    padding:auto;
    margin-bottom: 20px;
    color: white;

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
    margin-bottom:250px;
    
}

div{
    background: transparent;
}
.white{
    background: radial-gradient(#281c3e,#0f051d);
}
</style> 
<link rel="stylesheet" href="teamstyle.css">
</Head>
<div id="one"> 
<Body> 
<html>
    <head>
        <title>Shruthi Home</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="menu-bar" style="height:100px">
            <img src="Shruthilogoblack.png" alt="logo1" style="width:100px;height:100px;float:left" />
            <h1>Shruthi Hardware<br><p>serving since 1992</p>
            </h1>
            
        <ul>
            <li cass="active"><a href="2.php">Dashboard</a></li>
            <li><a href="Productpage.php">Product</a></li>
            <li><a href="Employeepage.php">Employee</a></li>
            <li><a href="Customerpage.php">Customer</a></li>
            <li><a href="Salarypage.php">Salary</a></li>
            <li><a href="Billpage.php">Billing</a></li>
        </ul>
        </div>
    </body>
</html>
        <?php
        $con = mysqli_connect('localhost','root','','backendsql2');
        if($con -> connect_error){
            die("Connection failed:".$con -> connect_error);
        }
        $sql1 = "select E_id,E_name,E_phone,E_position from employee";
        $result=$con -> query($sql1);
        echo"<section class='managers'>
        <h1>Employee</h1>
        </section>";
        if($result-> num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo"
                <section class='managers'>
                    <div class='center'>
                    <div class='box'>
                            <h3>ID: ".$row['E_id']."</h3>
                            <h3>NAME: ".$row['E_name']."<h3>
                            <h5>PHONE: ".$row['E_phone']."</h5>
                            <h5>POSITION: ".$row['E_position']."<h5>
                            <td>
                            <a href='employeeupdate.php?eid=$row[E_id]&ename=$row[E_name]&ephone=$row[E_phone]&epos=$row[E_position]'>Update</a>
                            <a href='employeedelete.php?eid=$row[E_id]'>Delete</a>
                            </td>
                    </div>
                    </div>
                </section>  
                    ";
               
            }
        }
        else
        {
            echo"0 result";
        }
        $con-> close();
        ?>
    </table>
<form action="employee.php" method="post">
<div class="white">
<h4>ADD NEW EMPLOEE</h4>
<label for="employeeid">   
Employee Id :
<input type="text" id="employeeid" name="EmployeeId" placeholder="Employee Id"  />    
</label> <br><br>

<label for="firstname">   
Employee Name :
<input type="text" id="firstname" name="EmployeeName" placeholder="Name of Employee"  />    
</label> <br>

<label for="number">
Phone Number:     
 <input type="text" id="number" name="EmployeeNumber" placeholder="Phone number"  /> 
</label> <br><br>

<label for="position">
Position:     
 <input type="text" id="position" name="Position" placeholder="Position" style="color: black;" /> 
</label>

    <input type="submit" name="submit" value="submit" id="button" /> 
</div>
</form>
</Body>
</div>  
</Html>  

