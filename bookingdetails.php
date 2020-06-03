<?php 
include 'index.php';
session_start();
$_SESSION['seats_economy']=$_GET['seats_economy'];
$_SESSION['seats_bussiness']=$_GET['seats_bussiness'];
$_SESSION['price_economy']=$_GET['price_economy'];
$_SESSION['price_business']=$_GET['price_business'];
$_SESSION['flight_id']=$_GET['flight_id'];
$_SESSION['journey_date']=$_GET['journey_date'];
$_SESSION['source']=$_GET['source'];
$_SESSION['destination']=$_GET['destination'];




$number=rand(160000,170000);


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.css" rel="stylesheet"/>

		<style>
			html{
			 background-image: none;
			}
			
			#headercontainer{
				display:none;
			}
			
			#passengercontainer{
				margin-top:30px;
				margin-left:80px;
				width:1000px;
			}
			
			.highlight{

				border: 1px solid red !important;
			}
			
			
		</style>
	</head>
	<body>
		<div id="passengercontainer">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
				<div class="form-group">
				
					<label for="passenger">No: of passengers <label>
					<select class="form-control" id="passenger" name="passenger"  >
					<option disabled selected></option>
					  <option value="form1" <?php echo $_SESSION['no_of_pass']="1";?>>1</option>
					  <option value="form2" <?php echo $_SESSION['no_of_pass']="2";?>>2</option>
					  <option value="form3" <?php echo $_SESSION['no_of_pass']="3";?>>3</option>
					  <option value="form4" <?php echo $_SESSION['no_of_pass']="3";?>>4</option>
					</select>
				  </div>
			  
		<div id="formcontainer">
					
			<form id="form1" style="display:none" name="formsub"  method="post" action="insert_passenger_details.php" >
				<h4>Passenger 1 details:</h4>
			 <input type="hidden" name="formaction" value="form1action">
			 <input type="hidden" name="passenger_id" value="1">
			

			
						<div class="form-row">
							<div class="form-group col-md-6">
							  <label for="firstname">Firstname</label>
							  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required>
							  <input type="hidden" name="formaction" value="form1action">
							 
							  
							</div>
							<div class="form-group col-md-6">
							  <label for="surname">Surname</label>
							  <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" required>
							  <input type="hidden" name="formaction" value="form1action">
							  
							</div>
						  </div>
						  
						    <div class="form-group">
							  <input type="radio" id="male" name="gender" value="male">Male
							 
							  <input type="radio" id="female" name="gender" value="female">Female
							  <input type="hidden" name="formaction" value="form1action">
							  
							</div>
						 <div class="form-group">
						<label for="age">Age</label>
						<input type="text" class="form-control" id="age" name="age">
						<input type="hidden" name="formaction" value="form1action">
					  </div>
						<div class="form-row">
						 <input type="hidden" name="formaction" value="form1action">
						<div class="form-group col-md-6">
						  <label for="meal">Meal Choice</label>
						  <select id="meal" class="form-control" name="meal" required>
							<option disabled selected></option>
							<option value="yes">yes</option>
							<option value="no">no</option>
						  </select>
						 
					    </div>
							<div class="form-group col-md-6">
							 <input type="hidden" name="formaction" value="form1action">
							  <label for="seatclass">Economy/Business</label>
							  <select id="seatclass" class="form-control" name="class" required>
								<option disabled selected></option>
								<option value="economy">Economy</option>
								<option value="business">Business</option>
							  </select>
							 
							</div>
						</div>	
						 
					 
			</form>			
		
		
	<form id="form2" style="display:none" name="formsub"  method="post" action="insert_passenger_details.php">
	
		<h4>Passenger 2 details:</h4>
		<input type="hidden" name="formaction" value="form2action">
		<input type="hidden" name="passenger_id" value="2">
	
		
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="firstname">Firstname</label>
						  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required>
						  <input type="hidden" name="formaction" value="form2action">
						</div>
					
						<div class="form-group col-md-6">
						  <label for="surname">Surname</label>
						  <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" required>
						  <input type="hidden" name="formaction" value="form2action">
						</div>
					  </div>
					  
					  <div class="form-group" required>
							  <input type="radio" id="male" name="gender" value="male">Male
							 
							  <input type="radio" id="female" name="gender" value="female">Female
							  <input type="hidden" name="formaction" value="form2action">
							  
							</div>
					 <div class="form-group">
						<label for="age">Age</label>
						<input type="text" class="form-control" id="age" name="age" required>
						<input type="hidden" name="formaction" value="form2action">
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <input type="hidden" name="formaction" value="form2action">
						  <label for="meal">Meal Choice</label>
						  <select id="meal" class="form-control" name="meal" required>
							<option disabled selected></option>
							<option value="yes">yes</option>
							<option value="no">no</option>
						  </select>
						
					    </div>
							<div class="form-group col-md-6">
							 <input type="hidden" name="formaction" value="form2action">
							  <label for="seatclass" >Economy/Business</label>
							  <select id="seatclass" class="form-control" name="class">
								<option selected>Choose...</option>
								<option value="economy">Economy</option>
								<option value="business">Business</option>
							  </select>
							 
							</div>
						</div>	
				
				</form>	
		
		
		<form id="form3" style="display:none" name="formsub"  method="post" action="insert_passenger_details.php">
		<h4>Passenger 3 details:</h4>
		<input type="hidden" name="formaction" value="form3action">
		<input type="hidden" name="passenger_id" value="3">	
		
		
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="firstname">Firstname</label>
						  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required>
						  <input type="hidden" name="formaction" value="form3action">
						</div>
						<div class="form-group col-md-6">
						  <label for="surname">Surname</label>
						  <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" required>
						  <input type="hidden" name="formaction" value="form3action">
						</div>
					  </div>
					  
					  <div class="form-group">
							  <input type="radio" id="male" name="gender" value="male">Male
							 
							  <input type="radio" id="female" name="gender" value="female">Female
							  <input type="hidden" name="formaction" value="form3action">
							  
							</div>
					  <div class="form-group">
						<label for="age">Age</label>
						<input type="text" class="form-control" id="age" name="age" required>
						<input type="hidden" name="formaction" value="form3action">
					  </div>
					 <div class="form-row">
						<div class="form-group col-md-6">
						  <input type="hidden" name="formaction" value="form3action">
						  <label for="meal">Meal Choice</label>
						  <select id="meal" class="form-control" name="meal">
							<option disabled selected></option>
							<option value="yes">yes</option>
							<option value="no">no</option>
						  </select>
						
					    </div>
							<div class="form-group col-md-6">
							<input type="hidden" name="formaction" value="form3action">
							  <label for="seatclass">Economy/Business</label>
							  <select id="seatclass" class="form-control" name="class" required>
								<option disabled selected></option>
								<option value="economy">Economy</option>
								<option value="business">Business</option>
							  </select>
							  
							</div>
						</div>	
				
				</form>	
				
				
			<form id="form4" style="display:none" name="formsub"  method="post" action="insert_passenger_details.php" >
				<h4>Passenger 4 details:</h4>
			<input type="hidden" name="formaction" value="form3action">
			<input type="hidden" name="passenger_id" value="4">	
			
		
					<div class="form-row">
						<div class="form-group col-md-6">
						  <label for="firstname">Firstname</label>
						  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Firstname" required>
						  <input type="hidden" name="formaction" value="form4action">
						</div>
						<div class="form-group col-md-6">
						  <label for="surname">Surname</label>
						  <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" required>
						  <input type="hidden" name="formaction" value="form4action">
						</div>
					  </div>
					  
					   <div class="form-group">
							  <input type="radio" id="male" name="gender" value="male">Male
							 
							  <input type="radio" id="female" name="gender" value="female">Female
							  <input type="hidden" name="formaction" value="form4action">
							  
							</div>
					  <div class="form-group">
						<label for="age">Age</label>
						<input type="text" class="form-control" id="age" name="age" required>
						<input type="hidden" name="formaction" value="form4action">
					  </div>
					  <div class="form-row">
						<div class="form-group col-md-6">
						  <input type="hidden" name="formaction" value="form4action">
						  <label for="meal">Meal Choice</label>
						  <select id="meal" class="form-control" name="meal" required>
							<option disabled selected></option>
							<option value="yes">yes</option>
							<option value="no">no</option>
						  </select>
						
					    </div>
							<div class="form-group col-md-6">
							<input type="hidden" name="formaction" value="form4action">
							  <label for="seatclass">Economy/Business</label>
							  <select id="seatclass" class="form-control" name="class" required>
								<option disabled selected></option>
								<option value="economy">Economy</option>
								<option value="business">Business</option>
							  </select>
							  
							</div>
						</div>	
						
						
				
				</form>	
					<div id="displayconatiner"></div>
					 
					<input type="submit" class="btn btn-primary" name="bookbutton" id="bookbutton" value="Book">	
					
				</div>
				  
			
		</div>	
		 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.js"></script>
		<script type="text/javascript">
	
		
		$("#passenger").on('change',function() {   
		
				var selectVal = $(this).val();
				viewselected(selectVal);
		
				});
			
			function viewselected(selectVal)	{	
					switch(selectVal){
					
									
						case "form1":
						
							$("#form1").show();
							$val=<?php echo $number; ?>;
							$('input[name="formaction"]').val($val);
							$("#form2").hide();
							$("#form3").hide();
							$("#form4").hide();
							break;
						
						case "form2":
						
							$("#form1").show();
							$val=<?php echo $number; ?>;
							$('input[name="formaction"]').val($val);
							$("#form2").show();
							$("#form3").hide();
							$("#form4").hide();
							break;
						case "form3":
						
							$("#form1").show();
							$("#form2").show();
							$("#form3").show();
							$val=<?php echo $number; ?>;
							$('input[name="formaction"]').val($val);
							$("#form4").hide();
						break;	
						
						case "form4":
						
							$("#form1").show();
							$("#form2").show();
							$("#form3").show();
							$("#form4").show();
							$val=<?php echo $number; ?>;
							$('input[name="formaction"]').val($val);
						
						break;
						
					}
			}
		
			
				
			$(document).ready(function () {
					
						
					isFormValid = true;
					$("#bookbutton").on('click',function () {
						
					
							$('form[name="formsub"]').each(function (e) {
								var $form = $(this);
									if( $('input#firstname').val() == "" || $('input#surname').val() =="" || $('input#age').val() == ""|| $('select#meal').val() == "" || $('select#seatclass').val() == "" || $('radio.gender').val() == ""){
										$(this).addClass("highlight");
										isFormValid = false;
										$(this).focus();
									}
									else{
										$(this).removeClass("highlight");
									}
									
									if(isFormValid == true)	{					
										$.post($form.attr("action"), $form.serialize(),
										 function (variable) {
											//alert(variable);
											window.location.href = "payment_details.php"
										});
									}else{
										
										alert("Input all fields");
									}
									
						
							});
						
					});
			});
		
			
		</script>
		
	</body>
</html>