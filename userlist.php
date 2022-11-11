<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <center>
        <table border="1">
            <thead>
                <tr>
                    <td align="center"> User ID </td>
                    <td align="center"> Full Name </td>
                    <td align="center"> User ID </td>
                    <td align="center"> Email </td>
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
                            <td><a href="update.php?userid=<?php echo $res['userid'] ?>"><input type="button" value="Edit"></a></td>
                            <td><a href="delete.php"><input type="button" value="Delete"></a></td>
                        </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>


    </center>

</body>
</html>