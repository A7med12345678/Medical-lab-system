<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ERROR | E_PARSE);
include("connect.php");
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

<div class="container">
    <h2 class="mt-5 text-right">تسجيل دخول فريق عمل</h2>
    <div class="p-5 mt-5" style="display:flex; justify-content:center; align-items:center; background:rgb(221, 219, 219); border-radius:30px;">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="form-group text-right">
              <label for="text">اسم المستخدم</label>
              <input type="text" class="form-control" placeholder="متناس ليتخصملك يومين" name="user">
            </div>
            <div class="form-group text-right">
              <label for="pwd"> كلمة المرور</label>
              <input type="password" class="form-control" placeholder="? تمام" name="pass">
            </div>

            

            <div class="form-group form-check custom-control custom-switch">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" disabled><span style="opacity:0.3;"> تذكرني
            </span>  
            </label>
            </div>
            <button type="submit" class="btn btn-primary" onclick="admin()">دخول</button>
          </form>

    </div>

</div>


<script src="./js/adminlogin.js"></script>
</body>
</html>


<?php
error_reporting(E_ALL & ~E_NOTICE);


//select and fetch required cloumns from worker table to login (userr,pass,access) :
$sql = "SELECT w_id,w_pass,w_access from worker";
$params = array(1, "some data");
$stmt = sqlsrv_query( $conn, $sql, $params);
$row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC);

// Arrays to insert Prevoius columns in : 
$user = [];
$pass = [];
$access = [];
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    array_push($user, $row['w_id']);
    array_push($pass, $row['w_pass']);
    array_push($access, $row['w_access']);
        
}

// Recieve login data : 
$userinput=$_REQUEST['user'];
$passinput=$_REQUEST['pass'];

// Testing on error login case : 

/*$userinput="20223";
$passinput="Youmna.3030    ";
print_r($user);
print_r($pass);
print_r($access);
*/

if (in_array($userinput, $user) && in_array($passinput, $pass) && (array_search($userinput, $user) == array_search($passinput, $pass))) {

    //Insert login time
    $login_time = date("Y-m-d h:i:s");
    $insert_record = "INSERT INTO login_record (w_id, w_login_time) Values('$userinput', '$login_time')";
    $stmt_insert_record = sqlsrv_query( $conn, $insert_record, $params);

    //Redirect employee to dashboard due to his "access"
    if ($access[array_search($userinput, $user)]== 1) {
        echo "<meta http-equiv='refresh' content='0;url=./Admin1/Admin1.php'>"; 
    }
    if ($access[array_search($userinput, $user)]== 0) {
        echo "<meta http-equiv='refresh' content='0;url=./Admin0/Admin0.php'>"; 
    }
      if ($access[array_search($userinput, $user)]== 2) {
        echo "<meta http-equiv='refresh' content='0;url=./Admin2.php'>"; 
    }
}
/*
else{
    $insert_record_f = "INSERT INTO login_record (w_id, w_login_time,attemp_pass) Values('$userinput', '$login_time', '$passinput')";
    $stmt_insert_record_f = sqlsrv_query( $conn, $insert_record_f, $params);

}
*/

//Pass worker id to his dashboard (to select his name) :
$_SESSION['w_id'] = $userinput;



?>
