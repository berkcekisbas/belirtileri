@extends('Admin.layout')

@section('content')
    <div class="main-container">
        <!-- start: PAGE -->
        <div class="main-content">
            <!-- start: PANEL CONFIGURATION MODAL FORM -->
            <div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title">Panel Configuration</h4>
                        </div>
                        <div class="modal-body">
                            Here will be a configuration form
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">
                                Save changes
                            </button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- end: SPANEL CONFIGURATION MODAL FORM -->
            <div class="container">
                <!-- start: PAGE HEADER -->
                <div class="row">
                    <div class="col-sm-12">

                        <!-- start: PAGE TITLE & BREADCRUMB -->
                        <ol class="breadcrumb">
                            <li>
                                <i class="clip-home-3"></i>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li class="active">
                                Dashboard
                            </li>

                        </ol>
                        <div class="page-header">
                            <h1>Dashboard <small>overview &amp; stats </small></h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->
                <!-- start: PAGE CONTENT -->

                <div class="row">
                    <div class="col-sm-7">
                        <div class="row space12">
                            <ul class="mini-stats col-sm-12">
                                <li class="col-sm-4">
                                    <div class="sparkline_bar_good">
                                        <span>3,5,9,8,13,11,14</span>+10%
                                    </div>
                                    <div class="values">
                                        <strong>18304</strong>
                                        Visits
                                    </div>
                                </li>
                                <li class="col-sm-4">
                                    <div class="sparkline_bar_neutral">
                                        <span>20,15,18,14,10,12,15,20</span>0%
                                    </div>
                                    <div class="values">
                                        <strong>3833</strong>
                                        Unique Visitors
                                    </div>
                                </li>
                                <li class="col-sm-4">
                                    <div class="sparkline_bar_bad">
                                        <span>4,6,10,8,12,21,11</span>+50%
                                    </div>
                                    <div class="values">
                                        <strong>18304</strong>
                                        Pageviews
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="row space12">
                            <div class="col-sm-6">
                                <div class="easy-pie-chart">
                                    <span class="bounce number" data-percent="44"> <span class="percent">44</span> </span>
                                    <div class="label-chart">
                                        Bounce Rate
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="easy-pie-chart">
                                    <span class="cpu number" data-percent="82"> <span class="percent">82</span> </span>
                                    <div class="label-chart">
                                        New Visits
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="clip-stats"></i>
                                Site Visits
                                <div class="panel-tools">
                                    <a class="btn btn-xs btn-link panel-collapse collapses" href="#">
                                    </a>
                                    <a class="btn btn-xs btn-link panel-config" href="#panel-config" data-toggle="modal">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <a class="btn btn-xs btn-link panel-refresh" href="#">
                                        <i class="fa fa-refresh"></i>
                                    </a>
                                    <a class="btn btn-xs btn-link panel-close" href="#">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="flot-medium-container">
                                    <div id="placeholder-h1" class="flot-placeholder"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: PAGE CONTENT-->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
@endsection

@section('css')
        <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="{{ URL::asset('admintools/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admintools/assets/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admintools/assets/fonts/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admintools/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admintools/assets/css/main-responsive.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admintools/assets/plugins/iCheck/skins/all.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admintools/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admintools/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('admintools/assets/css/theme_light.css') }}" type="text/css" id="skin_color">
    <link rel="stylesheet" href="{{ URL::asset('admintools/assets/css/print.css') }}" type="text/css" media="print"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="{{ URL::asset('admintools/assets/plugins/font-awesome/css/font-awesome-ie7.min.css') }}">
    <![endif]-->
    <!-- end: MAIN CSS -->
@endsection

@section('js')
    <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
    <script src="{{ URL::asset('admintools/assets/plugins/respond.min.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/plugins/excanvas.min.js') }}"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!--<![endif]-->
    <script src="{{ URL::asset('admintools/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/plugins/blockUI/jquery.blockUI.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/plugins/iCheck/jquery.icheck.min.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/plugins/less/less-1.5.0.min.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/js/main.js') }}"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script src="{{ URL::asset('admintools/assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/plugins/jquery.sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
    <script src="{{ URL::asset('admintools/assets/js/dashboard.js') }}"></script>
    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
        jQuery(document).ready(function() {
            Main.init();
            Index.init();
            runChart1();
            runSparkline();
            runEasyPieChart();
            runFullCalendar();
        });
    </script>



@endsection