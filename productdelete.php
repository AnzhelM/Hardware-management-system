<?php
include("connect.php");
error_reporting(0);

$p_id1=$_GET['pid'];
$query="delete from product where p_id = '$p_id1'";

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
header("refresh:0; url=Productpage.php");
?>