<!doctype html>
<html lang="en">
  <head>
    <title>PHP Restaurant - Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Restaurant/style/register.css">
  </head>
  <body>
  <?php 
    include 'navbar.php';
    include 'dbcon.php';
    if(isset($_POST['submit']))
    {
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $repassword = mysqli_real_escape_string($con,$_POST['repassword']);
      $gender = mysqli_escape_string($con,$_POST['gender']);
      $dob = date('y-m-d', strtotime($_POST['date']));

      $usernamequery = "select * from user where username='$username'";
      $query = mysqli_query($con,$usernamequery);

      $unamecount = mysqli_num_rows($query);

      if($unamecount>0)
      {
        ?>
          <script>
          alert("Username has been Taken!");
          </script>
        <?php
      }
      else
      {
        if($password === $repassword)
        {
          $insetquery = "insert into user(name, username, email, password, repassword, gender, dob) values('$name','$username','$email','$password','$repassword', '$gender', '$dob')";

          $iquery = mysqli_query($con, $insetquery);
          if($con)
              {
                  ?>
                  <script>
                      alert("Bingo! Registration complete! Go to Login Page");
                      </script>
                      <?php
              }
              else
              {
                  ?>
                  <script>
                      alert("Something Wrong! DO it again. Thank you");
                      </script>
                      <?php
              }
        }else{
          echo "Password are not matching!";
        }
      }
    }
  ?>


   <div class="content">
      <h1>Registration</h1>
        <form method="POST" action="">
        <div class="text_field">
            <input type="text" name="name" required>
            <span></span>
            <label>Full Name</label>
          </div>
          <div class="text_field">
            <input type="text" name="username" required>
            <span></span>
            <label>Username</label>
          </div>
          <div class="text_field">
            <input type="email" name="email" required>
            <span></span>
            <label>Email</label>
          </div>
          <div class="text_field">
            <input type="password" name="password" required>
            <span></span>
            <label>Password</label>
          </div>
          <div class="text_field">
            <input type="password" name="repassword" required>
            <span></span>
            <label>Confirm Password</label>
          </div>
          <div class="text_field">
            <select name="gender" required>
              <option value="">-- Gender --</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="text_field">
            <input type="date" name="date" placeholder="Date of Birth" required>
            <span></span>
          </div>
          <input type="submit" name="submit" value="Registration">
          <div class="signup">
            Already Have Account? <a class="forgetpass" href="index.php">Login</a>
          </div>
        </form>
    </div>
      
  </body>
</html>