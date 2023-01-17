<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ERROR | E_PARSE);
if(!isset($_SERVER['HTTP_REFERER'])){
        header('location:../error.php');
        exit;
    }


    echo "<meta http-equiv='refresh' content='1;url=./Admin0.php'>"; 

?>




<!DOCTYPE html>
<html lang="ar">

<head>
    <title>FCAI معامل</title>
    <link rel="shortcut icon" type="image/x-icon" href="./photo/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script src="https://kit.fontawesome.com/2b6685be60.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css?family=Amiri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lateef&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mirza&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tajawal&display=swap" rel="stylesheet">

    <!--Aos-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</head>

<style>
    /* General : */

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    html {
        scroll-behavior: smooth;
    }

    .carousel-inner img {
        width: 100%;
        height: 100%;
        opacity: 0.7;
    }

    body {
        background: rgb(197, 197, 191);
    }


    @media(min-width:0px) and (max-width:315px) {
        .test {
            color: palevioletred;
        }

        /* header */
        .navbar-brand {
            font-size: 20px !important;
        }

        .navbar img {
            margin-top: 0 auto;
        }

        .navbar a {
            margin-right: 5% !important;
        }



        /* Homepage container : */


    }

    .test {
        color: blue;
    }


    @media(min-width:0px) and (max-width:766px) {
        .test {
            color: red;
        }

        body {
            margin-right: -26px !important;
        }

        /* header */

        .navbar-brand svg {
            margin-left: 5% !important;
        }

        .nav-item {
            margin: 0 auto;
        }

        .navbar img {
            margin-top: 0 auto;
        }


        /* Homepage container : */

    }


    @media(max-width:500px) {
        .test {
            color: yellow;
        }

        .nav-item {
            margin: 0 auto;
        }

        .navbar img {
            margin-top: 0 auto;
        }

        /* Homepage container : */

        #small {
            font-size: 20px;
            margin-top: 50px;
            font-weight: bold;
        }


    }


    @media(min-width:501px) and (max-width:767px) {
        .test {
            color: blue;
        }


        /* header */

        .navbar-brand {
            margin-right: 0 !important;
        }

        .navbar-nav {
            margin-top: 5%;
        }

        .navbar img {
            margin-top: 0 auto !important;
        }

        .nav-item {
            margin: 0 auto;
        }


        /* Homepage container : */




    }


    @media(min-width:768px) and (max-width:991px) {
        #collapsibleNavbar {
            margin-right: 34% !important;
        }

        .test {
            color: yellow;
        }



        .navbar ul {
            margin-right: 50% !important;
            margin-left: 20%;
        }

        .navbar img {
            margin-top: 0 auto;
        }


        /* Homepage Conrtainer : */




    }


    @media(min-width:992px) and (max-width:1199px) {
        .test {
            color: green;
        }


        .navbar ul {
            margin-right: 50% !important;
            margin-left: 20% !important;
        }



        /* Homepage Conrtainer : */





    }


    @media(min-width:1200px) {
        .test {
            color: red;
        }

        .navbar ul {
            margin-right: 50% !important;
            margin-left: 20% !important;
        }

        /* Homepage Conrtainer : */




    }

    .navbar a {
        margin-right: 5% !important;
    }

    .nav-item {
        margin-top: 1.5%;
        margin-right: 3%;
    }

    .nav-item {
        margin-right: 8%;
        transition: 0.5s;
    }


    .hide {
        display: none;
    }

    .brand:hover+.hide {
        display: block;
        color: red;
    }

    .bsrand:hover {
        display: block;
        background: red;
    }


    .navbar a:hover {
        color: white !important;
        transition: 0.5s;
        border-bottom: 2px white solid;
        border-radius: 20px;

    }



    .footer-icon:hover {
        color: orange;
        transform: scale(2);
        transition: 0.5s;

    }
</style>
</head>

<body>
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    <script>
        AOS.init();
    </script>





