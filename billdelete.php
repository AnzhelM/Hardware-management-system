<?php
include("connect.php");
error_reporting(0);

$b_id1=$_GET['bid'];
$query="delete from bill where B_id = '$b_id1'";

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