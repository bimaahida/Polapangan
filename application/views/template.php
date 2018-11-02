<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Pola Pangan</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?= base_url() ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url() ?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel='stylesheet'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?= base_url() ?>assets/datatables/dataTables.bootstrap.css"/>
    <link rel="stylesheet" href="<?= base_url() ?>assets/datatables/dataTables.bootstrap.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/datatables/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?= base_url() ?>assets/datatables/dataTables.bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/js/material.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/js/Chart.js"></script>
    <script src="<?= base_url() ?>assets/js/Chart.min.js"></script>
</head>

<body style="background-color: #f5f5f5;">
    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="<?= base_url()?>" class="simple-text">
                    Pola Pangan
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <?php if ($this->session->userdata('auth')['status'] == 1) { ?>
                        <li <?php if ($menus == 'dashboard') {echo 'class="active"';}?>>
                            <a href="<?= base_url()?>dashboard">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                    <?php }?>
                    <li <?php if ($menus == 'user') {echo 'class="active"';}?>>
                        <a href="<?= base_url()?>user">
                            <i class="material-icons">how_to_reg</i>
                            <p>Masyarakat</p>
                        </a>
                    </li>
                    <li <?php if ($menus == 'keluarga') {echo 'class="active"';}?>>
                        <a href="<?= base_url()?>keluarga">
                            <i class="material-icons">contacts</i>
                            <p>Keluarga</p>
                        </a>
                    </li>
                    <li <?php if ($menus == 'pangan') {echo 'class="active"';}?>>
                        <a href="<?= base_url()?>pangan">
                            <i class="material-icons">local_dining</i>
                            <p>Pangan</p>
                        </a>
                    </li>
                    <?php if ($this->session->userdata('auth')['status'] == 1) { ?>
                        <li <?php if ($menus == 'jenis_pangan') {echo 'class="active"';}?>>
                            <a href="<?= base_url()?>jenis_pangan">
                                <i class="material-icons">restaurant</i>
                                <p>Jenis Pangan</p>
                            </a>
                        </li>
                        <li <?php if ($menus == 'pangan_harapan') {echo 'class="active"';}?>>
                            <a href="<?= base_url()?>Detail_pangan_keluarga/form_pph">
                                <i class="material-icons">print</i>
                                <p>Pangan Harapan</p>
                            </a>
                        </li>
                    <?php }?>
                    <!-- <li <?php if ($menus == 'survei') {echo 'class="active"';}?>>
                        <a href="<?= base_url()?>survei">
                            <i class="material-icons">location_on</i>
                            <p>Survei</p>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> <?= $page_title ?> </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="<?= base_url()?>auth/logout" class="dropdown-toggle" >
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content" style="margin-top: 10px;">
                <div class="container-fluid">
                    <div class="row">
                        <?= $content?>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Pola Pangan Harapan</a>, Sistem Informasi
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--  Charts Plugin -->
<script src="<?= base_url() ?>assets/js/chartist.min.js"></script>
    <!--  Dynamic Elements plugin -->
    <script src="<?= base_url() ?>assets/js/arrive.min.js"></script>
    <!--  PerfectScrollbar Library -->
    <script src="<?= base_url() ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="<?= base_url() ?>assets/js/bootstrap-notify.js"></script>
    <!--  Google Maps Plugin    -->
    
    <!-- Material Dashboard javascript methods -->
    <script src="<?= base_url() ?>assets/js/material-dashboard.js?v=1.2.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?= base_url() ?>assets/js/demo.js"></script>
</html>