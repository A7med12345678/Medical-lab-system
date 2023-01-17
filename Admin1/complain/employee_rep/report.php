<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ERROR | E_PARSE);

$w_id = $_SESSION['w_id'];

$serverName = "DESKTOP-388SI7B"; 
$connectionOptions = [ "Database"=>"fcailab", "Uid"=>"", "PWD"=>""];
$conn = sqlsrv_connect($serverName, $connectionOptions);

$sql = "SELECT w_name from worker where w_id = '$w_id' ";
$params = array(1, "some data");
$stmt = sqlsrv_query( $conn, $sql, $params);
$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);
$res = $row['w_name'];


//$sql2 = "SELECT COUNT(t_ran_code) FROM test WHERE t_insert_time >= DATEADD(month, DATEDIFF(month, 0, CAST(GETDATE() AS smalldatetime)) - 1, 0) AND t_insert_time < DATEADD(month, DATEDIFF(month, 0, CAST(GETDATE() AS smalldatetime)), 0 ";

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

    #ex a{
border-radius: 0 !important;
color:black !important;

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
                   
                   
                   
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:black;">
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-12 mx-auto">
                <h1 class="text-center">
                    <input type="button" value="تسجيل خروج" class="btn btn-primary"
                        onclick="document.location.href='../../Adminlogin.php'">
                </h1>
            </div>
            <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 col-12  mx-auto">
                <h1 class="text-center">
                    <?php
                 //foreach ($finalname[0] as $key => $val) { echo $val; } 
                echo $res;
                 ?>
                    , أهلًا

                </h1>
            </div>
            </div>
            </div>

            <div class="container">

            <div class="p-5 mt-5 row"
            style="display:flex; justify-content:center; align-items:center; background:rgb(221, 219, 219);">
            <div class="col-11">
            <div class="h3 text-center mb-5">تقرير مفصل</div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mt-4" method="post">
                <div class="form-group text-right">
                    <label for="text">
                        <div class="font-weight-bold">نتيجة التحاليل </div>
                    </label>
                    <input type="text"  class="form-control" name="c_id" required>

               </div>   
           
                <hr>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">إضافة</button>
                </div>
            </form>
            </div>
            </div>
       
<?php

// Check if the form has been submitted
if (isset($_POST['c_id'])) {
    // Get the c_id value from the form
    $c_id = $_POST['c_id'];

    // Execute the SELECT COUNT(*) query
    $sql2 = "SELECT * FROM test WHERE c_id = '$c_id'";
    $stmt2 = sqlsrv_query( $conn, $sql2);
    //$row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC);
    // Fetch the count of the t_ran_code column
    $res2 = implode('',$row2);
   // echo "<div class='row mt-5 mb-5 mx-auto text-center'> <div class='col-12'><a class='btn btn-secondary' href='../Admin0.php'>$res2: عدد التحاليل التي قام بها العميل </a></div></div>";
 
   $date = $row['com_insert_date'];   
   $formatted_date = date("F j, Y, g:i a", strtotime($date));
   

   echo '<div class="text-center font-weight-bold mt-5 h5 mb-4"><caption> جميع نتائج التحاليل للموظف المدخل </caption></div>' ;

   echo '<table border="1" class="table table-striped text-center mx-auto mt-2">' ;
   echo '<tr>' ;
   echo '<th class="text-danger">Test Code</th>' ;
   echo '<th class="text-danger">Test Content</th>' ;
   echo '<th class="text-danger">Test Price</th>' ;
   echo '<th class="text-danger">Test Result</th>' ;
   echo '<th class="text-danger">Receptionist</th>' ;
   echo '<th class="text-danger">Test Date</th>' ;
   echo '</tr>' ;
   echo '<tr>' ;
   while ( $row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC)) {
       echo "<th> $row2[t_ran_code] </th>" ;
       echo "<th>  $row2[t_user_tests] </th>" ;
       echo "<th>  $row2[t_total_price] </th>" ;
       echo "<th>  $row2[t_result] </th>" ;
       echo "<th>  $row2[t_w_name] </th>" ;
       echo "<th>  $formatted_date  </th>" ;
       echo '</tr>' ;
   }
   echo '</table>' ;
   
}
echo "<div class='row mt-5 mb-5 mx-auto text-center'> <div class='col-12'><a class='btn btn-secondary' href='../../Admin1.php'>عودة</a></div></div>";
?>

            
<!--
<div class="p-5 mt-5 row"
            style="display:flex; justify-content:center; align-items:center; background:rgb(221, 219, 219);">
            <div class="col-11">
            <div class="h3 text-center mb-5">تقرير مفصل</div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mt-4" method="post">
                <div class="form-group text-right">
                    <label for="text">
                        <div class="font-weight-bold">نتيجة التحاليل </div>
                    </label>
                    <input type="text"  class="form-control" name="c_id_v2" required>

               </div>   
           
                <hr>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">إضافة</button>
                </div>
            </form>
            </div>
            </div>   
            
            </div>
-->

            <?php
/*
            if (isset($_POST['c_id_v2'])) {
                $c_id_v2 = $_POST['c_id_v2'];

                $sql3 = "SELECT count(t_ran_code),count(t_w_name) FROM test WHERE c_id = '$c_id_v2'";
                $stmt3 = sqlsrv_query($conn, $sql3);
                $row3 = sqlsrv_fetch_array($stmt3, SQLSRV_FETCH_ASSOC);

                $num = $row3['count(t_ran_code)'];
                $names = $row3['count(t_w_name)'];
                
echo "<div class='row mt-5 mb-5 mx-auto text-center'> <div class='col-12'><a class='btn btn-secondary' href='../Admin0.php'>".$row3['count(t_ran_code)'].": عدد التحاليل التي قام بها العميل </a></div></div>";
echo "<div class='row mt-5 mb-5 mx-auto text-center'> <div class='col-12'><a class='btn btn-secondary' href='../Admin0.php'>$names: عدد العاملين اللذين قاموا بهذه التحاليل </a></div></div>";

            

            }
// echo "<div class='row mt-5 mb-5 mx-auto text-center'> <div class='col-12'><a class='btn btn-secondary' href='../Admin0.php'>$res2: عدد التحاليل التي قام بها العميل </a></div></div>";
 */
   ?>


<script src="./js/adminlogin.js"></script>
</body>
</html>
