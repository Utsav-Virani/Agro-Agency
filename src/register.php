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
    <title>Register</title>

    <style>
        body {
            background: linear-gradient(rgba(0, 0, 0, 0.7),
                    rgba(0, 0, 0, 0.7)),
                url("http://127.0.0.1/Agro-Agency/img/6.jpg")center/cover fixed;
        }

        #un,
        #name,
        #pw,
        #email,
        #pwconf {
            opacity: 0.6;
            width: 300px;
            font-family: comfortaa;
            /* font-weight: bold; */
        }

        lable {
            font-family: comfortaa;
            font-weight: bold;
        }

        @font-face {
            font-family: comfortaa;
            src: url("http://127.0.0.1/src/Fonts/Comfortaa/Comfortaa-VariableFont_wght.ttf");
        }

        @font-face {
            font-family: honey;
            src: url("http://127.0.0.1/src/Fonts/Simonetta/Simonetta-Black.ttf");
        }

        @font-face {
            font-family: odibeeSans;
            src: url("http://127.0.0.1/src/Fonts/OdibeeSans/OdibeeSans-Regular.ttf");
        }

        @font-face {
            font-family: pacifico;
            src: url("http://127.0.0.1/src/Fonts/Pacifico/Pacifico-Regular.ttf");
        }

        @font-face {
            font-family: simonetta;
            src: url("http://127.0.0.1/src/Fonts/Simonetta/Simonetta-Regular.ttf");
        }

        .abtFnt {
            z-index: 1;
            font-size: 40px;
            color: white;
        }

        .ftFnt {
            z-index: 1;
            padding-top: 120px;
            font-size: 16px;
            color: white;
        }

        .fotData {
            margin-top: 80px;
            font-family: comfortaa;
            background: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5));
            /* url("http://127.0.0.1/Agro-Agency/img/bg-img/3.jpg"); */
            height: 400px;
            width: 100%;

            /* filter: brightness(50%); */
        }
    </style>

    <script>
        function valid() {
            var email = document.getElementById("email").value;
            var passRe = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (passRe.test(email)) {
                if (document.getElementById("pw").value == document.getElementById("pwconf").value) {
                    return true;

                }
                else{
                    return false;
                }
            } else {
                // $('.pwderr').context("asd");
                return false;

            }
        }
    </script>

</head>

<body>
    <div class="g1" style="position: absolute;top: 30px;left:20px;">
        <center>
            <img src="http://127.0.0.1/Agro-Agency/img/core-img/tractor.png" alt="" style="height: 100px;">
            <p class="mt-2" style="font-family: comfortaa;font-size: 30px;color: #6ab04c">AGRO AGENCY</p>
        </center>
    </div>
    <div style="margin-top: 170px;">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div>
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                        <div class="form-group">
                            <lable for="name" style="color: #6ab04c">Full-Name :</lable>
                            <input type="text" id="name" required autocomplete="off" name="name" class="form-control" placeholder="Full-Name">
                            <div id="nameError"></div>
                        </div>
                        <div class="form-group">
                            <lable for="un" style="color: #6ab04c">User-Name :</lable>
                            <input type="text" id="un" required autocomplete="off" name="un" class="form-control" placeholder="User-Name">
                            <div class="unError"></div>
                        </div>
                        <div class="form-group">
                            <lable for="email" style="color: #6ab04c">E-Mail :</lable>
                            <input type="email" id="email" required autocomplete="off" name="email" class="form-control" placeholder="E-Mail">
                            <div class="unError"></div>
                        </div>
                        <div class="form-group">
                            <lable for="pw" style="color: #6ab04c">Password :</lable>
                            <input type="password" id="pw" required autocomplete="off" name="pass" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <lable for="pw" style="color: #6ab04c">Conform Password :</lable>
                            <input type="password" id="pwconf" required autocomplete="off" name="passConf" class="form-control" placeholder="Conform Password">
                            <div class="pwError"></div>
                        </div>
                        <div class="form-group justify-content-center d-flex" style="font-family: comfortaa;font-size: 16px;">
                            <button type="submit" class="btn" onclick="return valid()" style="color: #6ab04c;">
                                <i class="fa fa-sign-in fa-2x" style="color: #6ab04c;" aria-hidden="true"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="conainer">
            <div class="d-flex justify-content-center align-items-center">
                <div>
                    <form action="login.php">
                        <button class="btn btn-link " style="color: #f0932b;font-size: 20px;font-family: honey">Allready a member ? LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="fotData">
        <div class="container ftFnt d-flex justify-content-center">
            <div class="row">
                <div class="col-5"></div>
                <div class="col-2"></div>
                <div class="col-5">
                    <div class="row" style="font-weight: bolder;font-size: 20px">
                        STAY CONNECTED
                    </div>
                </div>
                <div class="col-5">
                    Our Consultancy is the Trust of Farmers. Whenever you stop in farm just take our suggetion and we give you 100% Solution
                    <div class=" ml-5 my-3 row">
                        Near bus-station, jam-kandorna, Rajkot
                    </div>
                    <div class="ml-5 my-3 row">
                        agro@gmail.com
                    </div>
                    <div class="ml-5 my-3 row">
                        +91 02824271229
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-5 pl-5 my-4">
                    <div class="row">
                        Facebook
                    </div>
                    <div class="row my-4">
                        Instagram
                    </div>
                    <div class="row my-4">
                        Twitter
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
<?php
$nameError = null;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $con = new mysqli('127.0.0.1', 'agro', 'agro', 'agro');
    if (mysqli_connect_errno()) {
        // echo "Faield to connect to MySql : " . mysqli_connect_error();
    }
    $query = "SELECT * FROM user";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        if ($_POST['name'] == $row['name']) {
            $nameError = 'Name Already Exists';
?>
            <script>
                alert("<?php echo $nameError ?>");
            </script>
        <?php
            return;
        }
        if ($_POST['un'] == $row['uname']) {
            $unameError = 'User-Name Already Exists';
        ?>
            <script>
                alert("<?php echo $unameError ?>");
                exit;
            </script>
        <?php
            return;
        }


        if ($_POST['email'] == $row['email']) {
            $emailError = 'E-mail Name Already Exists';

        ?>
            <script>
                alert("<?php echo $emailError ?>");
                exit;
            </script>
<?php
            return;
        }
    }
    $name = $_POST['name'];
    $uname = $_POST['un'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

    $insertQ = "INSERT INTO user(name,uname,email,pass) VALUES ('$name','$uname','$email','$pass')";
    // echo $insertQ;
    if (mysqli_query($con, $insertQ)) {
        // header('Location: login.php');
        echo '<script>window.location.href = "login.php";</script>';
    } else {
        echo mysqli_error($con);
    }
}

?>

</html>