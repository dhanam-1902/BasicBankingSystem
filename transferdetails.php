<!Doctype html>
<html>
<head>
	  <title>Transfer History</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:beige;">
       <div style="background-color:Darkgreen;" class="topnav">
              <a class="active" href="index.php">HOME</a>
          <div class="topnav-right">
              <a class="active" href="transferdetails.php">TRANSFER HISTORY</a>
              <a class="active" href="viewusers.php">VIEW USERS</a>
          </div>
       </div>
 <br> 
<table class="viewusers">
	<h2 style="color:Darkgreen;">TRANSFER HISTORY</h2>   <br><br>
	<tr>
		<th>SENDER</th>
		<th>RECEIVER</th>
		<th>Credit</th>
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "banking");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT * FROM transfer_history";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["from_user"] ."</td><td>".  $row["to_user"] ."</td><td>" .  $row["Credit"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
</table>
<style>
  th{
     background-color:green;
     color:white;
    }
  .topnav a:hover {
      background-color: #272727;
      color:lightgreen;
   }
</style>
</div>	
</body>
</html>