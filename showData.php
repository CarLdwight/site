
<?php

include 'dbcon.php';

		$k=$_POST['id'];
		$j=$_POST['sitee'];
		$k=trim($k);
		$sql3 = "SELECT * FROM history where Year ='{$k}' && site_id = $j  ";
		$res = mysqli_query($dbconn,$sql3);


		$sql4 = "SELECT * FROM history where Year ='{$k}' && site_id = ''  ";
		$record=" <div style='color:red; float:right; font-weight:600' > Sorry No record was not found on this Year! </div> ";

		while($rows=mysqli_fetch_array($res)){

		

?>



		<tr>
			<td><?php echo $rows['substrate1'] ?> </td>
			<td><?php echo $rows['pct1'] ?>%</td>
		</tr>
		<tr>
			<td><?php echo $rows['substrate2'] ?> </td>
			<td><?php echo $rows['pct2'] ?>%</td>
		</tr>
		<tr>
			<td><?php echo $rows['substrate3'] ?> </td>
			<td><?php echo $rows['pct3'] ?>%</td>
		</tr>
		<tr>
			<td><?php echo $rows['substrate4'] ?> </td>
			<td><?php echo $rows['pct4'] ?>%</td>
		</tr>
		<tr>
			<td><?php echo $rows['substrate5'] ?> </td>
			<td><?php echo $rows['pct5'] ?>%</td>
		</tr>
		<tr>
			<td><?php echo $rows['substrate6'] ?> </td>
			<td><?php echo $rows['pct6'] ?>%</td>
		</tr>
		<tr>
			<td><?php echo $rows['substrate7'] ?> </td>
			<td><?php echo $rows['pct7'] ?>%</td>
		</tr>
		<tr>
			<td><?php echo $rows['substrate8'] ?> </td>
			<td><?php echo $rows['pct8'] ?>%</td>
		</tr>
		

<?php
		}

	if ($sql3==$sql4) {
		echo $sql3;	
	    }else{
			echo $record;
		}

?>