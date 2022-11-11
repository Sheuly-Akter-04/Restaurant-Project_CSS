<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Supplier Information Update</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Restaurant/style/update.css">
  </head>
  <body>
   <div class="content">
      <h1>Update Information</h1>
        <form method="POST" action="">

        <?php

            include 'dbcon.php';

            $id = $_GET['userid'];
            $selectquery = "select * from supplier where id='$id'";
            $newquery = mysqli_query($con,$selectquery);
            $result = mysqli_fetch_assoc($newquery);
        
            if(isset($_POST['submit']))
            {
            
            $id = $_GET['userid'];
            $name = mysqli_real_escape_string($con,$_POST['name']);
            $username = mysqli_real_escape_string($con,$_POST['username']);
            $email = mysqli_real_escape_string($con,$_POST['email']);
            $phone = mysqli_real_escape_string($con,$_POST['phone']);
            $address = mysqli_real_escape_string($con,$_POST['address']);

            $updatequery = "update supplier set id=$id, name='$name', username='$username', email='$email', phone='$phone', address='$address'   where id=$id";
            $query = mysqli_query($con,$updatequery);
            
            if($query)
            {
                ?>
                    <script>
                        alert('Update Complete!');
                    </script>
                <?php
                header('location:supplier.php');
            }
            else
            {
                ?>
                    <script>
                        alert('Update Incomplete! DO it Again');
                    </script>
                <?php
            }

            }
        ?>

        <div class="text_field">
            <input type="text" name="id" value="User ID: <?php echo $result['id'] ?>" disabled>
            <span></span>
          </div>
        <div class="text_field">
            <input type="text" name="name" value="<?php echo $result['name'] ?>">
            <span></span>
            <label>Full Name</label>
          </div>
          <div class="text_field">
            <input type="text" name="username" value="<?php echo $result['username'] ?>">
            <span></span>
            <label>User Name</label>
          </div>
          <div class="text_field">
            <input type="email" name="email" value="<?php echo $result['email'] ?>">
            <span></span>
            <label>Email</label>
          </div>
          <div class="text_field">
            <input type="text" name="phone" value="<?php echo $result['phone'] ?>">
            <label>Phone</label>
            <span></span>
            
          </div>
          <div class="text_field">
            <input type="text" name="address" value="<?php echo $result['address'] ?>">
            <label>Address</label>
            <span></span>
          </div>
          <input type="submit" name="submit" value="Update">
          <div class="signup">
          </div>
        </form>
    </div>
      
  </body>
</html>