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

            /* .img3:hover{
                height: 120px;
            } */

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

            .wwd {
                background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url("http://127.0.0.1/Agro-Agency/img/bg-img/8.jpg") fixed;
                height: 400px;
            }

            .imgwwd {
                background: url("http://127.0.0.1/Agro-Agency/img/bg-img/7.jpg") fixed;
                height: 600px;
                position: relative;
                left: 0px;
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

            /* .img1 {
            width: 100%;
            height: 800px;
            background: linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.5)),
                url("http://127.0.0.1/Agro-Agency/img/bg-img/1.jpg");
        } */
        </style>
        <script>
            function scaleImg1(ele) {
                document.getElementById('imgh1').style.height = "110px";
            }

            function scaleImg2(ele) {
                document.getElementById('imgh2').style.height = "110px";
            }

            function scaleImg3(ele) {
                document.getElementById('imgh3').style.height = "110px";
            }

            function scaleImg4(ele) {
                document.getElementById('imgh4').style.height = "110px";
            }

            function scaleImg1back(ele) {
                document.getElementById('imgh1').style.height = "90px";
            }

            function scaleImg2back(ele) {
                document.getElementById('imgh2').style.height = "90px";
            }

            function scaleImg3back(ele) {
                document.getElementById('imgh3').style.height = "90px";
            }

            function scaleImg4back(ele) {
                document.getElementById('imgh4').style.height = "90px";
            }

            function iccin() {
                document.getElementById("asd").style.color = "green";
            }

            function iccout() {
                document.getElementById("asd").style.color = "black";
            }

            function iccin1() {
                document.getElementById("asd1").style.color = "green";
            }

            function iccout1() {
                document.getElementById("asd1").style.color = "black";
            }

            function iccin2() {
                document.getElementById("asd2").style.color = "green";
            }

            function iccout2() {
                document.getElementById("asd2").style.color = "black";
            }
        </script>
        <script>
            function show(i) {
                document.getElementById(`imgtxt${i}`).style.visibility = "visible";
            }

            function hide(i) {
                document.getElementById(`imgtxt${i}`).style.visibility = "hidden";
            }
        </script>
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
                        <a class="navbar-brand" style="width: 100%" href="dashboard.php">
                            <img src="http://127.0.0.1/Agro-Agency/img/core-img/tractor.png" style="height: 50px;" class="ml-5" alt="">
                        </a>
                    </div>
                    <div class="links">
                        <ul class="navbar-nav" style="margin-right: 50px;">
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

            <div class="container" style="margin-top: 100px;">
                <img src="http://127.0.0.1/Agro-Agency/img/bg-img/2.jpg" class="img2" alt="">
                <div style="display: flex;justify-content: space-around;margin-top: 100px" id="demo">
                    <center>
                        <div onmouseover="scaleImg1(this)" onmouseout="scaleImg1back(this)">
                            <img src="http://127.0.0.1/Agro-Agency/img/core-img/digger.png" id="imgh1" class="img3" alt="">
                            <p class="img2fnt">Best Services</p>
                        </div>
                    </center>
                    <center>
                        <div onmouseover="scaleImg2(this)" onmouseout="scaleImg2back(this)">
                            <img src="http://127.0.0.1/Agro-Agency/img/core-img/windmill.png" id="imgh2" class="img3" alt="">
                            <p class="img2fnt">Farm Experiences</p>
                        </div>
                    </center>
                    <center>
                        <div onmouseover="scaleImg3(this)" onmouseout="scaleImg3back(this)">
                            <img src="http://127.0.0.1/Agro-Agency/img/core-img/cereals.png" id="imgh3" class="img3" alt="">
                            <p class="img2fnt">100% Natural</p>
                        </div>
                    </center>
                    <center>
                        <div onmouseover="scaleImg4(this)" onmouseout="scaleImg4back(this)">
                            <img src="http://127.0.0.1/Agro-Agency/img/core-img/sunrise.png" id="imgh4" class="img3" alt="">
                            <p class="img2fnt">Organic food</p>
                        </div>
                    </center>
                </div>
            </div>
            <div class="container-fluid" style="margin-top: 100px;">
                <div class="row" style="background-color: #EAEDED">
                    <div class="col-5">
                        <!-- <div class="imgwwd"></div> -->
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
                    <img src="http://127.0.0.1/Agro-Agency/img/core-img/decor2.png" alt="">
                </div>
                <div class="contrainer justify-content-center d-flex">
                    <div style="font-size: 30px;font-weight: bold">
                        <span style="color: green">Our Product</span> Are Highest Quality
                    </div>
                </div>
                <div class="container d-flex justify-content-around mt-5 mx-0">
                    <div class="row">
                        <div class="col-3" onmouseover="show(1)" onmouseout="hide(1)">
                            <img src="http://127.0.0.1/Agro-Agency/img/bg-img/p1.jpg" alt="">
                            <div class="centered" id="imgtxt1">
                                <button type="submit" name="add" value="yes" class="fa fa-cart-plus fa-3x" style="color: whitesmoke;background: rgba(0, 0, 0, 0);border: none;" aria-hidden="true" onclick="ourProduct()"></button>
                            </div>
                        </div>
                        <div class="col-3" onmouseover="show(2)" onmouseout="hide(2)">
                            <img src="http://127.0.0.1/Agro-Agency/img/bg-img/p2.jpg" alt="">
                            <div class="centered" id="imgtxt2">
                                <button type="submit" name="add" value="yes" class="fa fa-cart-plus fa-3x" style="color: whitesmoke;background: rgba(0, 0, 0, 0);border: none;" aria-hidden="true" onclick="ourProduct()"></button>
                            </div>
                        </div>
                        <div class="col-3" onmouseover="show(3)" onmouseout="hide(3)">
                            <img src="http://127.0.0.1/Agro-Agency/img/bg-img/p3.jpg" alt="">
                            <div class="centered" id="imgtxt3">
                                <button type="submit" name="add" value="yes" class="fa fa-cart-plus fa-3x" style="color: whitesmoke;background: rgba(0, 0, 0, 0);border: none;" aria-hidden="true" onclick="ourProduct()"></button>
                            </div>
                        </div>
                        <div class="col-3" onmouseover="show(4)" onmouseout="hide(4)">
                            <img src="http://127.0.0.1/Agro-Agency/img/bg-img/p4.jpg" alt="">
                            <div class="centered" id="imgtxt4">
                                <button type="submit" name="add" value="yes" class="fa fa-cart-plus fa-3x" style="color: whitesmoke;background: rgba(0, 0, 0, 0);border: none;" aria-hidden="true" onclick="ourProduct()"></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container d-flex justify-content-center mt-5 mx-0">
                    <button class="btn btn-success" onclick="ourProduct()">
                        GO TO COMPANIES
                    </button>
                    <script>
                        function ourProduct() {
                            window.location.href = "ourProduct.php";
                        }
                    </script>
                </div>
            </div>


            <div class="container-fluid wwd" style="margin-top: 90px;font-family: Comfortaa;color: gainsboro;">
                <div class="contrainer justify-content-center d-flex" style="padding-top : 50px;">
                    <div>
                        WHAT WE DO
                    </div>
                </div>
                <div class="contrainer justify-content-center d-flex" style="margin-top: 20px;">
                    <img src="http://127.0.0.1/Agro-Agency/img/core-img/decor2.png" alt="">
                </div>
                <div class="contrainer justify-content-center d-flex" style="margin-top: 30px;">
                    <div style="font-size: 30px;font-weight: bold">
                        Our Produce Is Mainstay For Us
                    </div>
                </div>
                <div class="contrainer justify-content-center d-flex" style="margin-top: 50px;">
                    <p style="padding: 0 250px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nullam at diam convallis ligula cursus bibendum sed at enim.
                        Class aptent taciti sociosqu ad litora torquent conubia nostra, per inceptos himenaeos.
                    </p>
                </div>

            </div>

            <div class="container-fluid" style="margin-top: 90px;font-family: Comfortaa;">
                <div class="contrainer justify-content-center d-flex" style="padding-top : 50px;">
                    <div>
                        MAKE THE GREEN WORLD
                    </div>
                </div>
                <div class="contrainer justify-content-center d-flex" style="margin-top: 20px;">
                    <img src="http://127.0.0.1/Agro-Agency/img/core-img/decor2.png" alt="">
                </div>
                <div class="contrainer justify-content-center d-flex" style="margin-top: 30px;">
                    <div style="font-size: 30px;font-weight: bold">
                        <span style="color: green">Farming Practices</span> To Preserve Land & Water
                    </div>
                </div>
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-4" onmouseover="iccin()" onmouseout="iccout()">
                            <center>
                                <div>
                                    <img src="http://127.0.0.1/Agro-Agency/img/bg-img/12.jpg" alt="" height="280px">
                                </div>
                                <!-- Content -->
                                <div class="farming-practice-content text-center">
                                    <!-- Icon -->
                                    <div style="display: flex;justify-content: center;margin-top: -40px;">
                                        <div class="farming-icon" style="border-radius: 50%;background: whitesmoke;height: 80px;width: 80px;display: flex;justify-content: center;align-items: center;box-shadow: 2px 3px 5px 3px rgba(1, 1, 1, 0.4);">
                                            <img src="http://127.0.0.1/Agro-Agency/img/core-img/cereal.png" alt="">
                                        </div>
                                    </div>
                                    <!-- <div style="margin-top: 20px;"></div> -->
                                    <p style="margin-top: 16px;">Consulatancy for</p>
                                    <h4 style="font-weight: bolder;" id="asd">Improved Cotton Cultivation</h4>
                                    <p>Our specialization is for the Cotton and we give best consulatancy for the new farmer.</p>
                                </div>
                            </center>
                        </div>
                        <div class="col-4" onmouseover="iccin1()" onmouseout="iccout1()">
                            <center>
                                <div>
                                    <img src="http://127.0.0.1/Agro-Agency/img/bg-img/14.jpg" alt="" height="280px">
                                </div>
                                <!-- Content -->
                                <div class="farming-practice-content text-center">
                                    <!-- Icon -->
                                    <div style="display: flex;justify-content: center;margin-top: -40px;">
                                        <div class="farming-icon" style="border-radius: 50%;background: whitesmoke;height: 80px;width: 80px;display: flex;justify-content: center;align-items: center;box-shadow: 2px 3px 5px 3px rgba(1, 1, 1, 0.4);">
                                            <img src="http://127.0.0.1/Agro-Agency/img/core-img/s1.png" alt="">
                                        </div>
                                    </div>
                                    <p style="margin-top: 15px;">Consulatancy for</p>
                                    <h4 style="font-weight: bolder;padding: 0 50px;" id="asd1">Intensive Fruit Farming</h4>
                                    <p>Fruit farming is best for the money maker and we give best information for fruit farming.</p>
                                </div>
                            </center>
                        </div>
                        <div class="col-4" onmouseover="iccin2()" onmouseout="iccout2()">
                            <center>
                                <div>
                                    <img src="http://127.0.0.1/Agro-Agency/img/bg-img/13.jpg" alt="" height="280px">
                                </div>
                                <!-- Content -->
                                <div class="farming-practice-content text-center">
                                    <!-- Icon -->
                                    <div style="display: flex;justify-content: center;margin-top: -40px;">
                                        <div class="farming-icon" style="border-radius: 50%;background: whitesmoke;height: 80px;width: 80px;display: flex;justify-content: center;align-items: center;box-shadow: 2px 3px 5px 3px rgba(1, 1, 1, 0.4);">
                                            <img src="http://127.0.0.1/Agro-Agency/img/core-img/sprout.png" alt="">
                                        </div>
                                    </div>
                                    <p style="margin-top: 20px;">Consulatancy for</p>
                                    <h4 style="font-weight: bolder;" id="asd2">Soil Improvement Techniques</h4>
                                    <p>We give information about soil improvement and give many techniques for the soil improvement.</p>
                                </div>
                            </center>
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
        </div>

    </body>

    </html>

<?php

}
?>