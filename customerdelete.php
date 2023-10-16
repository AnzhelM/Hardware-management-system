<?php
include("connect.php");
error_reporting(0);

$cust_id1=$_GET['custid'];
$query="delete from customer where Cust_id = '$cust_id1'";

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
header("refresh:0; url=Customerpage.php");
?>