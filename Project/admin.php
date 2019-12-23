<html>
<head>
	<link rel="shortcut icon" href="images/logo1.png" type="image/png">
	<title>VERSE Admin Page</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster|Ranga&display=swap" rel="stylesheet">
</head>
<body>
<?php 
     include ('footer.php');    
     include ('header.php');
?>
<div class="LeftPart">
    <form class="Function">
        <a href="admin.php?menu=main">Main</a>
        <a href="admin.php?menu=users">Users</a>
        <a href="admin.php?menu=photo">Photo</a>
        <a href="admin.php?menu=video">Video</a>
        <a href="admin.php?menu=music">Music</a>
	</form>
</div>
</body>
</html>

<?php 
    if(isset($_REQUEST['menu'])){
        if($_REQUEST['menu'] == 'main'){
            ?>
            <div class="RightPart">
            <div id="piechart"></div>
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Video', 24],
  ['Music', 15],
  ['Photo', 38]
]);
  var options = {'title':'All Information', 'width':550, 'height':400};
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<div class="Info"><b>Photo</b> 38 </div>
<div class="Info"><b>Video</b> 24 </div>
<div class="Info"><b>Music</b> 15 </div>
            </div>
            <?php
        }
        if($_REQUEST['menu'] == 'photo'){
			?>
			<div class="RightPart">
				<div style="font-size: 28px; margin-top: 10px">Photos</div>
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
    if($_REQUEST['menu'] == 'users'){
      ?>
      <div class="RightPart">
				<div style="font-size: 28px; margin-top: 10px">USERS</div>
				<div>
          <?php 
          $mycon = mysqli_connect('localhost','root','','verse');
					mysqli_select_db($mycon,'verse');
          $result = mysqli_query($mycon,"SELECT * FROM `verse`");
          while($row = mysqli_fetch_array($result)){
            $id = "submit[".$row['id']."]";
            $inf = $row['firstname']." ".$row['lastname'];
            $img = $row['profile_img'];
            echo "<div class='admin_inf'><img src='$img' style='width:50px;height:50px'> <div>$inf</div><form action='#'  method='post'><button type='submit' name='$id'>Delete</button></form></div>";
          }
          mysqli_close($mycon);
          ?>
        </div>
			</div>
      <?php
    }
    }

    if(isset($_POST['submit'])){
      $k = key($_POST['submit']);
      $mycon = mysqli_connect('localhost','root','','verse');
			mysqli_select_db($mycon,'verse');
      mysqli_query($mycon,"DELETE FROM `verse` WHERE `id`='$k'");
      mysqli_query($mycon,"DELETE FROM `cookie` WHERE `id_user`='$k'");
      setcookie('user',"",time() - 3600*24*30,"/");
      mysqli_close($mycon);
    }
?>
