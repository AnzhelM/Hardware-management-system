<?php
    //database connection
    if(isset($_POST['submit']));
    {
        $BillId = $_POST['BillId'];
        $BillDate = $_POST['BillDdate'];
        $CustomerId = $_POST['CustomerId'];
        $ProductId = $_POST['ProductId'];
        $Quantity = $_POST['Quantity'];
        $Amount = $_POST['BillAmount'];

    }
    $server = "localhost" ;
    $user = "root";
    $password = "";
    $db = "backendsql2";
    $con = mysqli_connect('localhost','root','','backendsql2');
    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }
 
    $query = "update bill set B_id='$BillId',B_date='$BillDate',Cust_id='$CustomerId',p_id='$ProductId',Quantity='$Quantity',B_Amt='$Amount' where B_id='$BillId' ";

    $data = mysqli_query($con,$query);
    if($data)
    {
        echo"<script>alert('record updated')</script>";
    }
    else{
        echo"failed";
    }
    mysqli_close($con);
    header("refresh:0; url=Billpage.php");
?>