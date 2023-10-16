<!Doctype Html>  
<Html>     
<Head>      
<Title>     
Salary 
</Title> 
<style>
h1{
color:darkgreen;
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
#EmployeeId{    
    padding:auto;
    margin-bottom:20px;
}
#Leaves{    
    padding:auto;
    margin-bottom:20px;
}
#button{
    margin-bottom:1000px;
}
#SalaryDate{
    padding:auto;
    margin-bottom:20px;
}
#Amount{
    padding:auto;
    margin-bottom:20px;
}

#Productid{
    padding:auto;
    margin-bottom:20px;
}

div{
background-color:violet;
}
</style> 
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
            <li><a href="Billpage.php">Billing</a></li>
            <li><a href="Salarypage.php">Salary</a></li>
        </ul>
        </div>
    </body>
</html>
    <h1>SALARY PAGE</h1>
    <h4>SALARY DETAILS</h4><style type="text/css">
        table{
            text-align: left;
            color: black;
            font-family: sans-serif;
            font-size: 20px;
            width: 100%;
        }
        table, th, td{
            border: 1px solid black;
        }
    </style>
    <table>
        <tr>
            <th>ID</th>
            <th>Leaves</th>
            <th>Salary Date</th>
            <th>Salary Amount</th>
            <th>Action</th>
        </tr>
        <?php
        $con = mysqli_connect('localhost','root','','backendsql2');
        if($con -> connect_error){
            die("Connection failed:".$con -> connect_error);
        }
        $sql1 = "select E_id,no_leave,S_date,S_amt from salary";
        $result=$con -> query($sql1);

        if($result-> num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo"<tr>
                <td>".$row['E_id']."</td>
                <td>".$row['no_leave']."</td>
                <td>".$row['S_date']."</td>
                <td>".$row['S_amt']."</td>
                <td>
                    <a href='salaryupdate.php?eid=$row[E_id]&leave=$row[no_leave]&sdate=$row[S_date]&samt=$row[S_amt]'>Update</a>
                    <a href='salarydelete.php?eid=$row[E_id]'>Delete</a>
                </td>
                </tr>";
               
            }
        }
        else
        {
            echo"0 result";
        }
        $con-> close();
        ?>
    </table>

    
<form action="salary.php" method="post">

<label for="Employee id">
Employee id :
<input type="text" id="EmployeeId" name="EmployeeId" placeholder="Enter id"  />    
</label> <br>

<label for="Leaves">
Leaves :
<input type="text" id="Leaves" name="Leave" placeholder="Enter no. of leaves"  />    
</label> <br>

<label for="Salary Date">
Salary Date :
<input type="text" id="SalaryDate" name="SalaryDate" placeholder="Enter date"  />    
</label> <br>

<label for="Salary Amount">
Amount:     
 <input type="text" id="Amount" name="Amount" placeholder="Enter amount "  /> 
</label> 

  <input type="submit" name="submit" value="submit" id="button" ></button>
</form>
</Body>
</div>  
</Html> 