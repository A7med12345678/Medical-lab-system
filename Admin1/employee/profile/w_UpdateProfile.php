<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ERROR | E_PARSE);
error_reporting(E_ALL);
ini_set('error_reporting', E_WARNING);
    if(!isset($_SERVER['HTTP_REFERER'])){
        // redirect them to your desired location
        header('location:../error.php');

        exit;
    }
?>


<?php
error_reporting(E_ALL & ~E_NOTICE);

$name = $_SESSION['test'];


$serverName = "DESKTOP-388SI7B"; 
$connectionOptions = [ "Database"=>"fcailab", "Uid"=>"", "PWD"=>""];
$conn = sqlsrv_connect($serverName, $connectionOptions);
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

#ex a {
    border-radius: 0 !important;
    color: black !important;

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



    <div class="container mt-5">
        <div class="row">
            <div class="col-12  mx-auto">
                <h1 class="text-center">
                    تعديل موظف موجود مسبقًا
                </h1>
            </div>
        </div>
        <h2 class="mt-5 text-right"></h2>
        <div class="p-5 mt-5 row"
            style="display:flex; justify-content:center; align-items:center; background:rgb(221, 219, 219);">
            <div class="col-11">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="form-group text-right">
                        <label for="text">
                            <div class="font-weight-bold">id الموظف </div>
                        </label>
                        <input type="text" class="form-control" placeholder="" name="w_id" required>
                    </div>
                    <hr>

                <div class="form-group text-right">
                    <label for="text">اسم الموظف </label>
                    <input type="text" class="form-control" placeholder="" name="w_name" required value="كما هي">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="male" id="flexCheckDefault" name="w_gender">
                    <label class="form-check-label" for="flexCheckDefault">
                        male </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value="female" id="flexCheckChecked" name="w_gender">
                    <label class="form-check-label" for="flexCheckChecked">
                        female </label>
                </div>

                <div class="form-group text-right">
                    <label for="text">عنوان الموظف</label>
                    <input type="text" class="form-control" placeholder="" name="w_address" value="كما هي" required>
                </div>
                <div class="form-group text-right">
                    <label for="text">سن الموظف</label>
                    <input type="text" class="form-control" placeholder="" name="w_age" value="كما هي" required>
                </div>
                
                <div class="form-group text-right">
                    <label for="text">رقم الموظف القومي</label>
                    <input type="text" class="form-control" placeholder="" name="w_ssin" value="كما هي" required>
                </div>
                <div class="form-group text-right">
                    <label for="text">بريد الموظف الالكتروني</label>
                    <input type="text" class="form-control" name="w_mail" value="كما هي" required>
                </div>
                <div class="form-group text-right">
                    <label for="text">رقم تليفون الموظف</label>
                    <input type="text" class="form-control" placeholder="" value="كما هي" name="w_phone">
                </div>
                <div class="form-group text-right">
                    <label for="text">راتب الموظف</label>
                    <input type="text" class="form-control" placeholder="" value="كما هي" name="w_salary">
                </div>
                <div class="form-group text-right">
                    <label for="text">صلاحية الموظف</label>
                    <input type="text" class="form-control" placeholder="" value="كما هي" name="w_access">
                </div>



                <button type="submit" class="btn btn-primary">تسجيل</button>
            </form>

            </div>
        </div>
    </div>

    <?php

$w_id=$_REQUEST['w_id'];

$u_w_address=$_REQUEST['w_address'];
$u_w_name=$_REQUEST['w_name'];
$u_w_mail=$_REQUEST['w_mail'];
$u_w_age=$_REQUEST['w_age'];
$u_w_gender=$_REQUEST['w_gender'];
$u_w_ssin=$_REQUEST['w_ssin'];
$u_w_phone=$_REQUEST['w_phone'];

$u_w_access=$_REQUEST['w_access'];
$u_w_salary=$_REQUEST['w_salary'];
$what=[];



// check if inputed id is exist :
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ifsql = "IF EXISTS (SELECT w_id FROM worker WHERE w_id = '$w_id') print'exist' else print'no'";
        $params = array(1, "some data");
        $ifstmt = sqlsrv_query( $conn, $ifsql, $params);
        $ifrow = sqlsrv_fetch_array($ifstmt, SQLSRV_FETCH_ASSOC);
        $res = implode('',$ifrow);
            }

