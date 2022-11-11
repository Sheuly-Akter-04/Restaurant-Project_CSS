<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Restaurant/style/dashboard.css">
  <title>Document</title>
</head>
<body>
<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <h2></h2>
        <ul>
            <li><a href="dashboard.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="myprofile.php"><i class="fas fa-user"></i>My Profile</a></li>
            <li><a href="responsibilities.php"><i class="fas fa-clipboard"></i>Manager Responsibilities</a></li>
            <li><a href="adminlist.php"><i class="fas fa-info"></i>Staff Information</a></li>
            <li><a href="supplier.php"><i class="fas fa-info"></i>Supplier Information</a></li>
            <li><a href="delivery.php"><i class="fas fa-info"></i>Delivery Information</a></li>
            <li><a href="order.php"><i class="fas fa-list"></i>Order List</a></li>
            <li><a href="accounts.php"><i class="fas fa-credit-card"></i>Accounts</a></li>
            <li><a href="index.php"><i class="fas fa-home"></i>Log Out</a></li>
        </ul> 
    </div>
    <div class="main_content">
        <center><div class="header">Welcome! <b><?php echo $_SESSION['name']; ?></b> and ID: <b><?php echo $_SESSION['userid'];?></b> Have a nice day.</div> </center>
        <div class="info">
      </div>
    </div>
</div>
</body>
</html>