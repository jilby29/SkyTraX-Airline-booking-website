<?php 

include 'connection.php';
$val="Payment successful";
$sql="select *from sm11_passenger_details where pnr='".$_SESSION['pnr']."'";
$loginid="";
if(isset($_COOKIE['id'])){
	$loginid=$_SESSION['id'];
	
}
	

				if($result=mysqli_query($con,$sql)){
					$no_of_rows_effected=mysqli_num_rows($result);
					
					
					$row="";
					if($no_of_rows_effected > 0){
						
						while($row = mysqli_fetch_array($result)) {
							//include 'connection.php';
								$bookingstatus="completed";
								$sql1="insert into insert_ticket_details(pnr,date_of_reservation,flight_no,journey_date,class,booking_status,login_id)values('".$row['pnr']."',CURRENT_DATE() ,'".$_SESSION['flight_id']."','".$_SESSION['journey_date']."','".$row['class']."','$bookingstatus','$loginid')";
								mysqli_query($con,$sql1);
								if($row['class']== "economy"){
									$reduced_seats=$_SESSION['seats_economy'];
									$reduced_seats=$reduced_seats-1;
									$_SESSION['seats_economy']=$reduced_seats;
									$sql2="update flight_details set seats_economy='".$_SESSION['seats_economy']."' where flight_id='".mysqli_real_escape_string($con,$_SESSION['flight_id'])."'";
									mysqli_query($con,$sql2);
									}else{
									$reduced_seats=$_SESSION['seats_bussiness'];
									$reduced_seats=$reduced_seats-1;
									$_SESSION['seats_bussiness']=$reduced_seats;
									$sql2="update flight_details set seats_bussiness='".$_SESSION['seats_bussiness']."' where flight_id='".mysqli_real_escape_string($con,$_SESSION['flight_id'])."'";
									mysqli_query($con,$sql2);
								}
						}
					}
					
					
					
				}
				echo '<div class="alert alert-success" role="alert" style="width:600px;margin-left:50px">'.$val.'</div>';
				
				


?>