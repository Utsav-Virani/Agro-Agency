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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>About</title>
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
                font-size: 17px;
                font-family: Comfortaa;
                color: white;
            }

            @font-face {
                font-family: Comfortaa;
                src: url("http://127.0.0.1/src/Fonts/Comfortaa-VariableFont_wght.ttf");
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
                ABOUT
            </div>
        </div>
        <div class="container my-5" style="font-size: 19px">
            <center>
                <!-- <div class="material-icons">home</div> -->
                <!-- <a href="home.php"></a> -->
                <i class="fa fa-home">Home</i>
                <div class="fa fa-angle-right" aria-hidden="true">About</div>
            </center>
        </div>
        <div class="container" style="margin-top: 50px;margin-bottom: 100px">
            <img src="http://127.0.0.1/Agro-Agency/img/bg-img/2.jpg" class="img2" alt="">
            <div style="display: flex;justify-content: space-around;margin-top: 50px">
                <center>
                    <div>
                        <img src="http://127.0.0.1/Agro-Agency/img/core-img/digger.png" class="img3" alt="">
                        <p class="img2fnt">Best Services</p>
                    </div>
                </center>
                <center>
                    <div>
                        <img src="http://127.0.0.1/Agro-Agency/img/core-img/windmill.png" class="img3" alt="">
                        <p class="img2fnt">Farm Experiences</p>
                    </div>
                </center>
                <center>
                    <div>
                        <img src="http://127.0.0.1/Agro-Agency/img/core-img/cereals.png" class="img3" alt="">
                        <p class="img2fnt">100% Natural</p>
                    </div>
                </center>
                <center>
                    <div>
                        <img src="http://127.0.0.1/Agro-Agency/img/core-img/sunrise.png" class="img3" alt="">
                        <p class="img2fnt">Organic food</p>
                    </div>
                </center>
            </div>
        </div>

        <div>
            <div class="contrainer-fluid justify-content-center d-flex">
                <div>
                    MEET OUR TEAM
                </div>
            </div>
            <div class="contrainer-fluid justify-content-center d-flex">
                <div style="font-size: 30px;font-weight: bold">
                    <span style="color: green">The Great Team</span> Will Always Help You
                </div>
            </div>
            <div class="contrainer-fluid justify-content-center d-flex my-2">
                <img src="http://127.0.0.1/Agro-Agency/img/core-img/decor2.png" alt="">
            </div>
            <div class="contrainer-fluid justify-content-center d-flex">
                <center>
                    <div>
                        <table class="table table-hover table-borderless" style="width: 500px">
                            <tr align="center">
                                <th>Utsav Virani</th>
                                <th>Darshita Sheladiya</th>
                            </tr>
                            <tr align="center">
                                <td>Owner & CEO</td>
                                <td>Manager</td>
                            </tr>
                        </table>
                    </div>
                </center>
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
                            <i class="fa fa-map-marker" aria-hidden="true">&ThickSpace; Near bus-station, jam-kandorna, Rajkot</i>
                        </div>
                        <div class="ml-5 my-3 row">
                            <i class="fa fa-envelope-o" aria-hidden="true">
                                &ThickSpace;agro@gmail.com</i>
                        </div>
                        <div class="ml-5 my-3 row">
                            <i class="fa fa-phone" aria-hidden="true">&ThickSpace;+91 02824271229</i>
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5 pl-5 my-4">
                        <div class="row">
                            <i class="fa fa-facebook-official" aria-hidden="true">&ThickSpace;
                                Facebook</i>
                        </div>
                        <div class="row my-4">
                            <i class="fa fa-instagram" aria-hidden="true">&ThickSpace;
                                Instagram</i>
                        </div>
                        <div class="row my-4">
                            <i class="fa fa-twitter" aria-hidden="true">&ThickSpace;
                                Twitter</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>


<?php } ?>