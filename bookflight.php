<?php
session_start();

if(isset($_COOKIE['id'])){
	$_SESSION['id']=$_COOKIE['id'];
	print_r($_SESSION);
	print_r($_COOKIE);
}
include 'index.php';
$todays_date=date('Y-m-d'); 
$result="";

$max_date=date_create(date('Y-m-d'));
date_add($max_date,date_interval_create_from_date_string("90 days")); 

if(array_key_exists("search",$_POST)){
	
	include 'connection.php';
		
	$sql="select * from flight_details where source='".mysqli_real_escape_string($con,$_POST['source'])."' and destination='".mysqli_real_escape_string($con,$_POST['destination'])."' and depart_date='".mysqli_real_escape_string($con,$_POST['departdate'])."'";
	
	$result=mysqli_query($con,$sql);
	
}

?>
<!DOCTYPE html>
<html>
	<head>
	
		<style>
			.bookflightcontainer{
				width:500px;
				margin-left:80px;
				margin-top:30px;
				
			}
			
			label{
				font-weight:bold;
			}
			
			span {
				
				white-space:pre;
			}
			
			#tablecontainer {
				
			  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  padding-top:15px;
			
			  
			}
			
			#tablecontainer td, #tablecontainer th {
			  border: 1px solid #ddd;
			
			}
			
			#tablecontainer th {
			  padding-top: 10px;
			  padding-bottom: 10px;
			  text-align: left;
			  background-color: #007BFF;
			  color: white;
			}
			
			#tablecontainer tr:nth-child(even){background-color: #f2f2f2;}

			#tablecontainer tr:hover {background-color: #ddd;}
			
				
			

			html{
			 background-image: none;
			}
			
			
		</style>
		<!-- Bootstrap Date-Picker Plugin -->
			
	</head>
	<body>
		
		<div class="bookflightcontainer">
			<form method="post">
			<div class="input-group">
				<div class="form-group">
					<label for="source">*Source</label>
					<input type="text" class="form-control" id="source"  placeholder="From" name="source" required>
				</div>
				
				<span class="input-group-addon">*</span>
				
				<div class="form-group">
					<label for="destination">Destination</label>
					<input type="text" class="form-control" id="destination" placeholder="To" name="destination" required>
				</div>
			</div>
			<div class="input-group">
			
				 <div class="form-group">
					<label class="control-label" for="date">Depart date</label>
					<input class="form-control" id="date" name="departdate" value=<?php echo $todays_date; ?>  type="date" required>
				</div>
			</div>
				
				<input class="btn btn-primary" type="submit" value="Search" name="search" id="search">
				
				
				
			
			
				<div id="tablecontainer">
				<?php if($result !=""){
						
					 include 'searchtable.php';
				}?>
				</div>	
		</form>
			
		</div>
			

	</body>
</html>