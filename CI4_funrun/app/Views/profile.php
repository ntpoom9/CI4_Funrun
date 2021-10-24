<?php 
date_default_timezone_set('Asia/Bangkok');
$session = session(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- icon  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- icon tab  -->
    <link rel="shortcut icon" type="image/x-icon" href="img/Funrun.png" />
    <!-- css header  -->
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/register.css">


    <title>ลงทะเบียนสมาชิก</title>
</head>

<body>

    <div id="container">
        <!-- Header  -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index_user">FUNRUN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                ประเภทการวิ่ง
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">FUN RUN</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">MINI MARATHON</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">VIP</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Super VIP</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="btn-group">
                        <a class="nav-link dropdown-toggle" href="/search_page_index" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">

                            &nbsp;&nbsp;<?php echo $session->get('name'); ?>&nbsp;&nbsp;

                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"
                            aria-labelledby="navbarDropdown">
                            <li> <a class="dropdown-item" href="/profile">
                                    <i class="far fa-address-card"></i>&nbsp;&nbsp;ข้อมูลส่วนตัว</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('/Login/logout'); ?>"
                                    id="logout_btn">
                                    <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;ออกจากระบบ</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </nav>

        <!-- header  -->

        <h1>Profile</h1>



        <!-- footer  -->
        <footer class="bg-dark text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3">
                © 2021 Copyright :
                <a class="text" href="#" id="footer_link">Funrun.com&nbsp;&nbsp;</a>
                <a class="text" href="https://www.facebook.com/" id="footer_link"><i
                        class="fab fa-facebook-square"></i>&nbsp;&nbsp;</a>
                <a class="text" href="#" id="footer_link">012-3456789</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- footer  -->
</body>

</html>