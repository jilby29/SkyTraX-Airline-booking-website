<?php
session_start();
if($_GET['logout'] == 1){
			setcookie("id", "", time() - 3600,"/");
			//unset($_COOKIE["id"]);
			if(isset($_COOKIE['id'])){
				unset($_COOKIE['id']);
				session_unset();
				session_destroy();
			echo "Logged out successfully!!";
		
			}
	
	
}


header("Location: index.php");
 ?>
 