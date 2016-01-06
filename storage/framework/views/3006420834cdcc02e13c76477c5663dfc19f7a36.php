<?php $__env->startSection('content'); ?>
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
                                Test
                            </li>
                        </ol>
                        <div class="page-header">
                            <h1>İçerikler</h1>
                        </div>
                        <!-- end: PAGE TITLE & BREADCRUMB -->
                    </div>
                </div>
                <!-- end: PAGE HEADER -->
                <!-- start: PAGE CONTENT -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- start: BASIC TABLE PANEL -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i>
                                Basic table

                            </div>
                            <div class="panel-body">
                                <table class="table table-hover" id="sample-table-1">
                                    <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Browser</th>
                                        <th class="hidden-xs">Creator</th>
                                        <th>Software license</th>
                                        <th class="hidden-xs">Current layout engine</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>



                                    <tr>
                                        <td class="center">5</td>
                                        <td>Opera</td>
                                        <td class="hidden-xs">Opera Software</td>
                                        <td>
                                            <a href="#" rel="nofollow" target="_blank">
                                                Proprietary
                                            </a></td>
                                        <td class="hidden-xs">Presto</td>
                                        <td class="center">
                                            <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                <a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Share"><i class="fa fa-share"></i></a>
                                                <a href="#" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Remove"><i class="fa fa-times fa fa-white"></i></a>
                                            </div>
                                            <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                <div class="btn-group">
                                                    <a class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown" href="#">
                                                        <i class="fa fa-cog"></i> <span class="caret"></span>
                                                    </a>
                                                    <ul role="menu" class="dropdown-menu pull-right">
                                                        <li role="presentation">
                                                            <a role="menuitem" tabindex="-1" href="#">
                                                                <i class="fa fa-edit"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a role="menuitem" tabindex="-1" href="#">
                                                                <i class="fa fa-share"></i> Share
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a role="menuitem" tabindex="-1" href="#">
                                                                <i class="fa fa-times"></i> Remove
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div></td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="pull-right">
                                    <ul class="pagination pagination">
                                        <li>
                                            <a href="#">
                                                Prev
                                            </a>
                                        </li>
                                        <li  class="active">
                                            <a href="#">
                                                1
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                2
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                3
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Next
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>


                        </div>

                        <!-- end: BASIC TABLE PANEL -->
                    </div>
                </div>



                <!-- end: PAGE CONTENT-->
            </div>
        </div>
        <!-- end: PAGE -->
    </div>
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('css'); ?>
            <!-- start: MAIN CSS -->
    <link rel="stylesheet" href="<?php echo e(URL::asset('admintools/assets/plugins/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('admintools/assets/plugins/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('admintools/assets/fonts/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('admintools/assets/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('admintools/assets/css/main-responsive.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('admintools/assets/plugins/iCheck/skins/all.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('admintools/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('admintools/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('admintools/assets/css/theme_light.css')); ?>" type="text/css" id="skin_color">
    <link rel="stylesheet" href="<?php echo e(URL::asset('admintools/assets/css/print.css')); ?>" type="text/css" media="print"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php echo e(URL::asset('admintools/assets/plugins/font-awesome/css/font-awesome-ie7.min.css')); ?>">
    <![endif]-->
    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('js'); ?>
            <!-- start: MAIN JAVASCRIPTS -->
    <!--[if lt IE 9]>
    <script src="<?php echo e(URL::asset('admintools/assets/plugins/respond.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admintools/assets/plugins/excanvas.min.js')); ?>"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!--<![endif]-->
    <script src="<?php echo e(URL::asset('admintools/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admintools/assets/plugins/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admintools/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admintools/assets/plugins/blockUI/jquery.blockUI.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admintools/assets/plugins/iCheck/jquery.icheck.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admintools/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admintools/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admintools/assets/plugins/less/less-1.5.0.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admintools/assets/plugins/jquery-cookie/jquery.cookie.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admintools/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('admintools/assets/js/main.js')); ?>"></script>
    <!-- end: MAIN JAVASCRIPTS -->
    <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

    <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
    <script>
        jQuery(document).ready(function() {
            Main.init();
        });
    </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('Admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>