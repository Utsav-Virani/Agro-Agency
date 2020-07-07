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
    <title>Home</title>
    <style>
        .carousel-caption {
            margin-bottom: 7em;
            font-family: Comfortaa;
            /* font-family: Arial; */
            color: #fff;
            background: linear-gradient(rgba(0, 0, 0, 0.6),
                    rgba(0, 0, 0, 0.6));
            /* background-color: black;
            opacity: 0.5; */
        }
        .carousel-inner img {
            width: 100%;
            height: 800px;
        }
        .img2 {
            width: 100%;
            height: 500px;
            border-radius: 10px;
        }
        .links {
            position: absolute;
            right: 1em;
        }
        @font-face {
            font-family: pacifico;
            src: url("http://127.0.0.1/src/Fonts/Pacifico/Pacifico-Regular.ttf");
        }
        @font-face {
            font-family: simonetta;
            src: url("http://127.0.0.1/src/Fonts/Simonetta/Simonetta-Regular.ttf");
        }
        @font-face {
            font-family: tradeWinds;
            src: url("http://127.0.0.1/src/Fonts/TradeWinds/TradeWinds-Regular.ttf");
        }
        @font-face {
            font-family: yeonsung;
            src: url("http://127.0.0.1/src/Fonts/Yeon_Sung/YeonSung-Regular.ttf");
        }
        @font-face {
            font-family: Comfortaa;
            src: url("http://127.0.0.1/src/Fonts/Comfortaa-VariableFont_wght.ttf");
        }
        @font-face {
            font-family: Transformers;
            src: url("http://127.0.0.1/src/Fonts/TransformersMovie.ttf");
        }
        #loader {
            background-color: #fff;
            position: absolute;
            height: 100%;
            width: 100%;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }
        .first {
            position: absolute;
            left: 50%;
            height: 150px;
            width: 150px;
            top: 50%;
            z-index: 2;
            margin: -75px 0 0 -75px;
            border: 5px solid #fff;
            border-top: 5px solid #527318;
            border-left: 5px solid #527318;
            border-bottom: 5px solid #527318;
            border-radius: 50%;
            animation: spin 2s linear infinite;
        }
        .second {
            position: absolute;
            left: 50%;
            height: 130px;
            width: 130px;
            top: 50%;
            z-index: 2;
            margin: -65px 0 0 -65px;
            border: 5px solid #fff;
            border-top: 5px solid #899857;
            border-left: 5px solid #899857;
            border-bottom: 5px solid #899857;
            border-radius: 50%;
            animation: spinReverse 1s linear infinite;
        }
        .third {
            position: absolute;
            left: 50%;
            height: 110px;
            width: 110px;
            top: 50%;
            z-index: 2;
            margin: -55px 0 0 -55px;
            border: 5px solid #fff;
            border-top: 5px solid #8cba51;
            border-left: 5px solid #8cba51;
            border-bottom: 5px solid #8cba51;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        .img {
            position: absolute;
            left: 50%;
            height: 60px;
            width: auto;
            top: 50%;
            z-index: 2;
            margin: -30px 0 0 -30px;
        }
        #data {
            display: none;
            text-align: center;
        }
        .content {
            position: relative;
            animation: animate 2s;
        }
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        @keyframes spinReverse {
            0% {
                transform: rotate(360deg);
            }
            100% {
                transform: rotate(0deg);
            }
        }
        @keyframes animate {
            from {
                bottom: -100px;
                opacity: 0;
            }
            to {
                bottom: 0;
                opacity: 1;
            }
        }
        .fonAbt {
            font-family: Comfortaa;
            font-size: 13px;
            font-weight: bold;
        }
        .hdr {
            margin: 0px;
            height: 80px;
        }
        .img3 {
            height: 90px;
            width: auto;
        }
        .img2fnt {
            font-weight: bold;
            font-family: Arial;
            font-size: 1.2em;
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
        /* .img1 {
            width: 100%;
            height: 800px;
            background: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)),
                url("http://127.0.0.1/Agro-Agency/img/bg-img/1.jpg");
        } */
    </style>
</head>
<!-- <body> -->
    <body onload="loadingScreen()">
    <div id="loader">
        <div class="first"></div>
        <div class="second"></div>
        <div class="third"></div>
        <div>
            <img src="http://127.0.0.1/Agro-Agency/img/core-img/tractor.png" class="img" class="ml-5" alt="">
        </div>
        <div>
        </div>
    </div>
    <div id="data" class="content" style="display: none;">
    <script>
        function loadingScreen() {
            var loader = setTimeout(showData, 3000);
        }
        function showData() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("data").style.display = "block";
        }
    </script>
    <header class="header-area" class="hdr">
        <nav class="navbar navbar-inverse navbar-expand-md navbar-expand-sm fixed-top bg-light navbar-light">
            <div class="navbar-header" style="margin: 0px;height: 80px">
                <a class="navbar-brand" style="width: 100%" href="home.php">
                    <img src="http://127.0.0.1/Agro-Agency/img/core-img/tractor.png" style="height: 50px;" class="ml-5" alt="">
                </a>
            </div>
            <div class="links">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 1.3em" href="login.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 1.3em" href="login.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 1.3em" href="login.php">Companies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 1.3em" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid m-0 p-0">
        <div class="carousel slide" id="demo" data-rider="carousel">
            <ul class="carousel-indicators">
                <li class="active" data-target="#demo" data-slide-to="0"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://127.0.0.1/Agro-Agency/img/bg-img/1.jpg" class="caroImg" alt="">
                    <!-- <div class="img1">
                    </div> -->
                    <div class="carousel-caption">
                        <h2 style="font-weight: bolder;font-size: 40px">The Farmer has to be an optimist or he Wouldn't still be a farmer.</h2>
                        <p style="font-size: 14px">Agriculture is our wisest pursuit , because it will in the end contribute most to real wealth , good morals, and happiness.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://127.0.0.1/Agro-Agency/img/6.jpg" class="caroImg" alt="">
                    <div class="carousel-caption">
                        <h2 style="font-weight: bolder;font-size: 40px">Farmer Has To Be An Optimist Or He Wouldn't Still Be A Farmer.</h2>
                        <p style="font-size: 14px">I believe in the future of agriculture, with a faith born not of words but of deeds.</p>
                    </div>
                </div>
            </div>
            <a href="#demo" data-slide="prev" class="carousel-control-prev">
                <span class="carousel-control-prev-icon bg-secondary"></span>
            </a>
            <a href="#demo" data-slide="next" class="carousel-control-next">
                <span class="carousel-control-next-icon bg-secondary"></span>
            </a>
        </div>
    </div>
    <div class="container" style="margin-top: 100px;margin-bottom: 100px">
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
    <div class="container-fluid">
        <div class="row" style="background-color: #EAEDED">
            <div class="col-5">
                <img src="http://127.0.0.1/Agro-Agency/img/bg-img/7.jpg" style="height: 600px;" alt="">
            </div>
            <div class="col-7" style="background-color: #EAEDED">
                <div class="container-fluid ml-2 " style="margin-top: 90px;margin-right: 100px">
                    <div class="fonAbt">
                        WHAT WE DO
                    </div>
                </div>
                <div class="container-fluid ml-2 mt-3" style="margin-right: 100px">
                    <div style="font-family: Comfortaa;font-size: 35px;font-weight: bolder">
                        <span style="color: #009900">Our Consulatancy</span> trust of farmers
                    </div>
                </div>
                <div class="container-fluid ml-4 mt-1" style="margin-right: 100px">
                    <div>
                        <img src="http://127.0.0.1/Agro-Agency/img/core-img/decor.png" alt="">
                    </div>
                </div>
                <div class="container" style="margin-top: 60px; padding-right: 150px;font-size: 15px;font-family: Comfortaa">
                    <p>
                        We give a consultancy for a pecticide products which is not harm to soil and any farm product.
                        We give a consultancy for a insectides which iss the main part of farm product and we give 100% gerrunty to kill any insect of farm.
                        Our Cinsultancy in fertilizer which is helfull to growth of plant and increase to procution of any product of farm and also give a information about the fungiciddes which are help to farm-product to take its vitamins and nutrients
                    </p>
                </div>
                <div class="container mt-5 ml-5">
                    <div class="row" style="font-family: Comfortaa;">
                        <div class="col-6">
                            <h5 style="font-weight: bolder">
                                <img src="http://127.0.0.1/Agro-Agency/img/core-img/s1.png" alt="">
                                Fruit & Vegetable</h5>
                            <p style="padding-right: 4em;font-size: 14px;">We give cinsultancy for a fruit in pomgranet and guavav abd barek And in also give for a Vegetable</p>
                        </div>
                        <div class="col-6">
                            <h5 style="font-weight: bolder">
                                <img src="http://127.0.0.1/Agro-Agency/img/core-img/s4.png" alt="">
                                Cotton & Groundnut</h5>
                            <p style="padding-right: 4em;font-size: 14px;">Our specialization in Cotton and groundnut and also in cumin, pigeon pea.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 90px;font-family: Comfortaa">
        <div class="contrainer justify-content-center d-flex">
            <div>
                FEATURED PRODUCTS
            </div>
        </div>
        <div class="contrainer justify-content-center d-flex">
            <div style="font-size: 30px;font-weight: bold">
                <span style="color: green">Our Product</span> Are Highest Quality
            </div>
        </div>
        <div class="container d-flex justify-content-around mt-5 mx-0">
            <div class="row">
                <div class="col-3">
                    <img src="http://127.0.0.1/Agro-Agency/img/bg-img/p1.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="http://127.0.0.1/Agro-Agency/img/bg-img/p2.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="http://127.0.0.1/Agro-Agency/img/bg-img/p3.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="http://127.0.0.1/Agro-Agency/img/bg-img/p4.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center mt-5 mx-0">
            <form action="login.php" method="post">
                <input type="submit" class="btn" style="background-color: #159205;font-weight: bolder;color: whitesmoke;height: 50px;width: 200px" value="GO TO COMPANIES" />
            </form>
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
    </div>
</body>
</html>
