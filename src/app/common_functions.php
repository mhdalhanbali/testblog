<?php 
function chcekingInfo($var){
		echo "<pre>";
	 print_r($var);
	 echo "</pre>";
	}

		function loginCheck(){
			if (!isset($_SESSION['user'])) {
			redirectLocation('index.php');
		}
		}
function redirectLocation($location){
		header("Location: {$location}");
	exit;
	}



 ?>