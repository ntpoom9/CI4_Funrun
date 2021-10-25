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

    <title>Funrun วิ่งมาราธอน</title>
</head>

<body>

    <!-- <nav class="navbar">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <div class="row" id="logo_funrun">
                    <h2 id="logo_text"><img src="img/Funrun.gif" alt="" width="30" height="24" class="logo"> Funrun</h2>
                </div>
            </a>

        </div>
    </nav> -->
    <!-- header  -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">FUNRUN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="category" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            ประเภทการวิ่ง
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="category">FUN RUN</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="category">MINI MARATHON</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="category">VIP</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="category">Super VIP</a></li>
                        </ul>
                    </li>
                </ul>

                <a class="nav-link" href="/register" id="navbarRight">ลงทะเบียนสมาชิก</a>
                <a class="nav-link" href="/login" id="navbarRight">เข้าสู่ระบบ</a>

            </div>
        </div>
    </nav>

    <!-- header  -->

    <!-- content  -->
    <div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner" style="height:570px;">

                <div class="carousel-item active">
                    <video autoplay muted loop id="myVideo">
                        <source src="img/run3.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="carousel-item">
                    <video autoplay muted loop id="myVideo">
                        <source src="img/run2.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="carousel-item">
                    <video autoplay muted loop id="myVideo">
                        <source src="img/run1.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>


                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
    </div>
    <!-- content  -->

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