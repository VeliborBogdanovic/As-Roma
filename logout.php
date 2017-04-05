<?php @session_start(); ?>
<?php 
	
	if(isset($_SESSION['uloga']))
	{
		unset($_SESSION['uloga']);
	
		
		session_destroy();
		
		
	}
	header("Location:login.php");
?>