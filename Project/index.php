<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="images/logo1.png" type="image/png">
	<title>VERSE</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Ranga&display=swap" rel="stylesheet">
</head>
<body>
	<?php include ('footer.php'); ?>
	<?php include ('header.php'); ?>
	<?php include ('images/menu.php'); ?>
</body>
</html>

<?php 
	if(!isset($_REQUEST['menu'])){
		?>
		<div class="RightPart">
			<div class="Prof">
				<div class="Inf">
					<b>Kozhakhmet Magzhan</b></br>
					01/06/2001</br>
					<b>Status</b></br>
					AAAAAAAAAAAAAAAAAA</br>
					<div class="InfAboutMedia">
						<div>
							<b>Photos</b></br>
							6
						</div>
						<div>
							<b>Musics</b></br>
							0
						</div>
						<div>
							<b>Videos</b></br>
							0
						</div>
					</div>
				</div>
				<img src="images/logo.png">
			</div>

			<div class="Move">
				<div>
					<b>Kozhakhmet Magzhan</b> added a Photo in<?php echo(date(" H:i:s d F Y")); ?></br>
					<img src="images/logo.png">
					<img src="images/logo.png">
					<img src="images/logo.png">
					<img src="images/logo.png">
					<img src="images/logo.png">
					<img src="images/logo.png">
				</div>
			</div>
		</div>
		<?php
	}

	if(isset($_REQUEST['menu'])){
		if($_REQUEST['menu'] == "aboutUs"){
			?>
			<div class="RightPart"> 
				<div>
					"VERSE" this Spanish word. Meaning of the word:</br>
					1) see yourself; look at yourself (look) in the mirror.</br>
					2) see; meet.</br>
					3) to be visible, to be visible.</br>
					4) be obvious.</br>
					5) be; appear.
					<p>
						For some time I could not come up with a name for the project. Thinking the name of many social networks saw the meaning of these names.
						Studying the languages ​​of the world, I found the Spanish word "verse", which has the above meaning.
					</p>
					<p>
						My main goal is to create a social network that will not be like the others.
					</p>
				</div>
				<p>
					<div>
						<b>Visit</b></br>
						Zhanakorgan</br>
						47 O.Ongarbay
					</div>
				</p>
				<p>
					<div style="font-family: 'Ranga',display;font-size: 20px">
						<b style="font-size: 24px">Contacts</b></br>
						+7 702 412 74 02</br>
						+7 747 960 13 59
					</div>
				</p>
			</div>
			<?php
		}
		if($_REQUEST['menu'] == "search"){
			?>
			<form method="POST">
			<p><input type="search" name="search" placeholder="Search Contacts" style="margin-left: 20px"> 
   			<input type="submit" name="submit" value="Search"></p>
			</form>
			<?php
		}
		if($_REQUEST['menu'] == "contacts"){
			?>
			<div class="RightPart"> 
				<div>
					"VERSE" this Spanish word has the meaning of talking, watching, seeing, talking to each other.</br>
				</div>
				<div style="font-family: 'Ranga',display;font-size: 20px">
					<b style="font-size: 24px">Contacts</b></br>
					+7 702 412 74 02</br>
					+7 747 960 13 59
				</div>
			</div>
			<?php
		}
		if($_REQUEST['menu'] == 'settings'){
			?>
			<div class="RightPart">
				<div class="SetName"><b>General</b></div>
				<div class="P1">
					<div class="P1D1">Password</div>
					<div class="P1D2">Qwerty12</div>
					<a href="#" class="P1D3">Change</a>
				</div>
				<div class="P1">
					<div class="P1D1">Email</div>
					<div class="P1D2">kojashmet.magjan@gmail.com</div>
					<a href="#" class="P1D3">Change</a>
				</div>
				<div class="P1">
					<div class="P1D1">Birth date</div>
					<div class="P1D2">01/06/2001</div>
					<a href="#" class="P1D3">Change</a>
				</div>
				<div class="P1">
					<div class="P1D1">Status</div>
					<div class="P1D2">AAAAAAAAAAAAAAAAAA</div>
					<a href="#" class="P1D3">Change</a>
				</div>
				<div class="P1">
					<div class="P1D1">Secret words</div>
					<div class="P1D2">VERSE</div>
					<a href="#" class="P1D3">Change</a>
				</div>
				<div class="P1">
					<div class="P1D1">Language</div>
					<div class="P1D2">English</div>
					<a href="#" class="P1D3">Change</a>
				</div>

				<div class="SetName"><b>Privacy</b></div>
				<div class="P1">
					<div class="P1D1">Who can view the main information on my profile</div>
					<div class="P1D2">Only me</div>
					<a href="#" class="P1D3">Change</a>
				</div>
				<div class="P1">
					<div class="P1D1">Who can view photos of me</div>
					<div class="P1D2">Only me</div>
					<a href="#" class="P1D3">Change</a>
				</div>
				<div class="P1">
					<div class="P1D1">Who can view my music</div>
					<div class="P1D2">Only me</div>
					<a href="#" class="P1D3">Change</a>
				</div>
				<div class="P1">
					<div class="P1D1">Profile type</div>
					<div class="P1D2">Public</div>
					<a href="#" class="P1D3">Change</a>
				</div>
			</div>
			<?php
		}
		if($_REQUEST['menu'] == 'photo'){
			?>
			<div class="RightPart">
				<div style="font-size: 28px; margin-top: 10px">My Photos</div>
				<div class="I1">
					<div class="I2"><img src="images/logo.png"></div>
					<div class="I2"><img src="images/logo.png"></div>
					<div class="I2"><img src="images/logo.png"></div>
					<div class="I2"><img src="images/logo.png"></div>
					<div class="I2"><img src="images/logo.png"></div>
					<div class="I2"><img src="images/logo.png"></div>
				</div>
				
			</div>
			<?php
		}
	}
?>

<?php
	if(isset($_POST['submit'])){
		$mycon = mysqli_connect('localhost','root','','verse');
		mysqli_select_db($mycon,'verse');
		$q  = $_POST['search'];
		$query = "SELECT * FROM `verse` WHERE `firstname`= '$q'";
		$res = mysqli_query($mycon,$query);
		$b = mysqli_num_rows($res);
		if($b == 0){
			echo "<b>No such Person</b>";
		}
		else{
			echo "<b>OK</b>";
		}
		mysqli_close($mycon);
	}
?>