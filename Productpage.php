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
    <h1>PRODUCT PAGE</h1>
    <style type="text/css">
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
            <th>Product name</th>
            <th>Product price</th>
            <th>Product quantity</th>
            <th>Action</th>
        </tr>
        <?php
        $con = mysqli_connect('localhost','root','','backendsql2');
        if($con -> connect_error){
            die("Connection failed:".$con -> connect_error);
        }
        $sql1 = "select p_id,p_name,p_price,Quantity from product";
        $result=$con -> query($sql1);

        if($result-> num_rows > 0){
            while($row = $result->fetch_assoc()){
                echo"<tr>
                <td>".$row['p_id']."</td>
                <td>".$row['p_name']."</td>
                <td>".$row['p_price']."</td>
                <td>".$row['Quantity']."</td>
                <td>
                    <a href='productupdate.php?pid=$row[p_id]&pname=$row[p_name]&pprice=$row[p_price]&Qn=$row[Quantity]'>Update</a>
                    <a href='productdelete.php?pid=$row[p_id]'>Delete</a>
                </td>
                </tr>";
               
            }
        }
        else
        {
            echo"";
        }
        $con-> close();
        ?>
    </table>
    
<form action="product.php" method="post">

<label for="Productid">   
Product Id :
<input type="text" id="productid" name="ProductId" placeholder="Product Id"  />    
</label> <br>

<label for="firstname">   
Product Name :
<input type="text" id="firstname" name="ProductName" placeholder="Name of Product"  />    
</label> <br>

<label for="cost">
Product Price:     
 <input type="text" id="cost" name="ProductCost" placeholder="Cost of Product"  /> 
</label> <br>

<label for="quantity">
Product Quantity:     
 <input type="text" id="quantity" name="Quantity" placeholder="Product quantity"  /> 
</label>
    <input type="submit" name="submit" value="submit" id="button" /> 
</form>
</Body>
</div>  
</Html>  

