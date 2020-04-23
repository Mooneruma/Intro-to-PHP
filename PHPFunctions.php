<!doctype html>
<html>

	<head>
	<meta charset="utf-8">
		<title>home</title>
	</head>
	
	<body>
	
		<style>
	
		*{	
			margin: auto;
		}
	
		header{
			padding-top: 1em;
			background-color: black;
			color: white;
		}
	
		body{
			background-image: url("../image/fractal-1224853_1280.jpg");
			text-align: center;
		}

		#sidebar{
			margin-top: 0.2em;
			padding-top: 2.5em;
			text-align: center;
			background-color: white;
			float: left;
			width: 280px;

		}
	
		#sidebarOpen{
	
			margin-top: 0.5em;
			padding-top: 0.5em;
			text-align: left;
			float: left;
			width: 280px;
		}
	

		#main{
			text-align: left;
			width: 75%;
			float: right;
			padding-top: 2em;
			background-color: white;
	
		}
	
		#wrapper{
			background-color: white;
			width: 1200px;
			padding-bottom: 1300px;
		}
		
		footer{
			width: 1200px;
			background-color: black;
			color: white;
			padding-top: 25px;
			text-align: left;
			text-indent: 50px;
		}
	
		#clearfloat{
			clear:both;	
		}
	
		Big{
			font-size: 2em;
		}

		</style>
	

		<div id = "wrapper">		
 <?php 
	
	$YearInput = $_post["Year"];
	$MonthInput = $_post["Month"];
	$DayInput = $_post["Day"];
	
	Function formatDate($month, $day, $year){
		
		$DateIntake = date("m/d/Y", mktime(0, 0, 0, $month, $day, $year));
		return $DateIntake;
		
	}
	
	Function InterDate($month, $day, $year){
		
		$InterIntake = date("d/m/Y", mktime(0, 0, 0, $month, $day, $year));
		return $InterIntake;
		
	}
	
	function formatPass($num){
		
		$formatPass = number_format($num);
		return $formatPass;
		
	}
	
	function PassCurrency($num){
		
		$PassCurrency = "$" . number_format($num,2);
		return $PassCurrency;
		
	}
	
	function subCheck($phrase){
		
		$phrase = strtolower($phrase);
		if (strpos($phrase, 'dmacc') !== false) {
			return ("test does contain DMACC");
		}
		return ("test does not contain DMACC");
	}
	
 ?>
 
 		<header>
			<h1>wdv341 Homework Page</h1>
		</header>

				<content id = "sidebar">
				
					
				
				</content>

				<content id = "main">
				
					
				lol	<?php echo formatDate($inMonth,$inDay,$inYear);  ?>
					
					
				
				</content>
		
	
				<content id = "sidebarOpen">
	
				</content>
			
			<div class = "clearfloat"></div>
		
		<footer>
			Designed and Coded By Kyle Moon
			<br><p><b>Thank you for viewing!</b></p>
		</footer>
	</body>
	




</html>