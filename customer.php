<?php
//database connection

    if(isset($_POST['submit']));
    {
        
            $CustomerId = $_POST['CustomerId'];
            $CustomerName = $_POST['CustomerName'];
            $CustomerPhno = $_POST['CustomerPhno'];
            $billid = $_POST['billid'];
        
    }
    $server = "localhost" ;
    $user = "root";
    $password = "";
    $db = "backendsql2";

    $con = mysqli_connect('localhost','root','','backendsql2');

    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }
 
    $sql = "INSERT INTO customer(Cust_id,Cust_Name,Cust_Phone,B_id ) VALUES('$CustomerId', '$CustomerName', '$CustomerPhno', '$billid')";
       
    $rs = mysqli_query($con, $sql);

    if($rs)
    {
        header("Location: Customerpage.php");
}
    mysqli_close($con);
?>