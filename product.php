<?php
//database connection
    if(isset($_POST['submit']));
    {
        $ProductId = $_POST['ProductId'];
        $ProductName = $_POST['ProductName'];
        $ProductCost = $_POST['ProductCost'];
        $Quantity = $_POST['Quantity'];

    }
    $server = "localhost" ;
    $user = "root";
    $password = "";
    $db = "backendsql2";

    $con = mysqli_connect('localhost','root','','backendsql2');

    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }
 
    $sql = "INSERT INTO product(p_id,p_name,p_price,Quantity) VALUES('$ProductId', '$ProductName', '$ProductCost', '$Quantity')";
       
    $rs = mysqli_query($con, $sql);

    if($rs)
    {
        header("Location: Productpage.php");
    }
    mysqli_close($con);
?>