<?php

//@ob_start();
session_start();

if (!isset($_SESSION['valid'])) {
    echo '<script>window.location.href = "login.php";</script>';
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://127.0.0.1/src/FAFA/css/all.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://127.0.0.1/src/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>Cart</title>
    </head>

    <body>

        <?php

        // $query = "select * from tbl_product WHERE product_id =" . base64_decode($_GET['id']);
        $con = new mysqli('127.0.0.1', 'agro', 'agro', 'agro');
        if (mysqli_connect_errno()) {
            echo "Faield to connect to MySql : " . mysqli_connect_error();
        }
        // $result = mysqli_query($con, $query);

        // while ($row = mysqli_fetch_object($result)) {

            $insertQ = "DELETE FROM tbl_cart WHERE product_id = ".base64_decode($_GET['id']);
            // echo $insertQ;die;
            // echo $insertQ;
            if (mysqli_query($con, $insertQ)) {
                echo '<script>window.location.href = "viewCart.php";</script>';
            } else {
                echo mysqli_error($con);
            }


        ?>
    </body>

    </html>

<?php
}
?>