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
        <title>Companies</title>
        <style>
            .imgAbt {
                margin-top: 80px;
                background: linear-gradient(rgba(0, 0, 0, 0.5),
                        rgba(0, 0, 0, 0.5)),
                    url("http://127.0.0.1/Agro-Agency/img/bg-img/18.jpg");
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
        </style>
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
                COMPANIES
            </div>
        </div>
        <div class="container my-5" style="font-size: 19px">
            <center>
                <!-- <div class="material-icons">home</div> -->
                <!-- <a href="home.php"></a> -->
                <i class="fa fa-home"> Home</i>
                <div class="fa fa-angle-right" aria-hidden="true"> Companies</div>
            </center>
        </div>


        <div class="container">
            <div class="contrainer-fluid justify-content-center d-flex">
                <div>
                    COMPANY NAME
                </div>
            </div>
            <div class="contrainer-fluid justify-content-center d-flex">
                <div style="font-size: 30px;font-family: Comfortaa;font-weight: bold">
                    <span style="color: green;">The Best</span> Companies
                </div>
            </div>
            <div class="contrainer-fluid justify-content-center d-flex my-2">
                <img src="http://127.0.0.1/Agro-Agency/img/core-img/decor2.png" alt="">
            </div>
        </div>
        <div class="container d-flex justify-content-around mt-5 ">
            <div class="row">
                <div class="col-3">
                    <img src="http://127.0.0.1/Agro-Agency/img/bg-img/c1.png" alt="">
                </div>
                <div class="col-3">
                    <img src="http://127.0.0.1/Agro-Agency/img/bg-img/c2.png" alt="">
                </div>
                <div class="col-3">
                    <img src="http://127.0.0.1/Agro-Agency/img/bg-img/c3.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="http://127.0.0.1/Agro-Agency/img/bg-img/c4.png" alt="">
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

    </html>

<?php } ?>