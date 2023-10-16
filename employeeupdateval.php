<?php
    //database connection
    if(isset($_POST['submit']));
    {
        $eid1 = $_POST['EmployeeId'];
        $ename1 = $_POST['EmployeeName'];
        $ephone1 = $_POST['EmployeeNumer'];
        $epos1 = $_POST['Position'];

    }
    $server = "localhost" ;
    $user = "root";
    $password = "";
    $db = "backendsql";
    $con = mysqli_connect('localhost','root','','backendsql2');
    if(!$con){
        die("connection failed" . mysqli_connect_error());
    }
 
    $query = "update employee set E_id='$eid1',E_name='$ename1',E_phone='$$ephone1',E_position='$epos1' where E_id='$eid1' ";

    $data = mysqli_query($con,$query);
    if($data)
    {
        echo"<script>alert('record updated')</script>";
    }
    else{
        echo"failed";
    }
    mysqli_close($con);
    header("refresh:0; url=Employeepage.php");
?>