<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

    <meta charset="utf-8" />

    <title>博客系统管理后台</title>

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

    <!-- BEGIN PAGE LEVEL STYLES --> 

    <link href="/media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>

    <link href="/media/css/daterangepicker.css" rel="stylesheet" type="text/css" />

    <link href="/media/css/fullcalendar.css" rel="stylesheet" type="text/css"/>

    <link href="/media/css/jqvmap.css" rel="stylesheet" type="text/css" /media="screen"/>

    <link href="/media/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" /media="screen"/>

    <!-- END PAGE LEVEL STYLES -->

    <link rel="shortcut icon" href="/media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

    <!-- BEGIN HEADER -->

    <div class="header navbar navbar-inverse navbar-fixed-top">

        <!-- BEGIN TOP NAVIGATION BAR -->

        <div class="navbar-inner">

            <div class="container-fluid">

                <!-- BEGIN LOGO -->

                <a class="brand" href="index.html">

                <img src="/media/image/logo.png" alt="logo"/>

                </a>

                <!-- END LOGO -->

                <!-- BEGIN RESPONSIVE MENU TOGGLER -->

                <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

                <img src="/media/image/menu-toggler.png" alt="" />

                </a>          

                <!-- END RESPONSIVE MENU TOGGLER -->            

                <!-- BEGIN TOP NAVIGATION MENU -->              

                <ul class="nav pull-right">

                    <!-- BEGIN INBOX DROPDOWN -->

                    <li class="dropdown" id="header_inbox_bar">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <i class="icon-envelope"></i>

                        <span class="badge">5</span>

                        </a>

                        <ul class="dropdown-menu extended inbox">

                            <li>

                                <p>You have 12 new messages</p>

                            </li>

                            <li>

                                <a href="inbox.html?a=view">

                                <span class="photo"><img src="/media/image/avatar2.jpg" alt="" /></span>

                                <span class="subject">

                                <span class="from">Lisa Wong</span>

                                <span class="time">Just Now</span>

                                </span>

                                <span class="message">

                                Vivamus sed auctor nibh congue nibh. auctor nibh

                                auctor nibh...

                                </span>  

                                </a>

                            </li>

                            <li>

                                <a href="inbox.html?a=view">

                                <span class="photo"><img src="/media/image/avatar3.jpg" alt="" /></span>

                                <span class="subject">

                                <span class="from">Richard Doe</span>

                                <span class="time">16 mins</span>

                                </span>

                                <span class="message">

                                Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh

                                auctor nibh...

                                </span>  

                                </a>

                            </li>

                            <li>

                                <a href="inbox.html?a=view">

                                <span class="photo"><img src="/media/image/avatar1.jpg" alt="" /></span>

                                <span class="subject">

                                <span class="from"><?php echo Yii::$app->user->identity->nickname; ?></span>

                                <span class="time">2 hrs</span>

                                </span>

                                <span class="message">

                                Vivamus sed nibh auctor nibh congue nibh. auctor nibh

                                auctor nibh...

                                </span>  

                                </a>

                            </li>

                            <li class="external">

                                <a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>

                            </li>

                        </ul>

                    </li>

                    <!-- END INBOX DROPDOWN -->

                    <!-- BEGIN USER LOGIN DROPDOWN -->

                    <li class="dropdown user">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <img alt="" src="/media/image/avatar1_small.jpg" />

                        <span class="username"><?php echo Yii::$app->user->identity->nickname; ?></span>

                        <i class="icon-angle-down"></i>

                        </a>

                        <ul class="dropdown-menu">

                            <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>

                            <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>

                            <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>

                            <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>

                            <li class="divider"></li>

                            <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>

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

    <!-- END HEADER -->

    <!-- BEGIN CONTAINER -->

    <?= $content ?>

    <!-- END CONTAINER -->

    <!-- BEGIN FOOTER -->

    <div class="footer">

        <div class="footer-tools">

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

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script type="text/javascript" src="/media/js/ckeditor.js"></script>  

    <script src="/media/js/jquery.flot.js" type="text/javascript"></script>

    <script src="/media/js/jquery.flot.resize.js" type="text/javascript"></script>

    <script src="/media/js/jquery.pulsate.min.js" type="text/javascript"></script>

    <script src="/media/js/date.js" type="text/javascript"></script>

    <script src="/media/js/daterangepicker.js" type="text/javascript"></script>     

    <script src="/media/js/jquery.gritter.js" type="text/javascript"></script>

    <script src="/media/js/fullcalendar.min.js" type="text/javascript"></script>

    <script src="/media/js/jquery.easy-pie-chart.js" type="text/javascript"></script>

    <script src="/media/js/jquery.sparkline.min.js" type="text/javascript"></script>  

    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->

    <script src="/media/js/app.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL SCRIPTS -->  
    <script>

        jQuery(document).ready(function() {    

           App.init(); // initlayout and core plugins

        });

    </script>

    <!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>