if ($res = "exist") {

                
if($u_w_address == "كما هي"){

}else{
$sql = "UPDATE worker SET w_address = '$u_w_address' WHERE w_id = '$w_id';";
$stmt = sqlsrv_query( $conn, $sql, $params);
if(sqlsrv_rows_affected($stmt)){
    //    echo "<div class='row'><div class='p-5 mt-5 col-9 mx-auto text-center h3 text-danger' style='background:rgb(221, 219, 219)'>تم تعديل اسم الموظف بنجاح</div></div>";
    array_push($what, "عنوان");  
}
}


if($u_w_name == "كما هي"){

}else{
$sql2 = "UPDATE worker SET w_name = '$u_w_name' WHERE w_id = '$w_id';";
$stmt2 = sqlsrv_query( $conn, $sql2, $params);
if(sqlsrv_rows_affected($stmt2)){
    //    echo "<div class='row'><div class='p-5 mt-5 col-9 mx-auto text-center h3 text-danger' style='background:rgb(221, 219, 219)'>تم تعديل اسم الموظف بنجاح</div></div>";
    array_push($what, "اسم");
   
}

}

if($u_w_age == "كما هي"){

}else{
$sql3 = "UPDATE worker SET w_age = '$u_w_age' WHERE w_id = '$w_id';";
$stmt3 = sqlsrv_query( $conn, $sql3, $params);

if(sqlsrv_rows_affected($stmt3)){
//    echo "<div class='row'><div class='p-5 mt-5 col-9 mx-auto text-center h3 text-danger' style='background:rgb(221, 219, 219)'>تم تعديل سن الموظف بنجاح</div></div>";
array_push($what, "سن");
}

}

if($u_w_mail == "كما هي"){

}else{
$sql4 = "UPDATE worker SET w_mail = '$u_w_mail' WHERE w_id = '$w_id';";
$stmt4 = sqlsrv_query( $conn, $sql4, $params);
if(sqlsrv_rows_affected($stmt4)){
//    echo "<div class='row'><div class='p-5 mt-5 col-9 mx-auto text-center h3 text-danger' style='background:rgb(221, 219, 219)'>تم تعديل بريد الموظف بنجاح</div></div>";
array_push($what, "بريد الكتروني");
}

}

if($u_w_ssin == "كما هي"){

}else{
$sql5 = "UPDATE worker SET w_ssin = '$u_w_ssin' WHERE w_id = '$w_id';";
$stmt5 = sqlsrv_query( $conn, $sql5, $params);
if(sqlsrv_rows_affected($stmt5)){
//    echo "<div class='row'><div class='p-5 mt-5 col-9 mx-auto text-center h3 text-danger' style='background:rgb(221, 219, 219)'>تم تعديل رقم قومي الموظف بنجاح</div></div>";
array_push($what, "رقم قومي");
}
}

if($u_w_phone == "كما هي"){

}else{
$sql6 = "UPDATE worker SET w_phone = '$u_w_phone' WHERE w_id = '$w_id';";
$stmt6 = sqlsrv_query( $conn, $sql6, $params);
if(sqlsrv_rows_affected($stmt6)){
//    echo "<div class='row'><div class='p-5 mt-5 col-9 mx-auto text-center h3 text-danger' style='background:rgb(221, 219, 219)'>تم تعديل رقم تليفون الموظف بنجاح</div></div>";
array_push($what, "رقم");
}
}

if($u_w_access == "كما هي"){

}else{
$sql7 = "UPDATE worker SET w_access = '$u_w_access' WHERE w_id = '$w_id';";
$stmt7 = sqlsrv_query( $conn, $sql7, $params);

if(sqlsrv_rows_affected($stmt7)){
//    echo "<div class='row'><div class='p-5 mt-5 col-9 mx-auto text-center h3 text-danger' style='background:rgb(221, 219, 219)'>تم تعديل صلاحية الموظف بنجاح</div></div>";
    array_push($what, "صلاحية");
}
}


if($u_w_salary == "كما هي"){

}else{
$sql8 = "UPDATE worker SET w_salary = '$u_w_salary' WHERE w_id = '$w_id';";
$stmt8 = sqlsrv_query( $conn, $sql8, $params);
if(sqlsrv_rows_affected($stmt8)){
    array_push($what, "راتب");
//    echo "<div class='row'><div class='p-5 mt-5 col-9 mx-auto text-center h3 text-danger' style='background:rgb(221, 219, 219)'>تم تعديل راتب الموظف بنجاح</div></div>";
}
}

if($u_w_gender == null){

}else{
$sql9 = "UPDATE worker SET w_gender = '$u_w_gender' WHERE w_id = '$w_id';";
$stmt9 = sqlsrv_query( $conn, $sql9, $params);
if(sqlsrv_rows_affected($stmt9)){
 //   echo "<div class='row'><div class='p-5 mt-5 col-9 mx-auto text-center h3 text-danger' style='background:rgb(221, 219, 219)'>تم تعديل نوع الموظف بنجاح</div></div>";
 array_push($what, "نوع");
}
}

} 
 

if (empty($what)) {
     echo "<div class='row'><div class='p-5 mt-5 col-9 mx-auto text-center h3 text-danger' style='background:rgb(221, 219, 219)'>الرجاء ملء البيانات أعلاه لتحديث بيانات الموظف</div></div>";
} else {
    $whatdone = implode(', ',$what);
    echo "<div class='row'><div class='p-5 mt-5 col-9 mx-auto text-center h3' style='background:rgb(221, 219, 219)'>: تم تعديل بيانات الموظف الآتية <br><br>$whatdone</div></div>"."<br>";
    echo "</div>";
}

echo "<div class='row mt-3 mx-auto text-center'> <div class='col-12'><a class='btn btn-secondary' href='../../Admin1.php'>عودة</a></div></div>";

?>

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