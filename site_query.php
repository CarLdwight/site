<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">


<?php
	
	require 'dbcon.php';

	if(ISSET($_POST['submit'])){
		
		$latitude=$_POST['lat'];
		$longitude=$_POST['long'];
		$Name=$_POST['Name'];
		$Year=$_POST['Year'];
		$substrate1=$_POST['substrate1'];
		$substrate2=$_POST['substrate2'];
		$substrate3=$_POST['substrate3'];
		$substrate4=$_POST['substrate4'];
		$substrate5=$_POST['substrate5'];
		$substrate6=$_POST['substrate6'];
		$substrate7=$_POST['substrate7'];
		$substrate8=$_POST['substrate8'];
		$pct1=$_POST['pct1'];
		$pct2=$_POST['pct2'];
		$pct3=$_POST['pct3'];
		$pct4=$_POST['pct4'];
		$pct5=$_POST['pct5'];
		$pct6=$_POST['pct6'];
		$pct7=$_POST['pct7'];
		$pct8=$_POST['pct8'];


	
		$query="INSERT INTO `site` (latitude,longitude,Name,Year,substrate1,substrate2,substrate3,substrate4,substrate5,substrate6,substrate7,substrate8,pct1,pct2,pct3,pct4,pct5,pct6,pct7,pct8) values ('$latitude' ,'$longitude','$Name','$Year','$substrate1','$substrate2','$substrate3','$substrate4','$substrate5','$substrate6','$substrate7','$substrate8','$pct1','$pct2','$pct3','$pct4','$pct5','$pct6','$pct7','$pct8')" or die (mysqli_error());
		
		$result = $dbconn->query($query);
		$id = $dbconn->insert_id;
		//$dbconn->query("INSERT INTO `site`  (location_id,substrate) values ('$id','$substrate') ") or die (mysqli_error());


		$dbconn->query("INSERT INTO `history` (site_id,Name,Year,substrate1,substrate2,substrate3,substrate4,substrate5,substrate6,substrate7,substrate8,pct1,pct2,pct3,pct4,pct5,pct6,pct7,pct8) values ('$id','$Name','$Year','$substrate1','$substrate2','$substrate3','$substrate4','$substrate5','$substrate6','$substrate7','$substrate8','$pct1','$pct2','$pct3','$pct4','$pct5','$pct6','$pct7','$pct8')") or die (mysqli_error());


		echo  '<script>
			    setTimeout(function() {
			        swal({
			            title: "Success!",
			            text: "Data added Successfully",
			            icon: "success",
			            type: "success"
			        }, function() {
			            window.location = "tryindex2.php";
			        });
			    }, 1);
			</script>';

	}
  ?>