<nav class="navbar navbar-expand-md mb-1 text-danger" style="background:#fecd49;">
        <button style="background:transparent;" class="navbar-toggler mt-2" type="button" data-toggle="collapse"
            data-target="#collapsibleNavbar">
            <i class="fa-solid fa-bars computer fa-1x"></i>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar" data-aos="fade-up-right" data-aos-duration="1000">
            <ul class="navbar-nav">



                <li class="nav-item mr-5" style="font-size: 15px; font-family:mirza;">
                    <a class="nav-link pr-4 pl-4 bg-dark text-white" href="contact.html"
                        style="font-size: 20px; color: black; border-radius:30px;" style="font-family:Mirza;"><span
                            class="m-2">نتيجة</span>تحليل</a>

                </li>



                <li class="nav-item dropdown" style="font-size: 20px; font-family:mirza;">



                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"
                        style="color:black;">
                        تسجيل دخول
                    </a>
                    <div class="dropdown-menu" id="ex" style="z-index:100;">
                        <button class="dropdown-item  text-right p-3" onclick="redirect()">Admin تسجيل دخول</button>
                        <button class="dropdown-item text-right p-3"> تسجيل دخول عميل</button>
                    </div>

                </li>

                <li class="nav-item" style="font-size: 20px; font-family:mirza;">
                    <b><a class="nav-link" href="contact.html" style="font-size: 20px; color: black;"
                            style="font-family:Mirza;">FCAI<span class="ml-2">معامل</span></a></b>

                </li>
                <li class="nav-item" style="font-size: 20px; font-family:mirza;">
                    <b><a class="nav-link" href="contact.html" style="font-size: 20px; color: black;"
                            style="font-family:Mirza;"> تعليمات</a></b>

                </li>
                <li class="nav-item" style="font-size: 20px; font-family:mirza;">
                    <b><a class="nav-link" href="contact.html" style="font-size: 20px; color: black;"
                            style="font-family:Mirza;">حجز </a></b>

                </li>


                <li class="nav-item" style="font-size: 20px; font-family:mirza; ">
                    <b><a class="nav-link" href="index.html" style="font-size: 20px; color: black;"
                            style="font-family:Mirza;">الرئيسية</a></b>

                </li>






            </ul>
        </div>
        <a class="navbar-brand brand text-white font-weight-bold p-3 pl-5" href="#"
            style="font-size:23px; border-bottom:4px black solid; border-bottom-left-radius:50px; font-family:tajawal;"
            data-aos="fade-up-left">
            FCAI معامل
            <i class="fa-solid fa-flask ml-1"></i>

        </a>


    </nav>



    <div class="container mt-5 p-4 text-center">
        <h2 class="text-center text-danger">تم إضافة العميل بنجاح</h2>
        <div class="spinner-border mt-4" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <h2 class="text-center text-dark mt-4">.. جارٍ تحويلك للصفحة الرئيسية</h2>

    </div>


    <footer style="display:flex; flex-direction:column; align-items:center; background:#f0bb2c;" class="mt-5">
        <div class="text-white mt-3" style="font-family:cairo;">

            <a href="#" class="text-dark ml-2 text-decoration-none">الرئيسية</a>|
            <a href="#" class="text-dark ml-2 mr-1 text-decoration-none">حجز</a>|
            <a href="#" class="text-dark ml-2 mr-1 text-decoration-none">تعليمات</a>|
            <a href="#" class="text-dark ml-2 mr-1 font-weight-bold text-decoration-none">نتيجة تحليل</i></a>

        </div>

        <div class="text-dark h6 mt-3" style="font-family:amiri;">

            2022 &copy; FCAI

            جميع الحقوق محفوظة
            لمجموعة معامل

        </div>
        <div class="text-dark h6 mt-3" style="font-family:amiri;">

            (<a href="https://wa.me/message/IG5E4ICWRMZYD1" class="text-white"><i class="fa-solid fa-phone"></i></a>)
            Ahmed El-Dakhly

            تمت برمجة الموقع بواسطة



        </div>
        <div class="text-white h5 mt-3 ml-2" style="font-family:amiri;">

            <a href="#" class="text-dark"><i class="footer-icon fa-brands fa-facebook  mr-3"></i></a>|
            <a href="#" class="text-dark"><i class="footer-icon fa-brands fa-whatsapp mr-3 ml-3"></i></a>|
            <a href="#" class="text-dark"><i class="footer-icon fa-brands fa-instagram mr-3 ml-3"></i></a>|
            <a href="#" class="text-dark"><i class="footer-icon fa-brands fa-twitter mr-3 ml-3"></i></a>

        </div>


    </footer>


    <script src="./js/"></script>
</body>

</html>