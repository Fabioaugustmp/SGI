<div class="header pb-7 pt-4 pt-lg-4 d-flex align-items-center"
    style="background-color:#1e1a55; !important">

    <!--<span class="mask bg-gradient-default opacity-8"></span> Mask -->
    <span class=""></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-12 col-lg-12">
                            <h6 class="h2 text-white d-inline-block mb-0"><?php echo e($title); ?></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><i
                                                class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo e(route('construction')); ?>"><?php echo e($title); ?></a>
                                    </li>
                                    <?php if(isset($description) && $description): ?>
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo e($description); ?></li>
                                    <?php endif; ?>

                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/construction/partials/header-profile.blade.php ENDPATH**/ ?>