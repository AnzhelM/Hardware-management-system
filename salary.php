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
 
    $sql = "INSERT INTO salary(E_id,no_leave,S_date,S_amt) VALUES('$EId', '$L', '$SD', '$A')";
       
    $rs = mysqli_query($con, $sql);

    if($rs)
    {
        header("Location: Salarypage.php");
}
    mysqli_close($con);
?>