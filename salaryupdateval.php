<?php
    //database connection
    if(isset($_POST['submit']));
    {
        $EId = $_POST['EmployeeId'];
        $L = $_POST['Leave'];
        $SD = $_POST['SalaryDate'];
        $A = $_POST['Amount'];

    }
    $server = "localhost" ;
    $user = "root";
    $password = "";
    $db = "backendsql2";
    $con = mysqli_connect('localhost','root','','backendsql2');
    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }
 
    $query = "update salary set E_id='$EId',no_leave='$L',S_date='$SD',S_amt='$A' where E_id='$EId' ";

    $data = mysqli_query($con,$query);
    if($data)
    {
        echo"<script>alert('record updated')</script>";
    }
    else{
        echo"failed";
    }
    mysqli_close($con);
    header("refresh:0; url=Salarypage.php");
?>