<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('properties.partials.header-profile', [
    'title' => __('Ativos'),
    'description' => __('Editar Sócios'),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--https://stackoverflow.com/questions/51287100/laravel-ajax-search-in-bootstrap-modal-->

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row m-2">
                            <div class="col-6">
                                <div class="row justify-content-start">
                                    <h2><i class="fas fa-user-tag"></i> Atualizar Sócios</h2>
                                    <small data-toggle="tooltip" data-placement="top"
                                        title="Neste campo socios sao adicionados no ativo!"><i
                                            class="fas fa-info-circle"></i></small>
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" method="POST" action="<?php echo e(route('properties.insert.partner.post', ['properties' => $properties->id])); ?>"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="container">                              

                                <hr>

                                <div class="row">
                                    <div class="col-12">
                                        <?php if($errors->has('properties')): ?>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <h4 class="alert-heading"><i class="fas fa-exclamation-triangle"></i>
                                                    Atenção!</h4>
                                                <p> 
                                                    Para realizar o cadastro de sócios, é nescessário cadastrar um ativo,
                                                    volte ao primeiro passo!
                                                </p>
                                                <p>
                                                    Ou <a href="<?php echo e(route('properties.create')); ?>">clique aqui.</a>
                                                </p>                                               
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <hr>
                                        <?php endif; ?>
                                    </div>


                                </div>

                                <div class="row">

                                    <div class="col-lg-8 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Nome do Ativo</label>
                                            <div class="input-group mb-4" id="name">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                                                </div>
                                                <input type="hidden" value="<?php echo e($properties->id); ?>" name="properties">
                                                <input class="form-control" placeholder="Nome do Ativo" type="text"
                                                    name="name" value="<?php echo e($properties->name); ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="partner">Valor da Aquisição</label>
                                            <div class="input-group mb-4" id="valordaaquisicao">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Valor da Aquisição" type="text"
                                                    name="valordaaquisicao" value="<?php echo e($properties->valordaaquisicao); ?>"
                                                    readonly>
                                            </div>
                                            <?php if($errors->has('valordaaquisicao')): ?>
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong><?php echo e($errors->first('valordaaquisicao')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <label for="datatable">Adicionar Socios</label>
                                <small data-toggle="tooltip" data-placement="top"
                                    title="Para adicionar socios, pressione mais de um ao mesmo tempo!"><i
                                        class="fas fa-info-circle"></i></small>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="realestate">
                                            Adicionar Socios</label>

                                    </div>
                                    <select class="custom-select" id="partner" name="partners[]" size="6" multiple>

                                        <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($partner->status === 1): ?>
                                                <option value="<?php echo e($partner->id); ?>" style="text-transform: uppercase">
                                                    <?php echo e($partner->name); ?>

                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('partner')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('partner')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>


                                <div class="text-start">
                                    <button type="submit" class="btn btn-primary btn-outline-primary mt-4"><i
                                            class="fas fa-user-plus" aria-hidden="true"></i>
                                        <?php echo e(__(' Inserir Sócios ')); ?></button>
                                    <a href="<?php echo e(route('properties')); ?>" class="btn btn-primary btn-outline-primary mt-4"
                                        type="button">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        <span class="btn-inner--text">Cancelar</span>
                                    </a>
                                </div>
                            </div>
                        </form>
                        <hr class="my-4" />
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('Ativos')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/properties/partner/properties-update-partner.blade.php ENDPATH**/ ?>