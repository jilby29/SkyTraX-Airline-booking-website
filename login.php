<?php
session_start();
include 'index.php';




$error=""; $passwordmessage=""; $emailmessage="";

	if(array_key_exists("submit",$_POST)){
	
		
			
		if($_POST['username'] == ""){
						
			$error.= "Enter Username <br>";
		}
					
		if($_POST['password'] == ""){
						
			$error.= "Enter Password";
		}
					
					
					
				
				
		if($error != ""){
			
			$error.="Solve error before moving further.";
			
		}else{
								
							
				$con=mysqli_connect("localhost","jilby","vijijil@19","mydbp");
				if($con){
									
				
							
						$sql="select *from flight_users where username='".mysqli_real_escape_string($con,$_POST['username'])."'";
									
						$result=mysqli_query($con,$sql);
						
						if(mysqli_num_rows($result)>0){
						
							$row=mysqli_fetch_array($result);
							
																	
							if(isset($row)){
												
								$hashedpassword=md5(md5($row['0']).$_POST['password']);
								
									if($hashedpassword==$row['2']){
										$cookie_name="id";
										$cookie_value=$row['0'];
										
										setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
										
										
										header("Location: bookflight.php");
									}else{
										$error="Username password combination doesnot exist.";
									}
									
											
								}
						}else{
							echo "no rows returned";
						}	
		
	            }else{
					echo "connection not established";
				}
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<style>
			#signincontainer{
				width:300px;
				text-align:center;
				margin-left:400px;
				margin-top:70px;
				font-family:Sans-serif;
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
	
		<div class="container">
		
			<div id="error"><?php if($error != ""){
							echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';}
			?>
			</div>
			
					<form method="post" id="signincontainer">
							<h1>Fly Miles Member Login</h1>
								

								<div class="form-group">
									
									<input type="text" id="username" name="username" class="form-control" placeholder="Username">
								</div>	
								<div class="form-group">
									
									<input type="password" id="password" name="password" class="form-control" placeholder="Password">
								</div>	
								<div class="form-group">
								
								<input type="submit" class="btn btn-primary" value="Login" name="submit"><br>
								</div>
								
								<p >Click <a href="signup.php"  >Sign Up</a> for new members </p>
					</form>
		
		</div>
		
		
		
	</body>
</html>