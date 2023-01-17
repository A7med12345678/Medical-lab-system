<?php
session_start();
if (!isset($_SERVER['HTTP_REFERER'])) {
    // redirect them to your desired location
    header('location:../../error.php');

    exit;
}
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ERROR | E_PARSE);

//Receite Data : 
$c_name = $_SESSION['c_name'] ;
$c_id = $_SESSION['c_id'];
$t_ran_code = $_SESSION['t_ran_code'] ;
$t_insert_date = $_SESSION['t_insert_date'] ;
$t_total_price = $_SESSION['t_total_price'];
$w_name = $_SESSION['w_name'];
$t_tests = $_SESSION['t_tests'];


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
    background: #FAF1F1;
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

#ex a {
    border-radius: 0 !important;
    color: black !important;

}

#if {
    display: none;
}
</style>
</head>

<body>
    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    <script>
    AOS.init();
    </script>


    <div class="mt-4" style="display: flex; justify-content:space-around; align-items: center;">

        <div style="display: flex; flex-direction:column;">

            <div class="text-center text-secondary font-weight-bold"> Fcai-Lab معامل </div>
            <div class="text-center text-secondary mt-1"> إجراء جميع الفحصوات الطبية </div>
            <div class="text-center text-secondary mt-1"> العنوان : مقبل الجديد - مقبل - بني سويف </div>
            <div class="text-center text-secondary mt-1"> 01142333048 </div>
        </div>



        <div class="text-center row  ml-5">
            <div>
                <a class="navbar-brand brand text-secondary font-weight-bold p-3 pl-5" href="#"
                    style="font-size:23px; border-bottom:4px black solid; border-bottom-left-radius:50px; font-family:tajawal;"
                    data-aos="fade-up-left">
                    FCAI معامل
                    <i class="fa-solid fa-flask ml-1"></i>

                </a>
            </div>
        </div>

    </div>

    <div class="container mt-4">
        <hr class="bg-secondary">
    </div>

    <div class="container mt-4">
        <div class="mt-2 text-right h5">
            <?php echo $c_name; ?>
            اسم المريض
            /
            السيد
        </div>
        <div class="mt-4 text-right h5">
            <?php echo $c_id; ?>
            :
            كود المريض
        </div>
        <div class="mt-4 text-right h5 font-weight-bold">
            <?php echo $t_ran_code; ?>
            :
            كود التحليل
        </div>
        <div class="mt-4 text-right h5 font-weight-bold">
            <?php echo $t_tests; ?>
            :
            التحاليل المجوزة
        </div>
        <div class="mt-4 text-right h5">
            <?php echo $t_insert_date; ?>
            :
            تاريخ حجز وطباعة الفاتورة
        </div>
        <div class="mt-4 text-right h5">
            سعر التحليل شامل الضريبة
            :
            <?php echo $t_total_price."  ج"; ?>

        </div>
        <div class="mt-4 text-right h5">
            <?php echo $w_name; ?>
            :
تمت من خلال        </div>

    </div>

    <div class="container">
    <div class="row mt-4">
        <div class="col-5 mx-auto">
        <hr>
        </div></div>
    </div>
    <div class="container">

    <div class="h5 ml-5"> توقيع الموظف </div>
    </div>

    <div class="container">

    <p class="text-right text-secondary small">
        .
        عميلنا العزيز : لا يتم استلام نتيجة التحليل الا من خلال هذا الإيصال أو من خلال موقعنا أونلاين
    </p>
    </div>

    <script src="./js/"></script>
</body>

</html>