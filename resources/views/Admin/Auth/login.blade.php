<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- start: HEAD -->
<head>
    <title>Yönetim Paneli</title>
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
    <link href="{{ URL::asset('admintools/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('admintools/assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('admintools/assets/fonts/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('admintools/assets/css/main.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('admintools/assets/css/main-responsive.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('admintools/assets/plugins/iCheck/skins/all.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('admintools/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('admintools/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('admintools/assets/css/theme_light.css') }}" rel="stylesheet" type="text/css" id="skin_color"/>
    <link href="{{ URL::asset('admintools/assets/css/print.css') }}" rel="stylesheet" type="text/css"media="print"/>
    <!--[if IE 7]>
    <link href="{{ URL::asset('Admin/assets/plugins/font-awesome/css/font-awesome-ie7.min.css') }}" rel="stylesheet" type="text/css"/>
    <![endif]-->
    <!-- end: MAIN CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body class="login example2">
<div class="main-login col-sm-4 col-sm-offset-4">
    <!-- start: LOGIN BOX -->
    <div class="box-login">
        <h3>Yönetim Paneli Girişi</h3>
        <p>
            Lütfen e-mail adresi ve şifrenizi giriniz.
        </p>
        <form class="form-login" action="{{ URL::asset('admin/auth/login') }}" method="post">
            {!! csrf_field() !!}
            @if (count($errors) > 0)
                <div class="errorHandler alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <fieldset>
                <div class="form-group">
							<span class="input-icon">
								<input type="text" class="form-control" name="email" placeholder="Email">
								<i class="fa fa-user"></i> </span>
                </div>
                <div class="form-group form-actions">
							<span class="input-icon">
								<input type="password" class="form-control password" name="password" placeholder="Şifre">
								<i class="fa fa-lock"></i>
								 </span>
                </div>
                <div class="form-actions">

                    <button type="submit" class="btn btn-bricky pull-right">
                        Giriş <i class="fa fa-arrow-circle-right"></i>
                    </button>
                </div>

            </fieldset>
        </form>
    </div>
    <!-- end: LOGIN BOX -->
    <!-- start: COPYRIGHT -->

    <!-- end: COPYRIGHT -->
</div>

</body>
<!-- end: BODY -->
</html>