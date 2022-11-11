<?php
    session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>PHP Restaurant - Login</title>
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
            $selectquery = "select * from user where userid='$id'";
            $newquery = mysqli_query($con,$selectquery);
            $result = mysqli_fetch_assoc($newquery);
        
            if(isset($_POST['submit']))
            {
            
            $id = $_GET['userid'];
            $name = mysqli_real_escape_string($con,$_POST['name']);
            $username = mysqli_real_escape_string($con,$_POST['username']);
            $email = mysqli_real_escape_string($con,$_POST['email']);

            $updatequery = "delete from user where userid=$id";
            $query = mysqli_query($con,$updatequery);
            
            if($query)
            {
                ?>
                    <script>
                        alert('Update Complete!');
                    </script>
                <?php
                header('location:adminlist.php');
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
            <input type="text" name="userid" value="User ID: <?php echo $result['userid'] ?>" disabled>
            <span></span>
          </div>
        <div class="text_field">
            <input type="text" name="name" value="<?php echo $result['name'] ?>" disabled>
            <span></span>
          </div>
          <div class="text_field">
            <input type="text" name="username" value="<?php echo $result['username'] ?>" disabled>
            <span></span>
          </div>
          <div class="text_field">
            <input type="email" name="email" value="<?php echo $result['email'] ?>" disabled>
            <span></span>
          </div>
          <div class="text_field">
            <input type="password" name="password" value="<?php echo $result['password'] ?>" disabled>
            <span></span>
            
          </div>
          <div class="text_field">
            <input type="password" name="password" value="<?php echo $result['repassword'] ?>" disabled>
            <span></span>
           
          </div>
          <input type="submit" name="submit" value="Delete">
          <div class="signup">
          </div>
        </form>
    </div>
      
  </body>
</html>