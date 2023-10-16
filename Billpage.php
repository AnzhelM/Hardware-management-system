<!Doctype Html>  
<Html>     
<Head>      
<Title>     
Billing  
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
table, th, td{
    border: 1px solid black;
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
    <h1>BILL PAGE</h1>
    <h4>BILL DETAILS</h4><style type="text/css">
        table{
            text-align: left;
            color: black;
            font-family: sans-serif;
            font-size: 20px;
            width: 100%;
        }
        
    </style>
    <table style="width:100%">
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>CustomerId</th>
            <th>ProductId</th>
            <th>Quantity</th>
            <th>Amount</th>
            <th>Action</th>
        </tr>
        <?php
        $con = mysqli_connect('localhost','root','','backendsql2');
        if($con -> connect_error){
            die("Connection failed:".$con -> connect_error);
        }
        $sql1 = "select B_id,B_date,Cust_id,p_id,Quantity,B_Amt from bill";
        $result=$con -> query($sql1);

        if($result-> num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo"<tr>
                <td>".$row['B_id']."</td>
                <td>".$row['B_date']."</td>
                <td>".$row['Cust_id']."</td>
                <td>".$row['p_id']."</td>
                <td>".$row['Quantity']."</td>
                <td>".$row['B_Amt']."</td>
                <td>
                    <a href='billupdate.php?bid=$row[B_id]&bdate=$row[B_date]&custid=$row[Cust_id]&pid=$row[p_id]&qn=$row[Quantity]&amt=$row[B_Amt]'>Update</a>
                    <a href='billdelete.php?bid=$row[B_id]'>Delete</a>
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

    
<form action="bill.php" method="post">

<label for="BillId">
Invoice Number :
<input type="text" id="BillId" name="BillId" placeholder="Invoice number"  />    
</label> <br><br>

<label for="BillDate">
Bill Date :
<input type="text" id="BillDate" name="BillDdate" placeholder="Date"  />    
</label> <br><br>

<label for="CustomerId">
CustomerId :
<input type="text" id="CustomerId" name="CustomerId" placeholder="Customer Id"  />    
</label> <br>

<label for="ProductId">
ProductId :
<input type="text" id="ProductId" name="ProductId" placeholder="Product Id"  />    
</label> <br><br>

<label for="Quantity">
Quantity :     
 <input type="text" id="Quantity" name="Quantity" placeholder="Quantity"  /> 
</label><br> <br>

<label for="BillAmount">
Bill Amount :     
 <input type="text" id="BillAmount" name="BillAmount" placeholder="Amount"  /> 
</label> 

  <input type="submit" name="submit" value="submit" id="button" ></button>
</form>
</Body>
</div>  
</Html> 