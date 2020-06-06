<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS_BS4_SCSS\login\main.css">
    <link rel="stylesheet" href="http://127.0.0.1/src/FAFA/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="http://127.0.0.1/src/FAFA/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="http://127.0.0.1/src/css/bootstrap.min.css">
    <script src="http://127.0.0.1/src/JQuery/jquery.min.js"></script>
    <title>Login</title>
    <script>
        $(window).ready(function() {
            // alert($(window).height()+ "  :  "+$(window).width());
            $(".cont").css({
                "height": $(window).height(),
                "width": $(window).width(),
            });

            // $(window).bind('resize', function(e) {
            //     this.location.reload(false);
            // });
            function validate() {
                var email = document.getElementById("email").value;
                var pass = document.getElementById("pass").value;
                var passRe = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if (passRe.test(email)) {
                    return true;
                } else {
                    // $('.pwderr').context("asd");
                    return false;

                }
            }
        });
    </script>

    <style>
        .g1 {
            /* background-color: #f6e58d */
            color: #6ab04c;
            font-weight: bold;
            font-family: comfortaa;
            /* background: linear-gradient(rgba(0, 0, 0, 0.7),
                        rgba(0, 0, 0, 0.7)); */

        }

        .g2 {
            display: flex;
            flex-flow: column;
            justify-content: center;
            align-items: center;
            width: 400px;
            /* background-color: #6ab04c; */
        }
    </style>
</head>

<body>
    <div class="bg"></div>
    <div class="g1" style="position: absolute;bottom: 300px;left: 250px">
        <center>
            <img src="http://127.0.0.1/Agro-Agency/img/core-img/tractor.png" alt="" style="height: 100px;">
            <p class="mt-2" style="font-family: comfortaa;font-size: 30px">AGRO AGENCY</p>
        </center>
    </div>
    <p class="display-4" style=" font-family: honey; position: absolute;top: 10px;left: 30%;color: #6ab04c">By Healthy <span>Stay Healthy</span></p>
    <div class=" cont ">
        <div class=" cont container d-flex justify-content-end align-items-center">
            <form class="g2" action="" method="post">
                <div class="form-group">
                    <lable for="un" style="color: #6ab04c">E-Mail :</lable>
                    <input type="text" id="un" required autocomplete="off" name="email" class="form-control" placeholder="E-Mail">
                    <div class="unerr"></div>
                </div>
                <div class="form-group">
                    <lable for="pwd" style="color: #6ab04c">Password:</lable>
                    <input type="password" id="pwd" required name="pass" class="form-control" placeholder="Password">
                    <div class="pwderr"></div>
                </div>
                <div class="form-group justify-content-center d-flex">
                    <button type="submit" class="bt btn btn-light-outline">
                        <i class="fa fa-sign-in fa-2x" style="color: #6ab04c" aria-hidden="true"></i>
                    </button>
                </div>
            </form>
        </div>

        <div class=" container d-flex justify-content-end" style="position: relative;bottom: 270px;">
            <form action="register.php" class="g2">
                <button class="btn btn-link " style="color: #f6e58d;font-size: 17px;font-family: comfortaa">Not Registered yet ?</button>
            </form>
        </div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $con = new mysqli('127.0.0.1', 'agro', 'agro', 'agro');
        if (mysqli_connect_errno()) {
            echo "Faield to connect to MySql : " . mysqli_connect_error();
        }
        $email = $_POST['email'];
        $query = "SELECT * FROM user WHERE email = '$email'";
        $result = mysqli_query($con, $query);
        // echo $query;
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            // echo $_POST['pass']." - ".$row['pass'];
            if (md5($_POST['pass']) == $row['pass']) {
                // echo $row['uname'];
                $_SESSION['valid'] = true;
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['uname'];

                // echo $_SESSION;
                // header('Location: dashboard.php');
                echo '<script>window.location.href = "dashboard.php";</script>';
            }
        }
    }
    ?>

</body>

</html>