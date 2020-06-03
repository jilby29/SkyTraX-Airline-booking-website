<?php 
session_start();
include 'index.php';
$errormessage="";
include 'connection.php';


$sql2="select * from sm11_passenger_details where pnr='".$_SESSION['pnr']."'";
$result=mysqli_query($con,$sql2);
$total_price=0;
while($row=mysqli_fetch_array($result)){
	if($row['class']== 'economy'){
		$total_price=$total_price+$_SESSION['price_economy'];
	}else{
		if($row['class']== 'business'){
			$total_price+=$_SESSION['price_business'];
		}
	}
}
echo '<div class="alert alert-info" role="alert" style="width:600px;margin-left:50px;margin-top:10px;">Total Amount to be paid in AUD:'.$total_price.'</div>';

if(isset($_POST['paybutton'])){
	
	$number=$_POST['cardnumber'];

	$ctype=$_POST['cardtype'];
	switch($ctype){
		
		case "Visa":
			
			$newnumber = preg_replace("/[^0-9]+/", "", $number);
			$visa="/^4[0-9]{12}(?:[0-9]{3})?$/";
			if(preg_match($visa,$newnumber)){
				include 'sql_for_inserting.php';
				echo '<div id="buttonlink"><a class="btn btn-primary" href="print_ticket.php" role="button">Click here to view ticket</a></div>';
				
			}else{
				include 'sql_for_deleting.php';
				
			}
			break;
		
		case "Mastercard":
			
			$newnumber = preg_replace("/[^0-9]+/", "", $number);
			$Mastercard="/^5[1-5][0-9]{14}$/";
			if(preg_match($Mastercard,$newnumber)){
				include 'sql_for_inserting.php';
				echo '<div id="buttonlink"><a class="btn btn-primary" href="print_ticket.php" role="button">Click here to view ticket</a></div>';
				
				
			}else{
				include 'sql_for_deleting.php';
				
			}
			break;
		
		case "American Express":
		
			$newnumber = preg_replace("/[^0-9]+/", "", $number);
			$AmericanExpress="/^3[47][0-9]{13}$/";
			if(preg_match($AmericanExpress,$newnumber)){
				include 'sql_for_inserting.php';
				echo '<div id="buttonlink"><a class="btn btn-primary" href="print_ticket.php" role="button">Click here to view ticket</a></div>';
				
			}else{
				include 'sql_for_deleting.php';
				
			}
			break;
		
		case "Discover":
		
			$newnumber = preg_replace("/[^0-9]+/", "", $number);
			$Discover="/^3[47][0-9]{13}$/";
			if(preg_match($Discover,$newnumber)){
				include 'sql_for_inserting.php';
				echo '<div id="buttonlink"><a class="btn btn-primary" href="print_ticket.php" role="button">Click here to view ticket</a></div>';
				
			}else{
				include 'sql_for_deleting.php';
				
			}
			break;
		
		
		
		
	}
	


 
}	




?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <title>Payments::</title>
	
	<style>
	
		#paymentcontainer{
			
			width:600px;
			margin-left:50px;
			margin-top:60px;
		}
		
		.icon-container{
			
			width:600px;
		
		}
		
		#buttonlink{
			margin-left:50px;
		}
		
		html{
			 background-image: none;
			}
		
	
	</style>
  </head>
  <body>
		  <div id="paymentcontainer">
		  
		  
			 <h2>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">	
              <i class="fa fa-cc-visa fa-3x" style="color:navy;"></i>
              <i class="fa fa-cc-amex fa-3x" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard fa-3x" style="color:red;"></i>
              <i class="fa fa-cc-discover fa-3x" style="color:orange;"></i>
            </div>
			
			<div id="error"><?php if(isset($_GET['errormessage'])){
				 $mesg=$_GET['errormessage'];
				echo '<div class="alert alert-danger" role="alert">'.$mesg.'</div>';
			  
		  }?></div>
			
			<form method="post"  id="form1">
			
				<div class="form-group col-md-3">
						  <label for="cardtype">Card Type</label>
							<select id="expirydate" class="form-control" name="cardtype" required>
							<option disabled selected></option>
							<option>Visa</option>
							<option>Mastercard</option>
							<option>American Express</option>
							<option>Discover</option>
						</select>
				</div>			
			
				  <div class="form-group" >
						<label for="number">Card number</label>
						<input type="text" class="form-control" id="cardnumber" aria-describedby="cardHelp" name="cardnumber" maxlength="19" required>
						<small id="cardHelp" class="form-text text-muted">Enter the card number.</small>
					</div>
					
					<div class="form-group">
						<label for="holdername">Name</label>
						<input type="text" class="form-control" id="holdername" name="holdername" aria-describedby="namehelp" required>
						<small id="namehelp" class="form-text text-muted">Enter the name as in card.</small>
					</div>
					
					 <div class="form-row">
						<div class="form-group col-md-3">
						  <label for="expirydate">Expiry Month</label>
							<select id="expirydate" class="form-control" name="expirydate" required placeholder="Month">
							<option disabled selected></option>
							<option>Jan</option>
							<option>Feb</option>
							<option>Mar</option>
							<option>Apr</option>
							<option>May</option>
							<option>Jun</option>
							<option>Jul</option>
							<option>Aug</option>
							<option>Sep</option>
							<option>Oct</option>
							<option>Nov</option>
							<option>Dec</option>
							
						  </select>
						</div>
						<div class="form-group col-md-3">
						  <label for="expiryyear">Expiry year</label>
						  <select id="expiryyear" class="form-control" name="expiryyear" placeholder=YYYY required>
							<option disabled selected></option>
							<option>2020</option>
							<option>2021</option>
							<option>2022</option>
							<option>2023</option>
						  </select>
						</div>
						<div class="form-group col-md-3">
						  <label for="cvv">CVV</label>
						   <input type="text" class="form-control" id="cvv" name="cvv" placeholder="CVV" maxlength="3" pattern="\d{3}" required>						  
						  </select>
						</div>
					</div>	
					
					<input type="submit" class="btn btn-primary" name="paybutton" id="paybutton" value="Pay Now">
			
			</form>
			</div>

			<!-- Optional JavaScript -->
			<!-- jQuery first, then Popper.js, then Bootstrap JS -->
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
			<script type="text/javascript">
			
				$('#paybutton').click(function () {

				 // e.preventDefault();
					if($("#form1").checkValidity()){
						  $.ajax({
							type: 'post',
							url: 'payment_details.php',
							data: $('form').serialize(),
							success: function (variable) {
							  alert(variable);
							}
						  });
					}
						return false;

				});
				
				$('#cardnumber').keyup(function() {
				  var foo = $(this).val().split("-").join(""); // remove hyphens
				  if (foo.length > 0) {
					foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
				  }
				  $(this).val(foo);
				});
				
				$(window).bind("beforeunload", function() { 
					
				setsession('total_price',null);
				});
			</script>
	
	</body>
</html>




