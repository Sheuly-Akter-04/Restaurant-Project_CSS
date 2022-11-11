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
    <link rel="stylesheet" href="../Restaurant/style/login.css">
  </head>
  <body>
  <?php 
    include 'navbar.php';
  ?>
    <?php
    
      include 'dbcon.php';
      if(isset($_POST['submit']))
      {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username_search = "select * from user where username='$username'";
        $query = mysqli_query($con,$username_search);

        $username_count = mysqli_num_rows($query);

        if($username_count)
        {
          $username_pass = mysqli_fetch_assoc($query);

          $db_pass = $username_pass['password'];
          
          $_SESSION['name'] = $username_pass['name'];
          $_SESSION['userid'] = $username_pass['userid'];
           
          if($db_pass)
          {
            ?>
                  <script>
                      alert("Login Complete!");
                      </script>
                      <?php
                      header('location:dashboard.php');
          }
          else
          {
             ?>
                  <script>
                      alert("Wrong password");
                      </script>
                      <?php
          }

        }
        else
        {
          ?>
                  <script>
                      alert("Invalid Username!");
                      </script>
                      <?php
        }
      }

    ?>

   <div class="content">
      <h1>Login</h1>
        <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
          <div class="text_field">
            <input type="text" name="username" required>
            <span></span>
            <label>Username</label>
          </div>
          <div class="text_field">
            <input type="password" name="password" required>
            <span></span>
            <label>Password</label>
          </div>
          <div class="pass">
            <a class="forgetpass" href="forgetpass.php">Forget Password?</a>
          </div>
          <input type="submit" name="submit" value="Login">
        </form>
    </div>
      
  </body>
</html>