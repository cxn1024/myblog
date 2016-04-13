<?php 
use yii\helpers\Html;
$this->title = '诸葛修个人博客';
?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

    <meta charset="utf-8" />

    <title><?= Html::encode($this->title) ?></title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <meta content="" name="description" />

    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <link href="/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

    <link href="/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <link href="/media/css/style-metro.css" rel="stylesheet" type="text/css"/>

    <link href="/media/css/style.css" rel="stylesheet" type="text/css"/>

    <link href="/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

    <link href="/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

    <link href="/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

    <!-- END GLOBAL MANDATORY STYLES -->

    <link rel="shortcut icon" href="/media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

    <!-- BEGIN HEADER -->

    <div class="header navbar navbar-inverse navbar-fixed-top">

        <!-- BEGIN TOP NAVIGATION BAR -->

        <div class="navbar-inner">

            <div class="container-fluid header-height">

                <!-- BEGIN LOGO -->

                <a class="brand" href="/">

                <img src="/media/image/logo.png" alt="logo"/>

                </a>

                <!-- END LOGO -->

                <ul class="nav nav-blog">
                    <li class="active"><a href="/">首页</a></li>
                    <li><a href="/about.html">关于博主</a></li>
                </ul>

                <!-- BEGIN TOP NAVIGATION MENU -->              

                <ul class="nav pull-right">

                    <!-- BEGIN USER LOGIN DROPDOWN -->

                    <li class="dropdown user">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <img alt="" src="/media/image/avatar1_small.jpg" />

                        <span class="username"></span>

                        <i class="icon-angle-down"></i>

                        </a>

                        <ul class="dropdown-menu">

                            <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>

                            <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>

                            <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>

                            <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>

                            <li class="divider"></li>

                            <li><a href="/site/logout.html"><i class="icon-key"></i> Log Out</a></li>

                        </ul>

                    </li>

                    <!-- END USER LOGIN DROPDOWN -->

                </ul>

                <!-- END TOP NAVIGATION MENU --> 

            </div>

        </div>

        <!-- END TOP NAVIGATION BAR -->

    </div>

    <?= $content ?>

    <!-- END CONTAINER -->

    <!-- BEGIN FOOTER -->

    <div class="footer">

        <div class="footer-tools">

            <span class="go-top">

            <i class="icon-angle-up"></i>

            </span>

        </div>

    </div>

    <!-- END FOOTER -->

    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

    <!-- BEGIN CORE PLUGINS -->

    <script src="/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

    <script src="/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

    <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

    <script src="/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

    <script src="/media/js/bootstrap.min.js" type="text/javascript"></script>

    <!--[if lt IE 9]>

    <script src="/media/js/excanvas.min.js"></script>

    <script src="/media/js/respond.min.js"></script>  

    <![endif]-->   

    <script src="/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

    <script src="/media/js/jquery.blockui.min.js" type="text/javascript"></script>  

    <script src="/media/js/jquery.cookie.min.js" type="text/javascript"></script>

    <script src="/media/js/jquery.uniform.min.js" type="text/javascript" ></script>

    <!-- END CORE PLUGINS -->

    <!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>