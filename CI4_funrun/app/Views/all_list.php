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

    <title>รายการผู้ลงสมัคร</title>
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
            <a class="navbar-brand" href="index_admin">FUNRUN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="all_member" id="navbarRight">ผู้ลงสมัคร</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="all_list"
                            id="navbarRight">รายการลงสมัคร</a>
                    </li>
                </ul>

                <!-- <a class="nav-link" href="/register" id="navbarRight">ลงทะเบียนงานวิ่ง</a> -->
                <a class="nav-link" href="<?php echo base_url('/Login_admin/logout'); ?>">ออกจากระบบ</a>

            </div>
        </div>
    </nav>

    <!-- header  -->



    <!-- content  -->
    <div class="content">
        <br><br>
        <div class="container" id="container_card">

            <div class="card">
                <br>
                <center>
                    <h4>ข้อมูลผู้ลงสมัคร</h4>
                </center>
                <div class="card-body">
                    <hr>


                    <!-- table data  -->
                    <div class="mt-3">
                        <table class="table table-bordered" id="users-list">
                            <thead>
                                <tr class="titledata">
                                    <th style="width: 50px;">หมายเลขผู้สมัคร</th>
                                    <th style="width: 100px;">เลขบัตรประชาชน</th>
                                    <th style="width: 50px;">กิจกรรมที่สมัคร</th>
                                    <th style="width: 70px;">เมนู</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if($list): ?>
                                <?php foreach($list as $row): ?>
                                <tr class="contentdata">
                                    <td><?php echo $row['ID']; ?></td>
                                    <td><?php echo $row['member']; ?></td>
                                    <td><?php echo $row['category_run']; ?></td>

                                    <td>
                                        <!-- <form action="</?= base_url('/delete-method/'.$row['ID']);?>" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger">ลบรายการ</button>
                                        </form> -->
                                        <a class="btn btn-danger"
                                            href="<?= base_url('/delete_list/'.$row['ID']);?>">ลบรายการ</a>

                                    </td>

                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>

                        </table>

                    </div>
                    <!-- table data  -->

                </div>


                <!-- สำหรับลูกเล่น -->

                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <link rel="stylesheet" type="text/css"
                    href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
                <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
                </script>


                <script>
                $(document).ready(function() {
                    $('#users-list').DataTable();
                });
                </script>

                <!-- สำหรับลูกเล่น & filter -->




            </div>
            <!-- card-body -->

        </div>
        <!-- card -->

    </div>
    <!-- container-card -->

    </div>
    <!-- content -->



    </div>
    <!-- container -->

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