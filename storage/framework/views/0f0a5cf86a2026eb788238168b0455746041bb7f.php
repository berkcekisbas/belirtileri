<div class="horizontal-menu navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li>
            <a href="<?php echo e(asset('admin/dashboard')); ?>">
                Ana Sayfa
            </a>
        </li>

        <li>
            <a href="" class="dropdown-toggle" data-close-others="true" data-hover="dropdown" data-toggle="dropdown">
                İçerik <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?php echo e(asset('admin/content/list')); ?>">
                        İçerikler
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(asset('admin/content/create')); ?>">
                        Yeni İçerik
                    </a>
                </li>

            </ul>
        </li>


        <li>
            <a href="">
                Ayarlar
            </a>
        </li>

    </ul>
</div>
