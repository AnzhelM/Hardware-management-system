<?php
    //database connection
    if(isset($_POST['submit']));
    {
        $pid1 = $_POST['ProductId'];
        $pname1 = $_POST['ProductName'];
        $pprice1 = $_POST['ProductCost'];
        $Qn1 = $_POST['Quantity'];

    }
    $server = "localhost" ;
    $user = "root";
    $password = "";
    $db = "backendsql";
    $con = mysqli_connect('localhost','root','','backendsql2');
    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }
 
    $query = "update product set p_id='$pid1',p_name='$pname1',p_price='$pprice1',Quantity='$Qn1' where p_id='$pid1' ";

    $data = mysqli_query($con,$query);
    if($data)
    {
        echo"<script>alert('record updated')</script>";
    }
    else{
        echo"failed";
    }
    mysqli_close($con);
    header("refresh:0; url=Productpage.php");
?>