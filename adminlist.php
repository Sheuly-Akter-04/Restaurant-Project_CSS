<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Restaurant/style/adminlist.css">
  <title>Admin List</title>
</head>
<style type="text/css">
table, th, td {
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>

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
        <div class="header"><h3>This is all Staff Information.</h3></div>
        <div class="info">
            <a href="addadmin.php"><input type="submit" name="submit" value="Add company Staff"></a>
            
        </div>
        <center>
            <table class="content-table">
                <thead>
                    <tr>
                        <td align="center"> User ID </td>
                        <td align="center"> Full Name </td>
                        <td align="center"> User Name </td>
                        <td align="center"> Email </td>
                        <td align="center"> Gender </td>
                        <td align="center"> Date Of Birth </td>
                        <td colspan="2" align="center"> Action </td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include 'dbcon.php';

                        $selectquery = "select * from user";
                        $query = mysqli_query($con,$selectquery);
                        $nums = mysqli_num_rows($query);

                        while($res = mysqli_fetch_array($query))
                        {
                            ?>
                            <tr>
                                <td><?php echo $res['userid'] ?></td>
                                <td><?php echo $res['name'] ?></td>
                                <td><?php echo $res['username'] ?></td>
                                <td><?php echo $res['email'] ?></td>
                                <td><?php echo $res['gender'] ?></td>
                                <td><?php echo $res['dob'] ?></td>
                                <td><a href="updateadmin.php?userid=<?php echo $res['userid'] ?>"><input type="button" value="Edit"></a></td>
                                <td><a href="deleteadmin.php?userid=<?php echo $res['userid'] ?>"><input type="button" value="Delete"></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>


            </center>
        
      </div>
    </div>
</div>
</body>
</html>