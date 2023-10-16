<?php
//database connection
    if(isset($_POST['submit']));
    {
        $eid = $_POST['EmployeeId'];
        $ename = $_POST['EmployeeName'];
        $enum = $_POST['EmployeeNumber'];
        $epos = $_POST['Position'];

    }
    $server = "localhost" ;
    $user = "root";
    $password = "";
    $db = "backendsql2";

    $con = mysqli_connect('localhost','root','','backendsql2');

    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }
 
    $sql = "INSERT INTO employee(E_id,E_name,E_phone,E_position) VALUES('$eid', '$ename', '$enum', '$epos')";
       
    $rs = mysqli_query($con, $sql);

    if($rs)
    {
        header("Location: Employeepage.php");
    }
    mysqli_close($con);
?>