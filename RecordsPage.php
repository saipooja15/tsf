<?php
$servername = "localhost:3307";
$username = "root"; 
$password = ""; 
$dbname = "banking"; 
$conn = new mysqli($servername, $username, $password, $dbname); 
if ($conn->connect_error) { 
  die("Connection failed: " . $conn->connect_error); 
} 
$sql = "SELECT * FROM history" ;
$result = $conn->query($sql);
?>
            
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    
        <style>
        html {
            position: relative;
            min-height: 50%;
        }
             
        body {
               padding-top: 50px;
               font-size:25px;
               padding-bottom: 100px;
               background: #f5fce3;
               background: -webkit-linear-gradient(to right, #f5fce3, #e1e6d6 );
               background: linear-gradient(to right, #f5fce3, #e1e6d6 );
              }
        .container{      
            padding-top:3px;
            display: block;
            margin-top: 10px;
            margin-left: auto;
            margin-right: auto;
            width: 60%; 
        }
            body{
	background-image: url('lg4.jpg');
	background-repeat: no-repeat; 
	background-size: cover;
}
        
            background-color: #e8d7a2;
            position: absolute;
            left: 0;
            bottom: 0;
            height: 100px;
            width: 100%;
            overflow: hidden;
          
        }
    </style>
</head>

<body>
  <!-- navbar -->
  <?php include('navbar.php'); ?>
	<div class="container">
        <h2 style="text-align: center">Transaction History</h2>

       <br>
       <div>
    <table id = "Table">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Payer</th>
                <th>Payer Acc ID</th>
                <th>Payee</th>
                <th>Payee Acc ID</th>
                <th>Amount</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
        
        <?php

    while($row = $result->fetch_assoc()) { 
  ?> 
 <tr>
        <td><?php echo $row['sno']; ?></td>
        <td><?php echo $row['payer']; ?></td>
        <td><?php echo $row['payerAcc']; ?></td>
        <td><?php echo $row['payee']; ?></td>
        <td><?php echo $row['payeeAcc']; ?></td>
        <td><?php echo $row['amount']; ?></td>
        <td><?php echo $row['time']; ?></td>

     
        </tr>
 <?php
    }
  
$conn->close();
?> 
</
</table>
    </div>
</div>
<footer style="text-align: center">
    <p>Designed by: G saipooja</p>
</footer>
<body>

</html>


