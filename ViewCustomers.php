<?php
    $servername = "localhost:3307";
    $username = "root"; 
    $password = ""; 
    $dbname = "banking"; 
    $conn = new mysqli($servername, $username, $password, $dbname); 
    if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
    } 
    //$sql = "SELECT * FROM customerinfo" ;
    $sql = "SELECT * FROM accountdetails" ;
    $result = $conn->query($sql);
?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>    
    <!-- CSS style sheet -->
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<-- <style>
 .container{
	width: 450px;
	padding: 4% 4% 4%;
	margin : auto;
	box-shadow: 10px 10px 5px #888888;
	background-color: #fff;
	text-align: center;
	position:relative;
	top:50px;
	vertical-align: middle;
	background-color: PaleTurquoise;
}
form{
	align-content: center;
	padding:10px;
	margin-top: 15px;
}
input
{
	margin :5px;
}

a{
	color:#f00f53;
	text-decoration: none;
	align-content: right;
}

.button{
	width :150px;
	margin :10px;
	padding:5px;
	font-weight: bold;
	text-align: center;
	background-color: #a30003;
	position:relative;
	right:-100px;
	color:white;
}


body{
	background-image: url('lg9.jpg');
	background-repeat: no-repeat; 
	background-size: cover;
}
    </style> -->
</head>

<body>
  <!-- navbar -->
  <?php include('navbar.php'); ?>
       <div class="container">
            <h2 style="text-align: center">Customer Details</h2>
            <br>                   
            <table id="Table">
                <thead>
                    <tr>
                    <th>S.No.</th>
                    <th>Account No.</th>
                    <th>Name</th>
                    <th>E-Mail</th>
                    <th>Balance</th>  
                    </tr>
                </thead>                     
                <?php
                while($row = $result->fetch_assoc()) { 
                ?> 
                <tr>
                    <td><?php echo $row['sno']; ?></td>
                    <td><?php echo $row['accID']; ?></td>
                    
                    <td ><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['balance']; ?></td>
                    
                </tr>
                <?php
                }
                $conn->close();
                ?> 
            </table>
        </div>
        <footer style="text-align: center">
            
        </footer>
</body>
</html>


