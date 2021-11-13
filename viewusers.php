<!Doctype html>
<html>
<head>
	<title>View Users</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
</head>
<body style="background-color:beige">
   <div style="background-color:Darkgreen;"class="topnav">
             <a class="active" href="index.php">HOME</a>
        <div class="topnav-right">
             <a class="active" href="transferdetails.php">TRANSFER HISTORY</a>
             <a class="active" href="viewusers.php">VIEW USERS</a>
        </div>
   </div>  
<br><br>
<table class="viewusers">
	<h2 style="color:Darkgreen;">DETAILS  OF  THE  USERS :</h2>
        <br><br>
	<tr>
                <th>SNO</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>CREDIT</th>
                <th>INFO</th>
		
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "banking");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT s_no,name, email, credit FROM students";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["s_no"] ."</td><td>". $row["name"] ."</td><td>".  $row["email"] ."</td><td>" .  $row["credit"] ."</td>
                        <td><a href='view.php?sn=$row[s_no]&cn=$row[name]&ea=$row[email]&bb=$row[credit] '> View</a></td>
                        </tr>";
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
</body>
</html>