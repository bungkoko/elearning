<!DOCTYPE html>
<!--
Template Name: Admin Lab Dashboard build with Bootstrap v2.3.1
Template Version: 1.2
Author: Mosaddek Hossain
Website: http://thevectorlab.net/
-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="<?php echo base_url(); ?>assets/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/style_responsive.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/css/style_default.css" rel="stylesheet" id="style_color" />

        <link href="<?php echo base_url() ?>assets/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets/uniform/css/uniform.default.css" />
        <link href="<?php echo base_url() ?>assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
        <link href="<?php echo base_url() ?>assets/assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />

    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="fixed-top">
        <!-- BEGIN HEADER -->
        <div id="header" class="navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN LOGO -->
                    <a class="brand" href="index.html">
                        <img src="img/logo.png" alt="Admin Lab" />
                    </a>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="arrow"></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->


                    <div class="top-nav ">
                        <ul class="nav pull-right top-menu" >

                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown">
                                <?php if ($this->user_library->is_logged() == true): ?>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="img/avatar1_small.jpg" alt="">
                                        <span class="username"><?php echo $this->session->userdata('user_display_name') ?></span>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                                        <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                                        <li><a href="#"><i class="icon-calendar"></i> Calendar</a></li>
                                        <li class="divider"></li>
                                        <li><a href="<?php echo site_url('auth/logout') ?>"><i class="icon-key"></i> Log Out</a></li>
                                    </ul>
                                <?php else: ?>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-lock"></i>
                                        Login</a>

                                    <ul class="dropdown-menu extended inbox">

                                        <li>
                                            <p>User Login</p>
                                        </li>

                                        <li>

                                            <div class="control-wrap">
                                                <form id="loginform" class="form-vertical no-padding no-margin" method="POST" action="<?php echo site_url('auth/login') ?>">
                                                    <div class="control-group" style="padding-top: 10px;padding-left: 15px;padding-right: 15px">
                                                        <div class="controls">
                                                            <div class="input-prepend">
                                                                <span class="add-on"><i class="icon-user"></i></span><input style="width: 77%;" id="input-username" type="text" name="username" placeholder="Username" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="control-group" style="padding-left: 15px;padding-right: 15px">
                                                        <div class="controls">
                                                            <div class="input-prepend">
                                                                <span class="add-on"><i class="icon-key"></i></span><input style="width: 77%;" id="input-password" name="password" type="password" placeholder="Password" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <input type="submit" id="login-btn" class="btn btn-block login-btn" value="Login" />
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                <?php endif; ?>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                </div>
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div id="container" class="row-fluid">
            <!-- BEGIN SIDEBAR -->
            <div id="sidebar" class="nav-collapse collapse">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler hidden-phone"></div>
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

                <!-- BEGIN SIDEBAR MENU -->
                <ul class="sidebar-menu">
                    <li class="has-sub active">
                        <a href="javascript:;" class="">
                            <span class="icon-box"> <i class="icon-dashboard"></i></span> Dashboard
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="index.html">Dashboard 1</a></li>
                            <li class="active"><a class="" href="index_2.html">Dashboard 2</a></li>

                        </ul>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN PAGE -->
            <div id="main-content">
                <div class="container-fluid">
                    <!-- BEGIN PAGE HEADER-->

                    <!-- BEGIN PAGE CONTENT-->
                    <div id="page">

                        <?php $this->load->view($content); ?>
                    </div>


                    <!--END:BODY-->
                </div>
                <!-- END PAGE CONTENT-->
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

        <!-- BEGIN FOOTER -->
        <div id="footer">
            2013 &copy; Admin Lab Dashboard.
            <div class="span pull-right">
                <span class="go-top"><i class="icon-arrow-up"></i></span>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS -->
        <!-- Load javascripts at bottom, this will reduce page load time -->
        <script src="<?php echo base_url() ?>/assets/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/jquery.blockui.js"></script>
        <script src="<?php echo base_url() ?>/assets/js/jquery.cookie.js"></script>
        <!-- ie8 fixes -->
        <!--[if lt IE 9]>
        <script src="js/excanvas.js"></script>
        <script src="js/respond.js"></script>
        <![endif]-->
        <script src="<?php echo base_url() ?>/assets/assets/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/assets/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/assets/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/assets/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/assets/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/assets/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/assets/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>/assets/assets/jquery-knob/js/jquery.knob.js"></script>
        <script src="<?php echo base_url() ?>/assets/assets/flot/jquery.flot.js"></script>
        <script src="<?php echo base_url() ?>/assets/assets/flot/jquery.flot.resize.js"></script>

        <script src="<?php echo base_url() ?>/assets/assets/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url() ?>/assets/assets/flot/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url() ?>/assets/assets/flot/jquery.flot.crosshair.js"></script>

        <script src="<?php echo base_url() ?>/assets/js/jquery.peity.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/assets/uniform/jquery.uniform.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/assets/data-tables/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>/assets/assets/data-tables/DT_bootstrap.js"></script>

        <script src="<?php echo base_url() ?>/assets/js/scripts.js"></script>
        <script>
            jQuery(document).ready(function () {
                // initiate layout and plugins
                App.setMainPage(true);
                App.init();
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>