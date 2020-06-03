<?php
session_start();
include 'connection.php';
include 'index.php';
?>
<html>
	<head>
	
	<style>
	#tableticketcontainer{
		margin-left:80px;
		width:800px;
		border:1px solid #ddd;
	}
	
	html{
			 background-image: none;
			}
			#tablename{
		font-size:150%;
		margin-left:80px;	
	}
	</style>
	
	
	</head>
	
	<body>
		<?php 
		if(isset($_SESSION['id'])){
			$sql="select *from sm11_passenger_details where login_id='".$_SESSION['id']."'";
			$result=mysqli_query($con,$sql);
			
			
			
			while($row=mysqli_fetch_array($result)){?>
				<div id="tablename"><b><?php echo strtoupper($row['name']);?></b></div>
				
				<table id="tableticketcontainer">
				<tr>
				<th align=center><b>Flight_id</b></th>
				<th align=center><b>PNR Status</b></th>
				<th align=center><b>Source</b></th>
				<th align=center><b>Destination</b></th>
				<th align=center><b>Journey_date</b></th>
				<th align=center><b>Flight_class</b></th>
				<th align=center><b>Booking_status</b></th>
				</tr>
				<?php
				
				$sql1="select *from insert_ticket_details where login_id='".$_SESSION['id']."' LIMIT 1";
				$result1=mysqli_query($con,$sql1);
				while($row1=mysqli_fetch_array($result1)){
				
				$sql2="select *from flight_details where flight_id='".$row1['flight_no']."'";
				$result2=mysqli_query($con,$sql2);
				$source="";
				$destination="";
					while($row2=mysqli_fetch_array($result2)){
						$source=$row2['source'];
						$destination=$row2['destination'];
					}
				?>
				<tr>
				
				<td align=center><?php echo $row1['flight_no'];?></td>
				<td align=center><?php echo $row1['pnr'];?></td>
				<td align=center><?php echo $source;?></td>
				<td align=center><?php echo $destination;?></td>
				<td align=center><?php echo $row1['journey_date'];?></td>
				<td align=center><?php echo $row1['class'];?></td>
				<td align=center><?php echo $row1['booking_status'];?></td>
				</tr>
		
			</table>
		<?php }?>
		<?php }
		}else{
		
			echo '<div class="alert alert-info" role="alert" style="width:600px;margin-left:50px;margin-top:10px;">Login to view booking details</div>';
		}
		?>	
	</body>
</html>
	
