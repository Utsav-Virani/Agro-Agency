<?php

//@ob_start();
session_start();

if (!isset($_SESSION['valid'])) {
    echo '<script>window.location.href = "login.php";</script>';
} else {
    $query = "select * from tbl_product";
    $con = new mysqli('127.0.0.1', 'agro', 'agro', 'agro');
    if (mysqli_connect_errno()) {
        echo "Faield to connect to MySql : " . mysqli_connect_error();
    }
    $result = mysqli_query($con, $query);
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
        <title>Products</title>
        <style>
            .imgAbt {
                margin-top: 80px;
                background: linear-gradient(rgba(0, 0, 0, 0.5),
                        rgba(0, 0, 0, 0.5)),
                    url("http://127.0.0.1/Agro-Agency/img/bg-img/18.jpg") fixed;
                height: 300px;
                width: 100%;
                /* filter: brightness(50%); */
            }

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

            .fotData {
                margin-top: 80px;
                background: linear-gradient(rgba(0, 0, 0, 0.5),
                        rgba(0, 0, 0, 0.5)),
                    url("http://127.0.0.1/Agro-Agency/img/bg-img/3.jpg");
                height: 400px;
                width: 100%;
                /* filter: brightness(50%); */
            }

            @font-face {
                font-family: Comfortaa;
                src: url("http://127.0.0.1/src/Fonts/Comfortaa-VariableFont_wght.ttf");
            }

            .img2 {
                width: 100%;
                height: 500px;
                border-radius: 10px;
            }

            .img2fnt {
                font-weight: bold;
                font-family: Arial;
                font-size: 1.2em;
            }

            .centered {
                position: absolute;
                top: 50%;
                left: 50%;
                display: flex;
                justify-content: center;
                align-items: center;
                transform: translate(-50%, -50%);
                visibility: hidden;
                background: rgba(0, 0, 0, 0.5);
                height: 100%;
                width: 100%;
            }

            .cart {
                position: fixed;
                bottom: 30px;
                right: 30px;
                z-index: 100;
                background: rgba(0, 0, 0, 0.9);
                height: 60px !important;
                width: 60px !important;
                display: flex;
                justify-content: center;
                align-items: center;
                color: #80cc17;
                box-shadow: 1px 2px 5px 4px rgba(0, 0, 0, 0.4);
                cursor: pointer;
            }

            a:hover {
                text-decoration: none;
            }
        </style>

        <script>
            function show(i) {
                document.getElementById(`imgtxt${i}`).style.visibility = "visible";
            }

            function hide(i) {
                document.getElementById(`imgtxt${i}`).style.visibility = "hidden";
            }

            function makeItLarge() {
                document.getElementById("cart").style.transform = "scale(1.5, 1.5)";
            }

            function makeItSmall() {
                document.getElementById("cart").style.transform = "scale(1, 1)";

            }

            function navigate() {
                window.location.href = "viewCart.php";
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
                PRODUCTS
            </div>
        </div>
        <div class="container my-5" style="font-size: 19px">
            <center>
                <!-- <div class="material-icons">home</div> -->
                <!-- <a href="home.php"></a> -->
                <i class="fa fa-home"> Home</i>
                <div class="fa fa-angle-right" aria-hidden="true"> Products</div>
            </center>
        </div>

        <div style="border-radius: 50%;padding: 5px;" id="cart" class="cart" onmouseover="makeItLarge()" onmouseout="makeItSmall()" onclick="navigate()">
            <i class="fab fa-opencart fa-2x "></i>
        </div>

        <div class="container d-flex justify-content-around mt-5 ">
            <form action="" method="post">
                <div class="row">
                    <?php $i = 1;
                    while ($row = mysqli_fetch_object($result)) { ?>
                        <div class="col-3 p1" onmouseover="show(<?php echo $i; ?>)" onmouseout="hide(<?php echo $i; ?>)">
                            <div style="display: flex;align-items: center;justify-content: center;">
                                <img src="<?php echo $row->image; ?>" alt="">
                            </div>
                            <div style="display: flex;flex-flow: column;align-items: center;">
                                <p><?php echo $row->name; ?></p>
                                <p>$<?php echo $row->price; ?></p>
                            </div>
                            <div class="centered" id="imgtxt<?php echo $i; ?>">
                                <a href="cart.php?id=<?php echo base64_encode($row->product_id); ?>" class="fa fa-cart-plus fa-3x" style="color: whitesmoke;background: rgba(0, 0, 0, 0);border: none;" aria-hidden="true"></a>
                            </div>
                        </div>
                    <?php $i++;
                    } ?>
                </div>
            </form>
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

    </html>

<?php
}
?>