<?php 

include 'connection.php';
$val="payment failed";
$sql="delete from sm11_passenger_details where pnr='".$_SESSION['pnr']."'";
mysqli_query($con,$sql);
echo '<div class="alert alert-danger" role="alert" style="width:600px;margin-left:50px">'.$val.'</div>';
session_unset(); 
session_destroy();

?>