<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recall Pangan</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/login.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3">
                <div id="iosBlurBg">
                    <div id="whiteBg"></div>
                </div>
                <div id="bottomEnter"></div>
                <div id="bottomBlurBg"></div>
                <!-- Login Form -->
                <div class="loginForm">
                    <div class="title">
                        <p>LOG INTO<br><span>SYSTEM</span></p>
                        <hr>
                        <hr class="short">
                    </div>
                    <form action="<?= base_url()?>auth/login" method="post">
                        <div class="col-3">
                            <input name="nik" class="effect-2" type="text" placeholder="Nik...">
                            <span class="focus-border"></span>

                            <input name="password" class="effect-2" type="password" placeholder="Password...">
                            <span class="focus-border"></span>
                        </div>
                </div>
                <button class="enterButton">
                        <i class="fa fa-lock fa-2x "></i><br>
                        <span class="enterText ">Enter</span> </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>