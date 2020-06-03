<?php 
session_start();

include 'connection.php';
include 'index.php';


?>
<!DOCTYPE html>
<html>
	<head>
	<style>
	#tableticketcontainer{
		margin-left:80px;
		width:800px;
		border:1px solid #ddd;
	}
	
	#tablename{
		font-size:150%;
		margin-left:80px;	
	}
	
	html{
			 background-image: none;
			}
	#printbutton{
		margin-top:20px; 
		margin-left:80px;
		
	}		
	</style>
	</head>
	<body>
	
	<div id="printableArea">
		<?php 
			$sql="select *from sm11_passenger_details where pnr='".$_SESSION['pnr']."'";
			$result=mysqli_query($con,$sql);
			
			
			while($row=mysqli_fetch_array($result)){?>
				<div id="tablename"><b><?php echo strtoupper($row['name']);?></b></div>
				<?php $classoftheperson=$row['class'];?>
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
				$sql1="select *from insert_ticket_details where pnr='".$_SESSION['pnr']."' LIMIT 1";
				$result1=mysqli_query($con,$sql1);
				while($row1=mysqli_fetch_array($result1)){?>
				<tr>
				<td align=center><?php echo $_SESSION['flight_id'];?></td>
				<td align=center><?php echo $_SESSION['pnr'];?></td>
				<td align=center><?php echo $_SESSION['source'];?></td>
				<td align=center><?php echo $_SESSION['destination'];?></td>
				<td align=center><?php echo $row1['journey_date'];?></td>
				<td align=center><?php echo $classoftheperson;?></td>
				<td align=center><?php echo $row1['booking_status'];?></td>
				</tr>
		    <?php }?>
			
			</table>
			<?php }?>
		
			
	</div>
	
			
			<input type="button" class="btn btn-primary" onclick="printDiv('printableArea')" id="printbutton" value="Print/save ticket" />
	
	<script type="text/javascript">
		function printDiv(divName) {
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;
			document.body.innerHTML = printContents;
			window.print();
			document.body.innerHTML = originalContents;
		}
	</script>
	</body>
	
</html>

