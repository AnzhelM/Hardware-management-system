<!Doctype Html>  
<Html>     
<Head>      
<Title>     
Customer  
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
#CustomerId{
     padding:auto;
    margin-bottom:20px;
}
#CustomerName{
    padding:auto;
    margin-bottom:20px;
}
#button{
    margin-bottom:1000px;
}
#Customerid{
    padding:auto;
    margin-bottom:20px;
}
#CustomerPhno{
    
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
            <li><a href="Salarypage.php">Salary</a></li>
            <li><a href="Billpage.php">Billing</a></li>
        </ul>
        </div>
    </body>
</html>
    <h1>CUSTOMER PAGE</h1>
    <h4>CUSTOMER DETAILS</h4><style type="text/css">
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
            <th>Customer name</th>
            <th>Customer phone</th>
            <th>Bill id</th>
            <th>Action</th>
        </tr>
        <?php
        $con = mysqli_connect('localhost','root','','backendsql2');
        if($con -> connect_error){
            die("Connection failed:".$con -> connect_error);
        }
        $sql1 = "select Cust_id,Cust_Name,Cust_Phone,B_id from customer";
        $result=$con -> query($sql1);

        if($result-> num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo"<tr>
                <td>".$row['Cust_id']."</td>
                <td>".$row['Cust_Name']."</td>
                <td>".$row['Cust_Phone']."</td>
                <td>".$row['B_id']."</td>
                <td>
                    <a href='customerupdate.php?custid=$row[Cust_id]&custname=$row[Cust_Name]&custph=$row[Cust_Phone]&bid=$row[B_id]'>Update</a>
                    <a href='customerdelete.php?custid=$row[Cust_id]'>Delete</a>
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

    
<form action="customer.php" method="post">

<label for="Customer id">
Customer id :
<input type="text" id="CustomerId" name="CustomerId" placeholder="Enter id"  />    
</label> <br>

<label for="firstname">
Customer Name :
<input type="text" id="CustomerName" name="CustomerName" placeholder="Enter name"  />    
</label> <br>

<label for="Customer phno">
Customer Phno :
<input type="text" id="CustomerPhno" name="CustomerPhno" placeholder="Enter phno"  />    
</label> <br>

<label for="Bill id">
Bill id:     
 <input type="text" id="billid" name="billid" placeholder="Enter b_id. "  /> 
</label> 

  <input type="submit" name="submit" value="submit" id="button" ></button>
</form>
</Body>
</div>  
</Html> 