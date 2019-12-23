<?php 
	$mycon = mysqli_connect('localhost','root','','verse');
	$query = "SELECT * FROM `verse_images`";
	$res = mysqli_query($mycon,$query);
	while($row = mysqli_fetch_array($res)){
		if($row['id']==1){
			$user = $row['image'];
		}
		if($row['id']==2){
			$users = $row['image'];
		}
		if($row['id']==3){
			$file = $row['image'];
		}
		if($row['id']==4){
			$music_player = $row['image'];
		}
		if($row['id']==5){
			$photo_camera = $row['image'];
		}
		if($row['id']==6){
			$search = $row['image'];
		}
		if($row['id']==7){
			$settings = $row['image'];
		}
		if($row['id']==8){
			$video_player = $row['image'];
		}
		if($row['id'] == 9){
			$exit = $row['image'];
		}
	}

	if(isset($_REQUEST['submit'])){
		setcookie('user',"",time() - 3600*24*30,"/");
		echo '<script type="text/javascript">location.replace("FirstPage.php");</script>';
	}

?>
<div class="LeftPart">
	<form class="Function">
		<a href="index.php"><img src="<?php echo $user; ?>"> My Profile</a>
		<a href=""><img src="<?php echo $music_player; ?>"> Music </a>
		<a href="#"><img src="<?php echo $video_player; ?>"> Video </a>
		<a href="index.php?menu=photo"><img src="<?php echo $photo_camera; ?>"> Photo </a>
		<a href="index.php?menu=search"><img src="<?php echo $search; ?>"> Search </a>
		<a href="index.php?menu=contacts"><img src="<?php echo $users; ?>"> Contacts </a>
		<a href="index.php?menu=aboutUs"><img src="<?php echo $file; ?>"> About us </a>
		<a href="index.php?menu=settings"><img src="<?php echo $settings; ?>"> Settings </a>
		<button class="button" type="submit" name="submit"><img src="<?php echo $exit; ?>"> Exit</button>
	</form>
</div>

