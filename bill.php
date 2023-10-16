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
 
    $sql = "INSERT INTO bill(B_id,B_date,Cust_id,p_id,Quantity,B_Amt ) VALUES('$BillId', '$BillDate', '$CustomerId', '$ProductId', '$Quantity', '$Amount')";
       
    $rs = mysqli_query($con, $sql);

    if($rs)
    {
        header("Location: Billpage.php");
}
    mysqli_close($con);
?>