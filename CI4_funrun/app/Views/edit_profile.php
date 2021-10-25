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
    <link rel="shortcut icon" type="image/x-icon" href="img/logo_tab_run.png" />
    <!-- css header  -->
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/edit_profile.css">


    <title>แก้ไขข้อมูลผู้ใช้</title>
</head>

<body>

    <!-- header  -->

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/profile">FUNRUN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item dropdown">
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
                    </li> -->
                </ul>

                <div class="btn-group">
                    <a class="nav-link dropdown-toggle" href="/search_page_index" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">

                        &nbsp;&nbsp;<?php echo $session->get('name'); ?>&nbsp;&nbsp;

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start" aria-labelledby="navbarDropdown">
                        <li> <a class="dropdown-item" href="/profile" id="profile_btn">
                                <i class="far fa-address-card"></i>&nbsp;&nbsp;ข้อมูลผู้สมัคร</a></li>
                        <li> <a class="dropdown-item" href="/edit_profile" id="edit_btn">
                                <i class="far fa-edit"></i>&nbsp;&nbsp;แก้ไขข้อมูล</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url('/Login/logout'); ?>" id="logout_btn">
                                <i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;ออกจากระบบ</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <!-- header  -->



    <div class="container">

        <?php $id_card = $session->get('id_card');?>
        <form action="<?= base_url('/update/'. $id_card) ?>" method="POST">
            <input type="hidden" name="_method" value="PUT" />

            <div class="form">

                <div class="title">ข้อมูลผู้สมัคร</div>
                <!-- <div class="subtitle">ข้อมูลผู้สมัคร</div> -->


                <div class="input-container ic1">
                    <label for="firstname">เลขบัตรประชาชน</label>
                    <input class="input" type="text" name="member" id="member" value="<?= $session->get('id_card'); ?>"
                        disabled>


                </div>
                <div class="input-container ic2">
                    <label for="firstname">ชื่อ-นามสกุล</label>
                    <input class="input" type="text" name="name" id="name" value="<?php echo $session->get('name'); ?>"
                        disabled>
                    <small id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('name')): ?>
                        <?= $validation->getError('name'); ?>
                        <?php endif; ?>
                        <?php endif; ?></small>
                </div>
                <div class="input-container ic2">
                    <label for="firstname">อายุ <small style="color:red;"> *แก้ไขได้</small></label>
                    <input class="input" type="text" name="age" id="age" value="<?php echo $session->get('age'); ?>">
                    <small id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('age')): ?>
                        <?= $validation->getError('age'); ?>
                        <?php endif; ?>
                        <?php endif; ?></small>
                </div>
                <div class="input-container ic2">
                    <label for="firstname">อีเมล </label>
                    <input class="input" type="text" name="email" id="email"
                        value="<?php echo $session->get('email'); ?>" disabled>
                    <small id="error"><?php  if (isset($validation)) : ?>
                        <?php if($validation->hasError('email')): ?>
                        <?= $validation->getError('email'); ?>
                        <?php endif; ?>
                        <?php endif; ?></small>
                </div>



                <div class="btn_register">
                    <input type="hidden" name="id_card" value="<?= $session->get('id_card');?>">
                    <button type="submit" id="submit" class="submit">อัพเดทข้อมูล</button>
                </div>
            </div>
        </form>

    </div>


    </div>
</body>

</html>