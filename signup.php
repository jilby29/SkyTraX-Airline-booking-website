<?php include 'index.php';

$error=""; $passwordmessage=""; $emailmessage="";
$email="";


if(array_key_exists("submit",$_POST)){
	
				if($_POST['username'] == ""){
											
					$error.= "Enter Username.<br>";
				}
										
				if($_POST['password'] == ""){
											
					$error.= "Enter Password.<br>";
				}
										
				if($_POST['confirmpassword'] == ""){
											
					$error.= "Enter Confirm Password.<br>";
											
				}else{
				
											
				if($_POST['password'] != $_POST['confirmpassword']){
											
					$passwordmessage="Both Password and Confirm Password must be same.<br>";
				}
				
				}
				
				
										
										
				if($_POST['email'] == ""){
											
					$error.= "Enter Email.<br>";
											
				}else{
					
					$email=$_POST['email'];
					if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
						$emailmessage="Enter Valid email.";
						
					}
				}
				
				if($error == "" && $emailmessage == "" && $passwordmessage == ""){
					
						include 'connection.php';
								
						$sql="insert into flight_users(username,password,email)values('".$_POST['username']."','".$_POST['password']."','".$_POST['email']."')"	;
						
						if(mysqli_query($con,$sql)){
							
							$sql="update flight_users set password='".mysqli_real_escape_string($con,md5(md5(mysqli_insert_id($con)).$_POST['password']))."' where id='".mysqli_real_escape_string($con,mysqli_insert_id($con))."'";
							
							if(mysqli_query($con,$sql)){
							header("Location: login.php");
							}
							echo "not updated";
						}else{
							echo "not inserted" .mysqli_error($con);
						}
						
				}
				
			}				
				
?>
<!DOCTYPE html>
<html>
	<head>
		<style>
			#signupcontainer{
				width:300px;
				text-align:center;
				margin-left:400px;
				margin-top:50px;
				font-family:Sans-serif;
			}
			
			#confirmspan{
				
				color:red;
				font-weight:bold;
				
			}
			
			
			html{
			 background-image: none;
			}
			
			
			#headercontainer{
				display:none;
			}
			
			
			
		</style>
	</head>
	<body>
	
		<div  class="container">
		
					<form method="post" id="signupcontainer" >
							<h1>Sign Up</h1>
							<p>New User?? Fill the form..</p>	

							<div id="error"><?php if($error != ""){
														echo '<div class="alert alert-danger" role="alert"><strong>'.$error.'</strong>
															</div>';}
										?>	</div>						

								<div class="form-group">
									
									<input type="text" id="username" name="username" class="form-control" placeholder="Username">
								</div>	
								<div class="form-group">
									
									<input type="password" id="password" name="password" class="form-control" placeholder="Password">
								</div>	
									
								<div class="form-group">
									
									<input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm Password"><span id="confirmspan">
										<?php if($passwordmessage != ""){
											
										echo "*".$passwordmessage;
										}
							
									?>
									
									</span>
									
									</span>
								</div>	
								<div class="form-group">
									
									<input type="text" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email;?>"><span id="confirmspan">
										<?php if($emailmessage != ""){
											
										echo "*".$emailmessage;
										}
							
									?>				
									</span>
									
								</div>
								<div class="form-group">
								
								<input type="submit" class="btn btn-primary" value="Sign Up" name="submit"><br>
								</div>
															
								<p ><a class="toggleclass" href="login.php">Login</a></p>
				
					</form>
		</div>
		
	<body>
</html>				
			