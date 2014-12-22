
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $pagetitle?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/styles/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/styles/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/styles/main.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/styles/pace.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/styles/jquery.news-ticker.css">
</head>
<body>
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">e-Learning</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right text-white"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control text-white"/></div>
                </form>
                <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left text-white">News:</span>
                    <ul id="news-update" class="ticker list-unstyled">
                        <li><strong>Welcome e-Learning SMP Manyaran</strong></li>
                    </ul>
                </div>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                  
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="<?php echo base_url().'/'.$this->session->userdata('user_photo')?>" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs"><?php echo $this->session->userdata('user_display_name')?></span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="<?php echo site_url('auth/logout')?>"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
          
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    
                     <div class="clearfix"></div>
                    <li class="active"><a href="dashboard.html"><i class="fa fa-tachometer fa-fw">
                        <div class="icon-bg bg-orange"></div>
                    </i><span class="menu-title">Dashboard</span></a></li>
                    <li><a href="<?php echo site_url('siswa/index')?>"><i class="fa fa-desktop fa-fw">
                        <div class="icon-bg bg-pink"></div>
                    </i><span class="menu-title">Managemen Siswa</span></a>
                       
                    </li>
                    <li><a href="UIElements.html"><i class="fa fa-send-o fa-fw">
                        <div class="icon-bg bg-green"></div>
                    </i><span class="menu-title">Managemen Guru</span></a>
                       
                    </li>
                    <li><a href="Forms.html"><i class="fa fa-edit fa-fw">
                        <div class="icon-bg bg-violet"></div>
                    </i><span class="menu-title">Managemen Kelas</span></a>
                      
                    </li>
                    <li><a href="Tables.html"><i class="fa fa-th-list fa-fw">
                        <div class="icon-bg bg-blue"></div>
                    </i><span class="menu-title">Managemen Mata Pelajaran</span></a>
                          
                    </li>
                    <li><a href="DataGrid.html"><i class="fa fa-database fa-fw">
                        <div class="icon-bg bg-red"></div>
                    </i><span class="menu-title">Managemen Materi</span></a>
                      
                    </li>
                    <li><a href="Pages.html"><i class="fa fa-file-o fa-fw">
                        <div class="icon-bg bg-yellow"></div>
                    </i><span class="menu-title">Managemen Tugas</span></a>
                       
                    </li>
                   
                </ul>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
           
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            <?php echo $pagetitle;?></div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#"><?php echo $pagetitle;?></a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active"><?php echo $pagetitle;?></li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div id="sum_box" class="row mbl">
                            <?php $this->load->view($content);?>
                        </div>
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="<?php echo base_url()?>assets/script/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery-ui.js"></script>
    <script src="<?php echo base_url()?>assets/script/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/script/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo base_url()?>assets/script/html5shiv.js"></script>
    <script src="<?php echo base_url()?>assets/script/respond.min.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.cookie.js"></script>
    <script src="<?php echo base_url()?>assets/script/icheck.min.js"></script>
    <script src="<?php echo base_url()?>assets/script/custom.min.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.news-ticker.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.menu.js"></script>
    <script src="<?php echo base_url()?>assets/script/pace.min.js"></script>
    <script src="<?php echo base_url()?>assets/script/holder.js"></script>
    <script src="<?php echo base_url()?>assets/script/responsive-tabs.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.flot.tooltip.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.flot.fillbetween.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url()?>assets/script/jquery.flot.spline.js"></script>
    <script src="<?php echo base_url()?>assets/script/zabuto_calendar.min.js"></script>
    <script src="<?php echo base_url()?>assets/script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="<?php echo base_url()?>assets/script/highcharts.js"></script>
    <script src="<?php echo base_url()?>assets/script/data.js"></script>
    <script src="<?php echo base_url()?>assets/script/drilldown.js"></script>
    <script src="<?php echo base_url()?>assets/script/exporting.js"></script>
    <script src="<?php echo base_url()?>assets/script/highcharts-more.js"></script>
    <script src="<?php echo base_url()?>assets/script/charts-highchart-pie.js"></script>
    <script src="<?php echo base_url()?>assets/script/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="<?php echo base_url()?>assets/script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
