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
    <link rel="stylesheet" href="/css/login.css">


    <title>ลงทะเบียนวิ่งมาราธอน</title>
</head>

<body>
    <!-- Header  -->
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
                    <!-- <li class="nav-item dropdown">
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
                    </li> -->
                </ul>

                <a class="nav-link" href="/register" id="navbarRight">ลงทะเบียนสมาชิก</a>
                <!-- <a class="nav-link" href="/login" id="navbarRight">เข้าสู่ระบบ</a> -->

            </div>
        </div>
    </nav>

    <!-- header  -->




    <div class="container">

        <form action="/login/auth" method="post">

            <div class="form">
                <div class="title">เข้าสู่ระบบ</div>
                <a href="/register" class="subtitle">ลงทะเบียนสมาชิก</a>

                <div class="input-container ic1">
                    <label for="firstname">อีเมล</label>
                    <input class="input" type="text" name="email" id="email" value="<?= set_value('email'); ?>">

                </div>
                <div class="input-container ic2">
                    <label for="firstname">รหัสผ่าน</label>
                    <input class="input" type="password" name="password" id="password">
                </div>

                <!-- <div class="title">ประเภทกิจกรรม</div> -->
                <div class="btn_register">

                    <button type="submit" id="submit" class="submit" onclick="submit()">เข้าสู่ระบบ</button>

                </div>
        </form>
    </div>
    <!-- </form> -->

    </div>


    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function submit() {
        var email = $("#email").val();
        var password = $("#password").val();

        if (email == '') {
            Swal.fire({
                title: "อีเมลต้องไม่เป็นค่าว่าง!",
                text: "กรุณาเช็คอีเมลอีกครั้ง!!",
                icon: "warning",
                button: "OK",
                timer: 3000
            });
            // alert("รหัสนักศึกษาต้องไม่เป็นค่าว่าง!");
        } else if (password == '') {
            Swal.fire({
                title: "รหัสผ่านต้องไม่เป็นค่าว่าง!",
                text: "กรุณาเช็ครหัสผ่านอีกครั้ง!!",
                icon: "warning",
                button: "OK",
                timer: 3000
            });
            // alert("รหัสผ่านต้องไม่เป็นค่าว่าง!");
        }


    }
    </script>
</body>

</html>