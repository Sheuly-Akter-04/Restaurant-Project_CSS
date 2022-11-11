<!doctype html>
<html lang="en">
  <head>
    <title>ADD ADMIN</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../Restaurant/style/addsupplier.css">
  </head>
  <body>
  <?php 
    include 'dbcon.php';
    if(isset($_POST['submit']))
    {
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $phone = mysqli_real_escape_string($con,$_POST['phone']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $address = mysqli_real_escape_string($con,$_POST['address']);

      $usernamequery = "select * from supplier where username='$username'";
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
          $insetquery = "insert into supplier(name, username, phone, email, address) values('$name','$username','$phone','$email','$address')";

          $iquery = mysqli_query($con, $insetquery);
          if($con)
              {
                  ?>
                  <script>
                      alert("Bingo! Supplier added");
                      </script>
                      <?php
                      header('location:supplier.php');
              }
              else
              {
                  ?>
                  <script>
                      alert("Something Wrong! DO it again. Thank you");
                      </script>
                      <?php
              }
        }
      }
  ?>


   <div class="content">
      <h1>Add Supplier</h1>
        <form method="POST" action="">
        <div class="text_field">
            <input type="text" name="name" required>
            <span></span>
            <label>Full Name</label>
          </div>
          <div class="text_field">
            <input type="text" name="username" required>
            <span></span>
            <label>User Name</label>
          </div>
          <div class="text_field">
            <input type="text" name="phone" required>
            <span></span>
            <label>Phone Number</label>
          </div>
          <div class="text_field">
            <input type="email" name="email" required>
            <span></span>
            <label>Email</label>
          </div>
          <div class="text_field">
            <input type="text" name="address" required>
            <span></span>
            <label>Address</label>
          </div>
          <input type="submit" name="submit" value="Add Supplier">
          <div class="signup">
          </div>
        </form>
    </div>
      
  </body>
</html>