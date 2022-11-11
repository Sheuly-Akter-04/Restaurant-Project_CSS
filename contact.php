<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../Restaurant/style/contact.css">
    <title>Conatct US</title>
</head>
<body>
    <?php
        include 'navbar.php'
    ?>

    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui numquam fuga repudiandae maiores rerum voluptates, maxime eligendi est necessitatibus deserunt nesciunt architecto repellendus sunt impedit dolorem explicabo esse, ullam aperiam.
                Commodi repudiandae vel doloremque consequuntur unde ex ipsa natus fugit nobis atque saepe optio dolorem sunt, nulla sit tempore, labore culpa harum modi voluptatum iste cumque.</p>                
        </div>
        <div class="context">
            <div class="contactinfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-location-arrow" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Bashundhara R/A<br>Airpor Road<br>Dhaka</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>017XXXXXXXX</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>phprestaurant@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form>
                    <h2>Send Message</h2>
                    <div class="inputbox">
                        <input type="text" name="" required>
                        <span>Full Name</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="" required>
                        <span>Your Email</span>
                    </div>
                    <div class="inputbox">
                        <textarea required></textarea>
                        <span>Type your Meesage... </span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="" value="send">
                    </div>
                </form>
            </div>
        </div>
    </section>

</body>
</html>