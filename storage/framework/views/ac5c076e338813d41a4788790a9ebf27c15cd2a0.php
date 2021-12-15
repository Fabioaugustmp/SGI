<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('properties.partials.header-profile', [
    'title' => __('Ativos'),
    'description' => __(''),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="row justify-content-start">
                                    <form class="form-inline my-2 my-lg-0" action="<?php echo e(route('search.propertie')); ?>"
                                        method="GET" role="search">
                                        <?php echo csrf_field(); ?>
                                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisa de Ativos"
                                            aria-label="Search" id="search" name="search">

                                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i
                                                class="fas fa-search-location"></i> Buscar</button>

                                    </form>
                                    <form class="form-inline ml-2 my-2 my-lg-0"
                                        action="<?php echo e(route('search.propertie.company')); ?>" method="GET" role="search">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="company">
                                                    Empresa</label>
                                            </div>
                                            <select class="custom-select" id="company" name="company">
                                                <?php if(isset($searchC)): ?>
                                                    <option selected><?php echo e($searchC); ?></option>
                                                <?php endif; ?>

                                                <option value="MCLG">MCLG Empreendimentos e Participações LTDA</option>
                                                <option value="MARCELO LIMIRIO">Marcelo Henrique Limirio Gonçalves
                                                </option>
                                                <option value="CLEONICE LIMIRIO">Cleonice Barbosa Limirio Gonçalves
                                                </option>
                                                <option value="NEO AVIACAO">Neo Aviação</option>
                                                <option value="AGROPECUARIA">Agropecuária Limirio</option>
                                            </select>
                                            <?php if($errors->has('company')): ?>
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong><?php echo e($errors->first('company')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                            <button class="btn btn-outline-success ml-2 my-2 my-sm-0" type="submit"><i
                                                    class="fas fa-search-location"></i> Buscar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6">

                                <div class="row justify-content-end">

                                    <a href="<?php echo e(route('properties.create')); ?>"
                                        class="btn btn-outline-primary btn-icon btn-3 btn-primary" type="button">
                                        <i class="fas fa-plus-square"></i> Novo Ativo
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-header bg-white border-0">
                        <!--<div class="row align-items-center">
                                                                                                                                <a href="<?php echo e('/users/create'); ?>" class="btn btn-icon btn-3 btn-primary" type="button">
                                                                                                                                    <span class="btn-inner--icon"><i class="fas fa-coins"></i></span>
                                                                                                                                    <span class="btn-inner--text">Histórico de Despesas</span>
                                                                                                                                </a>
                                                                                                                            </div>-->
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <main role="main" class="container">
                                <?php echo $__env->make('partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->yieldContent('content'); ?>
                            </main>
                        </div>

                        <?php if(isset($properties)): ?>
                            <div class="container">
                                <div class="row">
                                    <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propertie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                                            <div class="card" style="width: 18rem;">
                                                <div id="carouselExampleFade" class="carousel slide carousel-fade"
                                                    data-ride="carousel">
                                                    <div class="carousel-inner">
                                                        

                                                    </div>
                                                    <a class="carousel-control-prev" href="#carouselExampleFade"
                                                        role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#carouselExampleFade"
                                                        role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                                <div class="card-body">
                                                    <h3 class="card-title"><?php echo e($propertie->name); ?></h3>
                                                    <p class="card-text">

                                                        <?php echo e($propertie->realestate); ?> <br>
                                                        <?php echo e($propertie->company); ?> <br>
                                                        <?php echo e($propertie->statusproperties); ?> <br>
                                                        <?php echo e($propertie->valorvenal); ?> <br>
                                                        <?php echo e($propertie->areatotal); ?> <br>
                                                        <?php echo e($propertie->logradouro); ?> <br>
                                                        <?php echo e($propertie->bairro); ?> <br>

                                                    </p>
                                                    <div class="row justify-content-center">
                                                        <a href="<?php echo e(route('propertie.show', $propertie->id)); ?>"
                                                            class="btn btn-primary btn-outline-primary"><i
                                                                class="fas fa-search-location"></i>
                                                            Visualizar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('Ativos')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/properties/properties-search.blade.php ENDPATH**/ ?>