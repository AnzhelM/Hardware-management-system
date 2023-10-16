<?php
    //database connection
    if(isset($_POST['submit']));
    {
        $custid = $_POST['Customer_Id'];
        $custname = $_POST['CustomerName'];
        $custph = $_POST['CustomerPhno'];
        $bid = $_POST['billid'];

    }
    $server = "localhost" ;
    $user = "root";
    $password = "";
    $db = "backendsql2";
    $con = mysqli_connect('localhost','root','','backendsql2');
    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }
 
    $query = "update customer set Cust_id='$custid',Cust_Name='$custname',Cust_Phone='$custph',B_id='$bid' where Cust_id='$custid' ";

    $data = mysqli_query($con,$query);
    if($data)
    {
        echo"<script>alert('record updated')</script>";
    }
    else{
        echo"failed";
    }
    mysqli_close($con);
    header("refresh:0; url=Customerpage.php");
?>