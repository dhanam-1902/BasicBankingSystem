<!DOCTYPE html>
<html>
<head>
	     <title>Simple Banking Website</title>
	     <link rel="stylesheet" href="style.css">
             <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body style="background-image:url('https://workingnation.com/wp-content/uploads/2020/02/shutterstock_11678658731.jpg');background-size:cover;">
      <div  style="background-color:Darkgreen;" class="topnav" >
                    <a class="active" href="index.php">HOME</a>
                    <div class="topnav-right">
                            <a class="active" href="transferdetails.php">TRANSFER HISTORY</a>
                            <a class="active" href="viewusers.php">VIEW USERS</a>
                    </div>
      </div>
  
<h1 style="color:Darkgreen;text-align:center;">SIMPLE   <br><br>BANKING   SYSTEM</h1>
        <br><br>

        <h2 style="text-align:left">To View The Details Of The Users :
           <div  class="button">
              <a class="text" href="viewusers.php">VIEW USERS</a>
           </div></h2>

        <br><br>

        <h2 style="text-align:left">To Do The Transaction Process:
            <div class="button" >
              <a class="text" href="transfer.php">CREDIT TRANSFER</a>
            </div></h2>

</body>
<style>
    .button a {
         color:Darkblue; 
         width: 100%;
     }
    .button a:hover {
        background-color:green;
        color: white;
      }
    .topnav a:hover {
        background-color:black;
        color:lightgreen;
    }
</style>
</html>