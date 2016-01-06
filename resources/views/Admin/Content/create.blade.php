@extends('Admin.layout')

@section('content')
    <div class="main-container">
        <!-- start: PAGE -->
        <div class="main-content">

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
                                    Ana Sayfa
                                </a>
                            </li>
                            <li class="active">
                                İçerik
                            </li>

                            <li class="active">
                                Yeni İçerik
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>Yeni İçerik</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->
                <!-- start: PAGE CONTENT -->
                <div class="row">
                    <div class="col-sm-12">
                        <!-- start: TEXT FIELDS PANEL -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i>
                                Yeni İçerik
                            </div>
                            <div class="panel-body">
                                <form role="form" action="{{ asset('admin/content/create') }}" method="post" class="form-horizontal">
                                    {!! csrf_field() !!}

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-1">
                                            Başlık
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" placeholder="Başlık" id="baslik" name="baslik" value="{{ old('baslik') }}" class="form-control">
                                        </div>
                                        <label class="col-sm-1 control-label" for="form-field-1">
                                            Seo Url
                                        </label>
                                        <div class="col-sm-4">
                                            <input type="text" readonly placeholder="Seo Friend Url" id="seo" name="seo" value="{{ old('seo') }}" class="form-control">
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="form-field-2">
                                            Spot
                                        </label>
                                        <div class="col-sm-9">
                                            <textarea placeholder="Spot" id="spot" name="spot" rows="5" class="form-control">{{ old('spot') }}</textarea>
                                        </div>


                                    </div>
                                    <div class="row">

                                        <div class="col-md-2 col-md-offset-9">
                                            <button class="btn btn-success btn-block" type="submit"> Kaydet <i class="fa fa-arrow-circle-right"></i>
                                            </button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- end: TEXT FIELDS PANEL -->
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

    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>

        slugify = function(text) {
            var trMap = {
                'çÇ':'c',
                'ğĞ':'g',
                'şŞ':'s',
                'üÜ':'u',
                'ıİ':'i',
                'öÖ':'o'
            };
            for(var key in trMap) {
                text = text.replace(new RegExp('['+key+']','g'), trMap[key]);
            }
            return  text.replace(/[^-a-zA-Z0-9\s]+/ig, '') // remove non-alphanumeric chars
                    .replace(/\s/gi, "-") // convert spaces to dashes
                    .replace(/[-]+/gi, "-") // trim repeated dashes
                    .toLowerCase();

        }

        jQuery(document).ready(function() {


            $( "#baslik" ).keyup(function() {
                 $("#seo").val(slugify($("#baslik").val()));
            });

            Main.init();


        });
    </script>



@endsection