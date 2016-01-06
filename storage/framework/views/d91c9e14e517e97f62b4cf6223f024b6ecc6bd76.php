<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 4.0.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Ecommerce System</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="<?php echo e(URL::asset('Admin/assets/global/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">


    <link href="<?php echo e(URL::asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all')); ?>" rel="stylesheet" type="text/css"/>



    <link href="<?php echo e(URL::asset('Admin/assets/global/plugins/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(URL::asset('Admin/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(URL::asset('Admin/assets/global/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(URL::asset('Admin/assets/global/plugins/uniform/css/uniform.default.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?php echo e(URL::asset('Admin/assets/global/plugins/select2/select2.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(URL::asset('Admin/assets/admin/pages/css/login-soft.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?php echo e(URL::asset('Admin/assets/global/css/components.css')); ?>" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(URL::asset('Admin/assets/global/css/plugins.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo e(URL::asset('Admin/assets/admin/layout/css/layout.css')); ?>" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
        <img src="<?php echo e(URL::asset('Admin/assets/admin/layout/img/logo-big.png')); ?>" alt=""/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="<?php echo e(URL::asset('admin/auth/login')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <h3 class="form-title">Yönetici Girişi</h3>

        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach($errors->all() as $error): ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input name="email" class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input name="password" class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Şifre" name="password"/>
            </div>
        </div>
        <div class="form-actions">

            <button type="submit" class="btn blue pull-right">
                Giriş <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
        <div class="create-account">
            <p>
                Giriş Problemi Yaşıyorsanız !  <a href="javascript:;" id="register-btn"> Tıklayın </a>
            </p>
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    2015 &copy; Ecommerce System
</div>

</body>
<!-- END BODY -->
</html>