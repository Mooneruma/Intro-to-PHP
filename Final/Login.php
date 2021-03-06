

<!doctype html>
<html>

	<head>
	<meta charset="utf-8">
	<!-- head does not display-->
		<title>home</title>
	
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	</head>
	

	<style>
	
	*{
		margin: auto;
		padding: 0;
		
	}
	
	header{
		background-color: black;
		color: white;
		padding-top: 0.5em;
		padding-bottom: 1em;
		font-family: "Impact", Charcoal, sans-serif;
		font-size: 36px;
		text-align: center;
	}
	
	body{
		background-image: url("d417-lapis-blue.jpg");
		text-align: left;
		
	}

	#sidebar{
		background-color: white; 
		box-shadow:3px 3px 3px 2px #797979;
		height: 50px;
		width: 100px;
		padding: 5px;
		text-align: center;
		width: 23%;
		float: left;
		border: solid thick;
		margin-top: 2em;
	}

	#main{
		font-family: "Times New Roman", Times, serif;
		padding: 2em;
		font-size: 18px;
		text-align: center;
	}
	
	#wrapper{
		background-color: rgba(255, 255, 255, 0.99);
		width: 95%;
	}
	
	#wrapTight{
	width: 95%;
    box-shadow: 5px 10px 18px #888888;
	padding: 2%;
	}
	
	
	#footer{
		background-color: black;
		color: white;
		width: 100%; 
		padding: 0;
		float: right;
		padding-top: 2em;
	}
	
	#TShad{
		 text-shadow: #aaa 1.5px 1.5px 1.5px;
	}
	
	#BShad{
		background-color: #EEEEEE; 
		box-shadow:3px 3px 3px 2px #797979; 
		height: 100px;
		width: 100px; 
		padding: 5px;
	}
	
	#BRounded{
		border: 2px solid orange;
		border-radius : 25px;
		width: 100px;
		padding: 10px ;
		text-align:center;
	}
	
	#Seperators{
		height: 25px;
		width: 100%; 
	}
	#SeperatorsSlider{
		height: 350px;
		width: 100%; 
	}


	<!-- Slider CSS -->

	.slider {
  max-width: 300px;
  height: 200px;
  margin: 20px auto;
  position: relative;
}
.slide1,.slide2,.slide3,.slide4,.slide5 {
  position: absolute;
  width: 88.3%;
  height: 350px;;
}
.slide1 {
  background: url(pexels-photo-761543.jpeg)no-repeat center;
      background-size: cover;
    animation:fade 8s infinite;
-webkit-animation:fade 8s infinite;

} 
.slide2 {
  background: url(pexels-photo-518389.jpeg)no-repeat center;
      background-size: cover;
    animation:fade2 8s infinite;
-webkit-animation:fade2 8s infinite;
}
.slide3 {
    background: url(pexels-photo-164879.jpeg)no-repeat center;
      background-size: cover;
    animation:fade3 8s infinite;
-webkit-animation:fade3 8s infinite;
}
@keyframes fade
{
  0%   {opacity:1}
  33.333% { opacity: 0}
  66.666% { opacity: 0}
  100% { opacity: 1}
}
@keyframes fade2
{
  0%   {opacity:0}
  33.333% { opacity: 1}
  66.666% { opacity: 0 }
  100% { opacity: 0}
}
@keyframes fade3
{
  0%   {opacity:0}
  33.333% { opacity: 0}
  66.666% { opacity: 1}
  100% { opacity: 0}
}
	
	<!-- Return to top -->
	
	body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
	</style>
	
<style>

#orderArea	{
	width:900px;
	background-color:#CF9;
}

.error	{
	color:red;
	font-style:italic;	
}
</style>	

<?php
	include 'ConnectLogin.php';			//connects to the database

	$stmt = $conn->prepare("SELECT event_user_name, event_user_password FROM user_table WHERE event_user_id = 3");
	$stmt->execute();
?>

<table>
<?php 
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo "<tr>";
			$ServUser = $row['event_user_name'];	
			$ServPass = $row['event_user_password']; 		
		echo "</tr>";
	}

?>
</table>

<?php
session_start();
$inName = "";
$inDesc = "";
$_SESSION["User"] = "";

		if(isset($_POST["submit"]))
	{	

		$inName = $_POST['inName'];
		$inDesc = $_POST['inDesc'];
		
		if($inName == $ServUser && $inDesc == $ServPass){
			$_SESSION["User"] = "valid";
			header('Location: displayEvents.php'); 
		}else{
			$_SESSION["User"] = "Invalid";
		}
		
	}

?>	
	
	<body>
	
<div id = "wrapper">	
	<div id = "wrapTight">
		<header>
			<div class = "page-header">
				<h1 style="font-family:Bookman;"><u>Moonplex Venues</u></h1>
				<img src = "celso-405219-unsplash.jpg" height = 250 width = 60%  align = "center" style="opacity:0.6;filter:alpha(opacity=60); filter: contrast(300%);"/>
			</div>
		</header>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Explore our pages</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="Final.php">Home</a></li>
      <li><a href="ContactPage.php">Contact</a></li>
      <li><a href="ConcertPage.php">Concert Dates</a></li>
      <li><a href="Location.php">Location</a></li>
	  <li class="active"><a href="#">Login</a></li>
    </ul>
  </div>
</nav>
		 <div id="Seperators"></div>
		 <div id="Seperators"></div>
		
		
		<content id = "main">	
		
		<div id="orderArea">
<form id="form1" name="form1" method="post" action=" <?php echo htmlentities($_SERVER['PHP_SELF']); ?> ">
  <h3>Login: <span class = "error"><?php if($_SESSION["User"] == "Invalid"){echo "login information incorrect.";}?></span></h3>

    <tr>
      <td>Enter User Name:<br> </td>
      <td><input type="text" name="inName" id="inName" size="50" value = "<?php echo htmlspecialchars($inName); ?>" /><br></td>
    </tr>
	
    <tr>
      <td>Enter Password:<br> </td>
      <td><input type="text" name="inDesc" id="inDesc" size="50" value = "<?php echo htmlspecialchars($inDesc); ?>" /><br></td>
    </tr>	
    <input type="submit" name="submit" id="submit" value="Login" />
    <input type="reset" name="button2" id="button2" value="Clear Form" />
</form>


</div>
		
		<div id="SeperatorsSlider"></div>
		
	<div class = "row">
	
	<div class='slider'>
		<div class='slide1'></div>
		<div class='slide2'></div>
		<div class='slide3'></div>
	</div>
	
	</div>
		<div id="SeperatorsSlider"></div>
	
		</content>

	
	</div>

	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

	<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
	
	<content id ="footer">
		Made for edjucational purposes.
	</content>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	
	</body>
</html>