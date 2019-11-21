  
<html>

  <head>
	<style>
.car{
		  display:flex;
		  border:1px solid black;
		  border-radius:5px;
		  width:250px;
		  padding:10px;
      margin: 10px;
		}
		.title{
		  font-size:16px;
		  font-weight:bold;
		}
		.attributes .row{
		  display:flex;
		}
		.attributes .row div{
		  width:50%;
		}
		.attributes .row .name{
		  font-weight:bold;
		}
		.car img{
		  margin-right:10px;
		}
	</style>
  </head>

  <body>
    <div class="cars">
    <?php
      $mycon = mysqli_connect('localhost','root','','web_prog');
      mysqli_select_db($mycon,'web_prog');
      $query = "SELECT * FROM `w11_task1_ft`";
      $res = mysqli_query($mycon,$query);
      while($row = mysqli_fetch_array($res)){
        $image = $row['image'];
        $maker = $row['maker'];
        $model = $row['model'];
        $price = $row['price'];
        $year = $row['year'];
        $car = "<div class='car'>
                  <img width='100' height='60' src='$image'/>
	                <div class='right'>
		                <div class='title'>$maker $model</div>
		                <div class='attributes'>
		                  <div class='row'><div class='name'>Year:</div><div>$year</div></div>
		                  <div class='row'><div class='name'>Price:</div><div>$price$</div></div>            
		                </div>
		              </div>
                </div>";
        echo $car;
      }
      mysqli_close($mycon);
    ?>
    </div>
  </body>

</html>
