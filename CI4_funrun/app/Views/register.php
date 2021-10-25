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

                <!-- <a class="nav-link" href="/register" id="navbarRight">ลงทะเบียนงานวิ่ง</a> -->
                <a class="nav-link" href="/login" id="navbarRight">เข้าสู่ระบบ</a>

            </div>
        </div>
    </nav>

    <!-- header  -->




    <div class="container">

        <?= form_open(); ?>

        <div class="form">
            <div class="title">ข้อมูลผู้สมัคร</div>
            <!-- <div class="subtitle">ข้อมูลผู้สมัคร</div> -->
            <div class="input-container ic1">
                <label for="firstname">เลขบัตรประชาชน</label>
                <input class="input" type="text" name="id_card" id="id_card" value="<?= set_value('id_card'); ?>">
                <small id="error"><?php  if (isset($validation)) : ?>
                    <?php if($validation->hasError('id_card')): ?>
                    <?= $validation->getError('id_card'); ?>
                    <?php endif; ?>
                    <?php endif; ?></small>

            </div>
            <div class="input-container ic2">
                <label for="firstname">ชื่อ-นามสกุล</label>
                <input class="input" type="text" name="name" id="name" value="<?= set_value('name'); ?>">
                <small id="error"><?php  if (isset($validation)) : ?>
                    <?php if($validation->hasError('name')): ?>
                    <?= $validation->getError('name'); ?>
                    <?php endif; ?>
                    <?php endif; ?></small>
            </div>
            <div class="input-container ic2">
                <label for="firstname">อายุ</label>
                <input class="input" type="text" name="age" id="age" value="<?= set_value('age'); ?>">
                <small id="error"><?php  if (isset($validation)) : ?>
                    <?php if($validation->hasError('age')): ?>
                    <?= $validation->getError('age'); ?>
                    <?php endif; ?>
                    <?php endif; ?></small>
            </div>
            <div class="input-container ic2">
                <label for="firstname">อีเมล</label>
                <input class="input" type="text" name="email" id="email" value="<?= set_value('email'); ?>">
                <small id="error"><?php  if (isset($validation)) : ?>
                    <?php if($validation->hasError('email')): ?>
                    <?= $validation->getError('email'); ?>
                    <?php endif; ?>
                    <?php endif; ?></small>
            </div>
            <div class="input-container ic2">
                <label for="firstname">รหัสผ่าน</label>
                <input class="input" type="password" name="password" id="password"
                    value="<?= set_value('password'); ?>">
                <small id="error"><?php  if (isset($validation)) : ?>
                    <?php if($validation->hasError('password')): ?>
                    <?= $validation->getError('password'); ?>
                    <?php endif; ?>
                    <?php endif; ?></small>
            </div>
            <hr style="color:#ffffff; height:5px;">
            <!-- <div class="title">เลือกกิจกรรม</div> -->

            <table class="table_detail">
                <thead>
                    <tr>
                        <th style="width:150px;">ชื่อกิจกรรม</th>
                        <th style="width:100px;">ระยะทาง</th>
                        <th style="width:100px;">ค่าสมัคร</th>
                        <!-- <th style="width:100px;"></th> -->
                    </tr>

                </thead>
                <tbody>
                    <?php if($category): ?>
                    <?php foreach($category as $row): ?>
                    <tr>
                        <td><?php echo $row['category_name']; ?></td>
                        <td><?php echo $row['length']; ?></td>
                        <td><?php echo $row['price']; ?> บาท.</td>
                        <?php $category_id = $row['category_id'];?>
                        <!-- <td><a class="btn btn-warning"
                                href="<?php echo base_url('/register_category/'.$category_id);?>">สมัคร</a></td> -->

                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
            <hr style="color:#ffffff; height:5px;">
            <div class="input-container ic3">
                <label for="firstname">กิจกรรม</label>
                <select class="select" id="category_run" name="category_run" style="width:205px;">
                    <option selected><?= set_value('category_run');?></option>
                    <option>------------------------------</option>
                    <option value="1">Fun run</option>
                    <option value="2">MINI MARATHON</option>
                    <option value="3">VIP</option>
                    <option value="5">Super VIP</option>
                </select><br>
                <small id="error"><?php  if (isset($validation)) : ?>
                    <?php if($validation->hasError('category_run')): ?>
                    <?= $validation->getError('category_run'); ?>
                    <?php endif; ?>
                    <?php endif; ?>
                </small>
            </div>

            <div class="input-container ic3">
                <label for="firstname">หมายเลขผู้สมัคร</label>
                <input class="input" type="ID" name="ID" id="ID" value="<?= set_value('ID'); ?>"
                    placeholder="RUN+ตัวเลข7หลัก เช่น RUN0000001">
                <small id="error"><?php  if (isset($validation)) : ?>
                    <?php if($validation->hasError('ID')): ?>
                    <?= $validation->getError('ID'); ?>
                    <?php endif; ?>
                    <?php endif; ?></small>
            </div>



            <div class="btn_register">
                <button type="submit" id="submit" class="submit">ลงทะเบียน</button>

            </div>
            <?= form_close(); ?>
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




</body>

</html>