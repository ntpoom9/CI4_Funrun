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
    <link rel="shortcut icon" type="image/x-icon" href="img/logo_tab_run.png" />
    <!-- css header  -->
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/category.css">
    <title>ประเภทกิจกรรม</title>
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
            <a class="navbar-brand" href="index_user">FUNRUN</a>
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
    <div class="container mt-5 mb-3">
        <div class="row" id="card_container">
            <?php if($category): ?>
            <?php foreach($category as $row): ?>
            <div class="col">
                <div class="card" id="col_card">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <img src="img/Funrun.gif" alt="" style="width: 100px; height:auto;">
                            <div class="ms-2 c-details">
                                <h6 class="mb-0">ประเภท : <?php echo $row['category_name']; ?></h6>
                            </div>
                        </div>
                        <!-- <div class="badge"> <span>Design</span> </div> -->
                    </div>
                    <div class="mt-3">
                        <p class="heading">ระยะทาง : <?php echo $row['length']; ?></p>
                        <p class="heading">ค่าสมัคร : <?php echo $row['price']; ?> บาท</p>
                        <div class="mt-3">
                            <h3 class="mb-0">เส้นทางการวิ่ง</h3>
                            <div class="mt-3"> <img src="img/map.png" alt="" style="width: 250px; height:auto;"> </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <!-- row  -->
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