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
        <link rel="stylesheet" href="http://127.0.0.1/src/FAFA/css/fontawesome.min.css">
        <link rel="stylesheet" href="http://127.0.0.1/src/FAFA/css/fontawesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://127.0.0.1/src/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <title>Recipt</title>

        <style>
            body {
                background: linear-gradient(rgba(0, 0, 0, 0.7),
                        rgba(0, 0, 0, 0.7)),
                    url("http://127.0.0.1/Agro-Agency/img/6.jpg") center/cover fixed;

                font-family: Comfortaa;
            }

            @font-face {
                font-family: Comfortaa;
                src: url("http://127.0.0.1/src/Fonts/Comfortaa-VariableFont_wght.ttf");
            }

            .cart {
                position: fixed;
                bottom: 30px;
                right: 30px;
                z-index: 100;
                background: rgba(0, 0, 0, 0.9);
                height: 100px !important;
                width: 100px !important;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-flow: column;
                color: #80cc17;
                box-shadow: 1px 2px 5px 4px rgba(0, 0, 0, 0.4);
                cursor: pointer;
                border-top-left-radius: 50%;
                border-bottom-left-radius: 50%;
                /* border-top-right-radius: 100%; */
                border-bottom-right-radius: 100%;
                /* width: 240px !important; */
            }

            .cart2 {
                position: fixed;
                bottom: 150px;
                right: 30px;
                z-index: 100;
                background: rgba(0, 0, 0, 0.9);
                height: 100px !important;
                width: 100px !important;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-flow: column;
                color: #80cc17;
                box-shadow: 1px 2px 5px 4px rgba(0, 0, 0, 0.4);
                cursor: pointer;
                border-top-left-radius: 50%;
                border-bottom-left-radius: 50%;
                border-top-right-radius: 100%;
                /* border-bottom-right-radius: 50%; */
                /* width: 240px !important; */
            }

        </style>
        <script>
            function makeItLarge(x) {
                x.style.transform = "scale(1.2, 1.2)";
            }

            function makeItSmall(x) {
                x.style.transform = "scale(1, 1)";

            }

            function navigate() {
                window.location.href = "dashboard.php";
            }
            function navigate2() {
                window.location.href = "ourProduct.php";
            }
        </script>
    </head>

    <body>
        <?php

        $user = "SELECT * FROM user WHERE id = " . $_SESSION['user_id'];
        $con = new mysqli('127.0.0.1', 'agro', 'agro', 'agro');
        if (mysqli_connect_errno()) {
            echo '<script>window.location.href = "bill.php";</script>';
        }
        $result_user = mysqli_query($con, $user);
        $u_name = "";
        $u_u_name = "";
        $u_email = "";
        $u_add = "";
        $u_mno = "";
        $p_mode = "";
        $pro = array();
        $pro_price = array();
        while ($row = mysqli_fetch_object($result_user)) {
            $u_name = $row->name;
            $u_u_name = $row->uname;
            $u_email = $row->email;
        }
        $user2 = "SELECT * FROM bye_data WHERE uid = " . $_SESSION['user_id'];
        $result_user2 = mysqli_query($con, $user2);
        $i = 0;
        while ($row = mysqli_fetch_object($result_user2)) {
            $u_mno = $row->mno;
            $u_add = $row->address;
            $p_mode = $row->mode;

            $product = "SELECT * FROM tbl_product WHERE product_id = " . $row->pid;
            $result_pro = mysqli_query($con, $product);

            while ($row2 = mysqli_fetch_object($result_pro)) {
                $pro[$row2->name] = $row2->price;
                // $pro_price[$i] = $row2->price . "<br>";
                $i++;
            }
        }


        // echo $u_name . "<br>";
        // echo $u_u_name . "<br>";
        // echo $u_email . "<br>";
        // echo $u_add . "<br>";
        // echo $u_mno . "<br>";
        // echo $u_add . "<br>";
        // echo $p_mode . "<br>";
        // echo $pro_name[1] . "<br>";
        // echo $pro_price[1] . "<br>";





        ?>

        <div class="container">
            <table class="table table-borderless m-5" style="color: #80cc08;width: 900px;border: solid whitesmoke;">

                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <th align="center" colspan="1" rowspan="3"><img src="http://127.0.0.1/Agro-Agency/img/bg-img/16.jpg" height="120px;" alt=""></th>
                    <th style="display: flex;justify-content: flex-end;">Name :</th>
                    <td><?php echo $u_name ?></td>
                    <th style="display: flex;justify-content: flex-end;">Username :</th>
                    <td><?php echo $u_u_name ?></td>
                </tr>
                <tr>
                    <th style="display: flex;justify-content: flex-end;">Email :</th>
                    <td><?php echo $u_email ?></td>
                    <th style="display: flex;justify-content: flex-end;">Address :</th>
                    <td><?php echo $u_add ?></td>
                </tr>
                <tr>
                    <th style="display: flex;justify-content: flex-end;">Mobile No. :</th>
                    <td><?php echo $u_mno ?></td>
                    <th style="display: flex;justify-content: flex-end;">Mode Of Pay :</th>
                    <td><?php echo $p_mode ?></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>

                <tr>
                    <th></th>
                    <th>Product Name :</th>
                    <th></th>
                    <th>Price :</th>
                </tr>
                <?php

                foreach ($pro as $name => $value) {
                    // echo $name . "<br>";
                    // echo $value . "<br>";

                ?>
                    <tr>
                        <th></th>
                        <td><?php echo $name; ?></td>
                        <th></th>
                        <td><?php echo $value; ?></td>
                    </tr>

                <?php
                }

                ?>

                <tr>
                    <td></td>
                </tr>

            </table>

        </div>
        <div class="row container" style="color:#80cc08;">
            <div class="col">
                <div style="display: flex;justify-content: center;align-items: center;">
                    <div style="padding: 5px;" id="cart" class="cart" onmouseover="makeItLarge(this)" onmouseout="makeItSmall(this)" onclick="navigate()">
                        <i class="fab fa-opencart" style="font-size: 2.5em;"></i>
                        <div style="font-family: Comfortaa;">Home</div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div style="display: flex;justify-content: center;align-items: center;">
                    <div style="padding: 5px;" id="cart2" class="cart2" onmouseover="makeItLarge(this)" onmouseout="makeItSmall(this)" onclick="navigate()">
                        <i class="fab fa-opencart" style="font-size: 2.5em;"></i>
                        <div style="font-family: Comfortaa;">Back</div>
                    </div>
                </div>
            </div>
        </div>



    </body>

    </html>

<?php
}
?>