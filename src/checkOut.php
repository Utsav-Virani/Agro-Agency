<?php

//@ob_start();
session_start();

if (!isset($_SESSION['valid'])) {
    echo '<script>window.location.href = "login.php";</script>';
} else {
    $con = new mysqli('127.0.0.1', 'agro', 'agro', 'agro');
    if (mysqli_connect_errno()) {
        // echo "Faield to connect to MySql : " . mysqli_connect_error();
    }
    $query = "SELECT * FROM user where id = " . $_SESSION['user_id'];
    // echo $query;
    // die;
    $result = mysqli_query($con, $query);

    $name = "";
    $email = "";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $name = $row['name'];
        $email = $row['email'];
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://127.0.0.1/src/FAFA/css/all.css">
        <link rel="stylesheet" href="http://127.0.0.1/src/FAFA/css/fontawesome.min.css">
        <link rel="stylesheet" href="http://127.0.0.1/src/FAFA/css/fontawesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://127.0.0.1/src/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>Check Out</title>

        <style>
            .hdr {
                margin: 0px;
                height: 80px;
            }

            .abtFnt {
                z-index: 1;
                padding-top: 120px;
                font-size: 40px;
                color: white;
            }

            .ftFnt {
                z-index: 1;
                padding-top: 120px;
                font-size: 16px;
                color: white;
            }

            .imgAbt {
                margin-top: 80px;
                background: linear-gradient(rgba(0, 0, 0, 0.6),
                        rgba(0, 0, 0, 0.7)),
                    url("http://127.0.0.1/Agro-Agency/img/bg-img/18.jpg") fixed;
                height: 300px;
                width: 100%;
                font-family: Comfortaa;
                /* filter: brightness(50%); */
            }

            .fotData {
                margin-top: 80px;
                background: linear-gradient(rgba(0, 0, 0, 0.5),
                        rgba(0, 0, 0, 0.5)),
                    url("http://127.0.0.1/Agro-Agency/img/bg-img/3.jpg") fixed;
                height: 400px;
                width: 100%;
                /* filter: brightness(50%); */
            }

            @font-face {
                font-family: Comfortaa;
                src: url("http://127.0.0.1/src/Fonts/Comfortaa-VariableFont_wght.ttf");
            }
        </style>
        <script>
            function colorcod(ele) {
                ele.style.color = "green";
                document.getElementById('debCls').style.color = 'black';
                document.getElementsByName('pmode').value = "cod";
                // alert(document.getElementById('cod').value);
            }

            function colordeb(ele) {
                ele.style.color = "green";
                document.getElementById('codCls').style.color = 'black';
                document.getElementsByName('pmode').value = "debit";
                // alert(document.getElementById('cod').value);
            }

            function valid() {
                var regexp = /^[0-9]{10}$/;
                var mno = document.getElementById("mno").value;
                if (regexp.test(mno)) {
                    if ((document.getElementById('codCls').style.color == 'green') || (document.getElementById('debCls').style.color == 'green')) {
                        alert(document.getElementsByName('pmode').value);
                        return true;
                    } else {
                        alert("Plese select Payment Mode");
                        return false;
                    }
                } else {
                    alert("Plese enter valid mobile No.");
                    return false;
                }
            }
        </script>

    </head>

    <body>

        <header class="header-area " class="hdr">
            <nav class="navbar navbar-inverse navbar-expand-md navbar-expand-sm fixed-top bg-light navbar-light">
                <div class="navbar-header" style="margin: 0px;height: 80px">
                    <a class="navbar-brand" style="width: 100%" href="home.php">
                        <img src="http://127.0.0.1/Agro-Agency/img/core-img/tractor.png" style="height: 50px;" class="ml-5" alt="">
                    </a>
                </div>
                <div class="links">
                    <ul class="navbar-nav" style="position: absolute;right: 50px;bottom: 25px">
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 1.3em" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 1.3em" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 1.3em" href="companies.php">Companies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="font-size: 1.3em" href="logout.php">logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="imgAbt">
            <div class="abtFnt d-flex justify-content-center">
                Thenk You For Shopping
            </div>
        </div>



        <div class="container" style="font-family: Comfortaa;margin-top: 50px;">
            <div class="d-flex align-items-center">
                <form action="" method="post">
                    <div class="form-group">
                        <lable for="name" style="color: #6ab04c">Full-Name :</lable>
                        <input type="text" id="name" required autocomplete="off" style="width: 300px;" value="<?php echo $name ?>" name="name" class="form-control" placeholder="Full-Name">
                    </div>
                    <div class="form-group">
                        <lable for="email" style="color: #6ab04c">E-mail :</lable>
                        <input type="email" id="email" required autocomplete="off" style="width: 300px;" value="<?php echo $email ?>" name="email" class="form-control" placeholder="Full-Name">
                    </div>
                    <div class="form-group">
                        <lable for="mno" style="color: #6ab04c">Mobile No. :</lable>
                        <input type="number" id="mno" autocomplete="off" style="width: 300px;" name="mno" class="form-control" placeholder="Mobile No.">
                    </div>
                    <div class="form-group">
                        <lable for="add" style="color: #6ab04c">Address :</lable>
                        <textarea name="address" id="add" cols="25" rows="3 " class="form-control" placeholder="Address"></textarea>
                    </div>
                    <div class="form-group">
                        <lable style="color: #6ab04c">Payment Mode :</lable>
                        <!-- <div id="codCls" onclick="colorcod(this)">
                            <input type="radio" id="cod" style="width: 300px; display:none;" class="form-control" value="cod" name="pmode">
                            <i class="far fa-money-bill-alt" for="cod"></i> COD
                        </div>
                        <div id="debCls" onclick="colordeb(this)">
                            <input type="radio" id="cod" style="width: 300px; display:none;" class="form-control" name="pmode">
                            <i class="fas fa-credit-card" for="cod"></i> Debit Card
                        </div> -->
                        <div>
                            <div class="custom-control custom-radio custom-radio">
                                <input type="radio" class="custom-control-input" id="customRadio1" value="cod" name="pmode">
                                <label class="custom-control-label" for="customRadio1">Cash On Delivery</label>
                            </div>
                            <div class="custom-control custom-radio custom-radio">
                                <input type="radio" class="custom-control-input" id="customRadio2" value="debit" name="pmode">
                                <label class="custom-control-label" for="customRadio2">Debit Card</label>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="custom-control custom-checkbox">
                        <div>
                            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                            <label class="custom-control-label" for="customCheck">agree the terms and conditions</label>
                        </div>
                    </div> -->
                    <div class="form-group justify-content-center d-flex" style="font-family: comfortaa;font-size: 16px;">
                        <button type="submit" onclick="return valid()" class="btn btn-light" style="color: #6ab04c;">check out
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            // echo $_POST['name'];
            // echo $_POST['mno'];
            // echo $_POST['email'];
            // echo $_POST['address'] . "\n";
            // echo $_POST['pmode'];

            $proquery = "select * from tbl_cart WHERE id = " . $_SESSION['user_id'];

            $proresult = mysqli_query($con, $proquery);
            while ($row = mysqli_fetch_object($proresult)) {

                $query2 = "INSERT INTO bye_data VALUES(0," . $_SESSION['user_id'] . ",'" . $_POST['mno'] . "','" . $_POST['address'] . "','" . $_POST['pmode'] . "','" . $row->product_id . "')";
                if (mysqli_query($con, $query2)) {
                    $insertQ = "DELETE FROM tbl_cart WHERE product_id = " .$row->product_id;
                    if (mysqli_query($con, $insertQ)) {
                        echo '<script>window.location.href = "bill.php";</script>';
                    } else {
                        echo mysqli_error($con);
                    }
                } else {
                }
            }
        }

        ?>



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

    </html>


<?php  } ?>