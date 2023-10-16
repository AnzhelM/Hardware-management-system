<?php 
session_start();

	include("connection.php");
	include("functions.php");


?>
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
            <li><a href="logout.php">Logout</a></li>

        </ul>
        </div>
    </body>
</html>