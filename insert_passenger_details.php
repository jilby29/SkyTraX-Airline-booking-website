<?php
session_start();
include 'connection.php';

$total_price="";
$eco_price=$_SESSION['price_economy'];
$bus_price=$_SESSION['price_business'];
$no_of_pass=$_SESSION['no_of_pass'];
$_SESSION['pnr']=$_POST['formaction'];

if(isset($_COOKIE['id'])){
	$loginid=$_SESSION['id'];
	
}else{
	$loginid="";
}


//print_r($_POST);
if(isset($_POST['formaction'])){
			
		/*	if($_POST['class']== 'economy'){
					
							If(isset($_SESSION['total_price'])){
							
								$_SESSION['total_price']=$_SESSION['total_price']+$_SESSION['price_economy'];
															
							}else{
								$_SESSION['total_price']=$_SESSION['price_economy'];
							}
			
				}else{
					if($_POST['class']== 'business'){
						
							If(isset($_SESSION['total_price'])){
								
								$_SESSION['total_price']=$_SESSION['total_price']+$_SESSION['price_business'];
							}
							else{
								
								$_SESSION['total_price']=$_SESSION['price_business'];
							}
					
					}
				}*/
				

	
		
	$name=$_POST['firstname'].' '.$_POST['surname'];
	$insertsql="insert into sm11_passenger_details(passenger_id,pnr,name,gender,age,meal_choice,class,login_id)values(?,?,?,?,?,?,?,?)";
	$insertstatement=mysqli_prepare($con,$insertsql);
	mysqli_stmt_bind_param($insertstatement,'isssissi',$_POST['passenger_id'],$_POST['formaction'],$name,$_POST['gender'],$_POST['age'],$_POST['meal'],$_POST['class'],$loginid);
	mysqli_stmt_execute($insertstatement);
	
	

	
}

 ?>
 





	 


 


 