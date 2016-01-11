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
                        <?php if(Session::has('success')): ?>
                            <div class="errorHandler alert alert-success">
                                <?php echo e(Session::get('success')); ?>

                            </div>
                        <?php endif; ?>
                            <!-- start: BASIC TABLE PANEL -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-external-link-square"></i>
                                İçerikler
                                <div class="panel-tools">

                                    <a data-original-title="Yeni İçeirik" data-placement="top" class="tooltips btn btn-xs btn-link" href="<?php echo e(URL::asset("admin/content/create")); ?>">
                                        <i class="fa fa-plus"></i>
                                    </a>

                                </div>


                            </div>
                            <div class="panel-body">
                                <table class="table table-hover" id="sample-table-1">
                                    <thead>
                                    <tr>
                                        <th class="center">#</th>
                                        <th>Başlık</th>
                                        <th>Seo Url</th>
                                        <th>Durum</th>
                                        <th>Etiketler</th>
                                        <th>Eklenme Tarihi</th>
                                        <th>Sayfa Gösterimi</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>


                                    <?php foreach($contents as $content): ?>
                                    <tr>
                                        <td class="center"><?php echo e($content->id); ?></td>
                                        <td><?php echo e($content->title); ?></td>
                                        <td><?php echo e($content->seo); ?></td>
                                        <td>
                                            <?php if($content->title == 0): ?>
                                                <span class="label label-danger"> Pasif</span>
                                            <?php else: ?>
                                                <span class="label label-success"> Aktif</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled">
                                            <?php foreach(json_decode($content->tags,true) as $xxx): ?>
                                                <li><p>
                                                        <span class="label label-info"> <?php echo e($xxx); ?></span>

                                                    </p>
                                                </li>


                                                <?php endforeach; ?>
                                            </ul>
                                            </td>
                                        <td><?php echo e(date('d-m-Y',strtotime($content->created_at))); ?></td>
                                        <td><span class="badge badge-success"> <?php echo e($content->pageview); ?></span></td>
                                        <td class="center">
                                            <div class="visible-md visible-lg hidden-sm hidden-xs">
                                                <a href="#" class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Güncelle"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-xs btn-green tooltips" data-placement="top" data-original-title="Aktifleştir"><i class="fa fa-play"></i></a>
                                                <a href="<?php echo e(URL::asset('admin/content/delete/'.$content->id)); ?>" class="btn btn-xs btn-bricky tooltips" data-placement="top" data-original-title="Sil"><i class="fa fa-times fa fa-white"></i></a>
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
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>



                                <div class="pull-right">
                                    <?php echo $contents->links(); ?>



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