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

    <title>ลงทะเบียนวิ่งมาราธอน</title>
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

                <a class="nav-link" href="/register" id="navbarRight">ลงทะเบียนงานวิ่ง</a>
                <a class="nav-link" href="/login" id="navbarRight">เข้าสู่ระบบ</a>

            </div>
        </div>
    </nav>

    <!-- header  -->




    <div id="u0_div" class="container">

        <!--------------------------------------(ข้อมูลนักศึกษา)------------------------------------------------------>

        <!-- <form id="create-form" action="/register_run/save" method="post" class="register-form"> -->
        <?= form_open(); ?>

        <div id="u1_text">
            <p><span>ลงทะเบียนงานวิ่ง</span></p>
        </div>

        <!-- ------------------------------------------------(ข้อมูลนักศึกษา)---------------------------------------------------------------- -->
        <hr>
        <div id="hr">ข้อมูลผู้ลงสมัคร <span style="color:red">* จำเป็นต้องกรอกข้อมูล</span></div>


        <div class="form-row">
            <div class="form-group" id="regis0">
                <label for="name">เลขบัตรประชาชน</label>
                <input type="text" name="id_card" id="id_card" value="<?= set_value('id_card'); ?>">
                <span id="error"><?php  if (isset($validation)) : ?>
                    <?php if($validation->hasError('id_card')): ?>
                    <?= $validation->getError('id_card'); ?>
                    <?php endif; ?>
                    <?php endif; ?></span>
            </div>

            <div class="form-group">
                <label for="name">ชื่อ-นามสกุล</label>
                <input type="text" name="name" id="name" value="<?= set_value('name'); ?>">
                <span id="error"><?php  if (isset($validation)) : ?>
                    <?php if($validation->hasError('name')): ?>
                    <?= $validation->getError('name'); ?>
                    <?php endif; ?>
                    <?php endif; ?></span>
            </div>

            <div class="form-group">
                <label for="name">อายุ</label>
                <input type="text" name="age" id="age" value="<?= set_value('age'); ?>">
                <span id="error"><?php  if (isset($validation)) : ?>
                    <?php if($validation->hasError('age')): ?>
                    <?= $validation->getError('age'); ?>
                    <?php endif; ?>
                    <?php endif; ?></span>
            </div>

            <div class="form-group">
                <label for="name">อีเมล</label>
                <input type="text" name="email" id="email" value="<?= set_value('email'); ?>">
                <span id="error"><?php  if (isset($validation)) : ?>
                    <?php if($validation->hasError('email')): ?>
                    <?= $validation->getError('email'); ?>
                    <?php endif; ?>
                    <?php endif; ?></span>
            </div>

        </div>

        <div class="form-row">
            <div class="form-group" id="regis0">
                <label for="name">รหัสผ่าน</label>
                <input type="password" name="password" id="password" value="<?= set_value('password'); ?>">
                <span id="error"><?php  if (isset($validation)) : ?>
                    <?php if($validation->hasError('password')): ?>
                    <?= $validation->getError('password'); ?>
                    <?php endif; ?>
                    <?php endif; ?></span>
            </div>
        </div>






        <div id="btn">
            <center>
                <button type="submit" id="submit" class="btn btn-primary"
                    style="width:250px; height:auto;">ลงทะเบียน</button>
                <a href="/home" class="btn btn-danger" style="width:250px; height:auto;">ยกเลิก</a>
            </center>
        </div>
        <?= form_close(); ?>
        <!-- </form> -->

    </div>


    </div>
    <!-- <br> -->
    <footer class="bg-dark text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3">
            © 2020 Copyright:
            <a class="text" href="#" id="footer_link">ISAC.org</a>
        </div>
        <!-- Copyright -->
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function upperCharacter() {
        var x = document.getElementById("FName_eng");
        var y = document.getElementById("LName_eng");
        x.value = x.value.toUpperCase();
        y.value = y.value.toUpperCase();
    }

    // function submit() {
    //     var stu_id = $("#stu_id").val();
    //     var password = $("#password").val();
    //     var name_prefix = $("#name_prefix").val();
    //     var FName = $("#FName").val();
    //     var LName = $("#LName").val();
    //     var FName_eng = $("#FName_eng").val();
    //     var LName_eng = $("#LName_eng").val();
    //     var id_cardnumber = $("#id_cardnumber").val();
    //     var sex = $("#sex").val();
    //     var faculty = $("#faculty").val();
    //     var major = $("#major").val();
    //     var edu_level = $("#edu_level").val();
    //     var first_year = $("#first_year").val();
    //     var d_m_y_birth = $("#d_m_y_birth").val();
    //     var province_birth = $("#province_birth").val();
    //     var nationality = $("#nationality").val();
    //     var religion = $("#religion").val();
    //     var Address = $("#Address").val();
    //     var SubDistrict = $("#SubDistrict").val();
    //     var District = $("#District").val();
    //     var Province = $("#Province").val();
    //     var Zipcode = $("#Zipcode").val();
    //     var phone_number = $("#phone_number").val();


    //     if (stu_id == '' || password == '' || name_prefix == '' ||
    //         FName == '' || LName == '' || FName_eng == '' ||
    //         LName_eng == '' || id_cardnumber == '' || sex == '' ||
    //         faculty == '' || major == '' || edu_level == '' ||
    //         first_year == '' || d_m_y_birth == '' || province_birth == '' ||
    //         nationality == '' || religion == '' || Address == '' ||
    //         SubDistrict == '' || District == '' || Province == '' ||
    //         Zipcode == '' || phone_number == '') {
    //         Swal.fire({
    //             title: "กรอกข้อมูลไม่ครบ!",
    //             text: "กรุณาเช็คข้อมูลอีกครั้ง!",
    //             icon: "warning",
    //             button: "OK",
    //         });


    //     } else {

    //         Swal.fire({

    //             icon: 'success',
    //             title: 'ลงทะเบียนสำเร็จแล้ว!!',
    //             showConfirmButton: false,
    //             timer: 1000000
    //         });


    //     }

    // }


    // $('#btn').click(function() {

    //     var stu_id = $("#stu_id").val();
    //     var password = $("#password").val();
    //     var name_prefix = $("#name_prefix").val();
    //     var FName = $("#FName").val();
    //     var LName = $("#LName").val();
    //     var FName_eng = $("#FName_eng").val();
    //     var LName_eng = $("#LName_eng").val();
    //     var id_cardnumber = $("#id_cardnumber").val();
    //     var sex = $("#sex").val();
    //     var faculty = $("#faculty").val();
    //     var major = $("#major").val();
    //     var edu_level = $("#edu_level").val();
    //     var first_year = $("#first_year").val();
    //     var d_m_y_birth = $("#d_m_y_birth").val();
    //     var province_birth = $("#province_birth").val();
    //     var nationality = $("#nationality").val();
    //     var religion = $("#religion").val();
    //     var Address = $("#Address").val();
    //     var SubDistrict = $("#SubDistrict").val();
    //     var District = $("#District").val();
    //     var Province = $("#Province").val();
    //     var Zipcode = $("#Zipcode").val();
    //     var phone_number = $("#phone_number").val();


    //     if (stu_id == '' || password == '' || name_prefix == '' ||
    //         FName == '' || LName == '' || FName_eng == '' ||
    //         LName_eng == '' || id_cardnumber == '' || sex == '' ||
    //         faculty == '' || major == '' || edu_level == '' ||
    //         first_year == '' || d_m_y_birth == '' || province_birth == '' ||
    //         nationality == '' || religion == '' || Address == '' ||
    //         SubDistrict == '' || District == '' || Province == '' ||
    //         Zipcode == '' || phone_number == '') {
    //         swal({
    //             title: "กรอกข้ออมูลไม่ครบ!",
    //             text: "กรุณาเช็คข้อมูลอีกครั้ง!!",
    //             icon: "warning",
    //             button: "OK",
    //         });
    //     } else {
    //         swal({
    //             title: "ลงทะเบียนสำเร็จแล้ว!!",
    //             text: "คลิกที่ปุ่ม!!",
    //             icon: "success",
    //             button: "OK",
    //         });
    //     }


    // });
    </script>




</body>

</html>