<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <title>Clip-One - Responsive Admin Template</title>
    <!-- start: META -->
    <meta charset="utf-8" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- end: META -->
    <!-- start: MAIN CSS -->
    @yield('css')
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="stylesheet" href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css">
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body class="page-full-width">
<!-- start: HEADER -->
<div class="navbar navbar-inverse navbar-fixed-top">
    <!-- start: TOP NAVIGATION CONTAINER -->
    <div class="container">
        <div class="navbar-header">
            <!-- start: RESPONSIVE MENU TOGGLER -->
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                <span class="clip-list-2"></span>
            </button>
            <!-- end: RESPONSIVE MENU TOGGLER -->
            <!-- start: LOGO -->
            <a class="navbar-brand" href="index.html">
                CLIP<i class="clip-clip"></i>ONE
            </a>
            <!-- end: LOGO -->
        </div>
        <div class="navbar-tools">
            <!-- start: TOP NAVIGATION MENU -->
            <ul class="nav navbar-right">
                <!-- start: TO-DO DROPDOWN -->
                <li class="dropdown">
                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                        <i class="clip-list-5"></i>
                        <span class="badge"> 12</span>
                    </a>
                    <ul class="dropdown-menu todo">
                        <li>
                            <span class="dropdown-menu-title"> You have 12 pending tasks</span>
                        </li>
                        <li>
                            <div class="drop-down-wrapper">
                                <ul>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
                                            <span class="label label-danger" style="opacity: 1;"> today</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
                                            <span class="label label-danger" style="opacity: 1;"> today</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc"> Hire developers</span>
                                            <span class="label label-warning"> tommorow</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc">Staff Meeting</span>
                                            <span class="label label-warning"> tommorow</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc"> New frontend layout</span>
                                            <span class="label label-success"> this week</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc"> Hire developers</span>
                                            <span class="label label-success"> this week</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc"> New frontend layout</span>
                                            <span class="label label-info"> this month</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc"> Hire developers</span>
                                            <span class="label label-info"> this month</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc" style="opacity: 1; text-decoration: none;">Staff Meeting</span>
                                            <span class="label label-danger" style="opacity: 1;"> today</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc" style="opacity: 1; text-decoration: none;"> New frontend layout</span>
                                            <span class="label label-danger" style="opacity: 1;"> today</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="todo-actions" href="javascript:void(0)">
                                            <i class="fa fa-square-o"></i>
                                            <span class="desc"> Hire developers</span>
                                            <span class="label label-warning"> tommorow</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="view-all">
                            <a href="javascript:void(0)">
                                See all tasks <i class="fa fa-arrow-circle-o-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end: TO-DO DROPDOWN-->
                <!-- start: NOTIFICATION DROPDOWN -->
                <li class="dropdown">
                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                        <i class="clip-notification-2"></i>
                        <span class="badge"> 11</span>
                    </a>
                    <ul class="dropdown-menu notifications">
                        <li>
                            <span class="dropdown-menu-title"> You have 11 notifications</span>
                        </li>
                        <li>
                            <div class="drop-down-wrapper">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="label label-primary"><i class="fa fa-user"></i></span>
                                            <span class="message"> New user registration</span>
                                            <span class="time"> 1 min</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="label label-success"><i class="fa fa-comment"></i></span>
                                            <span class="message"> New comment</span>
                                            <span class="time"> 7 min</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="label label-success"><i class="fa fa-comment"></i></span>
                                            <span class="message"> New comment</span>
                                            <span class="time"> 8 min</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="label label-success"><i class="fa fa-comment"></i></span>
                                            <span class="message"> New comment</span>
                                            <span class="time"> 16 min</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="label label-primary"><i class="fa fa-user"></i></span>
                                            <span class="message"> New user registration</span>
                                            <span class="time"> 36 min</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="label label-warning"><i class="fa fa-shopping-cart"></i></span>
                                            <span class="message"> 2 items sold</span>
                                            <span class="time"> 1 hour</span>
                                        </a>
                                    </li>
                                    <li class="warning">
                                        <a href="javascript:void(0)">
                                            <span class="label label-danger"><i class="fa fa-user"></i></span>
                                            <span class="message"> User deleted account</span>
                                            <span class="time"> 2 hour</span>
                                        </a>
                                    </li>
                                    <li class="warning">
                                        <a href="javascript:void(0)">
                                            <span class="label label-danger"><i class="fa fa-shopping-cart"></i></span>
                                            <span class="message"> Transaction was canceled</span>
                                            <span class="time"> 6 hour</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="label label-success"><i class="fa fa-comment"></i></span>
                                            <span class="message"> New comment</span>
                                            <span class="time"> yesterday</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="label label-primary"><i class="fa fa-user"></i></span>
                                            <span class="message"> New user registration</span>
                                            <span class="time"> yesterday</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="label label-primary"><i class="fa fa-user"></i></span>
                                            <span class="message"> New user registration</span>
                                            <span class="time"> yesterday</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="label label-success"><i class="fa fa-comment"></i></span>
                                            <span class="message"> New comment</span>
                                            <span class="time"> yesterday</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <span class="label label-success"><i class="fa fa-comment"></i></span>
                                            <span class="message"> New comment</span>
                                            <span class="time"> yesterday</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="view-all">
                            <a href="javascript:void(0)">
                                See all notifications <i class="fa fa-arrow-circle-o-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end: NOTIFICATION DROPDOWN -->
                <!-- start: MESSAGE DROPDOWN -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-close-others="true" data-hover="dropdown" data-toggle="dropdown" href="#">
                        <i class="clip-bubble-3"></i>
                        <span class="badge"> 9</span>
                    </a>
                    <ul class="dropdown-menu posts">
                        <li>
                            <span class="dropdown-menu-title"> You have 9 messages</span>
                        </li>
                        <li>
                            <div class="drop-down-wrapper">
                                <ul>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="clearfix">
                                                <div class="thread-image">
                                                    <img alt="" src="./assets/images/avatar-2.jpg">
                                                </div>
                                                <div class="thread-content">
                                                    <span class="author">Nicole Bell</span>
                                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                    <span class="time"> Just Now</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="clearfix">
                                                <div class="thread-image">
                                                    <img alt="" src="./assets/images/avatar-1.jpg">
                                                </div>
                                                <div class="thread-content">
                                                    <span class="author">Peter Clark</span>
                                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                    <span class="time">2 mins</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="clearfix">
                                                <div class="thread-image">
                                                    <img alt="" src="./assets/images/avatar-3.jpg">
                                                </div>
                                                <div class="thread-content">
                                                    <span class="author">Steven Thompson</span>
                                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                    <span class="time">8 hrs</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="clearfix">
                                                <div class="thread-image">
                                                    <img alt="" src="./assets/images/avatar-1.jpg">
                                                </div>
                                                <div class="thread-content">
                                                    <span class="author">Peter Clark</span>
                                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                    <span class="time">9 hrs</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="clearfix">
                                                <div class="thread-image">
                                                    <img alt="" src="./assets/images/avatar-5.jpg">
                                                </div>
                                                <div class="thread-content">
                                                    <span class="author">Kenneth Ross</span>
                                                    <span class="preview">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</span>
                                                    <span class="time">14 hrs</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="view-all">
                            <a href="pages_messages.html">
                                See all messages <i class="fa fa-arrow-circle-o-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end: MESSAGE DROPDOWN -->
                <!-- start: USER DROPDOWN -->
                <li class="dropdown current-user">
                    <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" data-close-others="true" href="#">
                        <img src="assets/images/avatar-1-small.jpg" class="circle-img" alt="">
                        <span class="username">Peter Clark</span>
                        <i class="clip-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="pages_user_profile.html">
                                <i class="clip-user-2"></i>
                                &nbsp;My Profile
                            </a>
                        </li>
                        <li>
                            <a href="pages_calendar.html">
                                <i class="clip-calendar"></i>
                                &nbsp;My Calendar
                            </a>
                        <li>
                            <a href="pages_messages.html">
                                <i class="clip-bubble-4"></i>
                                &nbsp;My Messages (3)
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="utility_lock_screen.html"><i class="clip-locked"></i>
                                &nbsp;Lock Screen </a>
                        </li>
                        <li>
                            <a href="login_example1.html">
                                <i class="clip-exit"></i>
                                &nbsp;Log Out
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- end: USER DROPDOWN -->
            </ul>
            <!-- end: TOP NAVIGATION MENU -->
        </div>
        <!-- start: HORIZONTAL MENU -->
        @include('Admin.menu')
                <!-- end: HORIZONTAL MENU -->
    </div>
    <!-- end: TOP NAVIGATION CONTAINER -->
</div>
<!-- end: HEADER -->
<!-- start: MAIN CONTAINER -->
@yield('content')
<!-- end: MAIN CONTAINER -->
<!-- start: FOOTER -->
<div class="footer clearfix">
    <div class="footer-inner">
        2014 &copy; clip-one by cliptheme.
    </div>

</div>
<!-- end: FOOTER -->

@yield('js')
</body>
<!-- end: BODY -->
</html>