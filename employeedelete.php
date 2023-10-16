<?php
include("connect.php");
error_reporting(0);

$e_id1=$_GET['eid'];
$query="delete from employee where E_id = '$e_id1'";

$data=mysqli_query($con,$query);
if($data)
{
    ?>
    <script>
    alert('reocrd deleted');
    </script>
    <?php
}
else{
    echo"failed";
}
header("refresh:0; url=Employeepage.php");
?>