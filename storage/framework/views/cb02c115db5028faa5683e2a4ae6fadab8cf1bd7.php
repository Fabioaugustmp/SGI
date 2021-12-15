<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('properties.partials.header-profile', [
    'title' => __('Sócios'),
    'description' => __('Remover Sócios'),
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
                                    <h2><i class="fas fa-user-tag"></i> Remove Sócios</h2>
                                    <small data-toggle="tooltip" data-placement="top"
                                        title="Neste campo socios sao adicionados no ativo!"><i
                                            class="fas fa-info-circle"></i></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
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
                                            <input class="form-control" placeholder="Nome do Ativo" type="text" name="name"
                                                value="<?php echo e($properties->name); ?>" readonly>
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

                            <label for="datatable">Remover Socios</label>
                            <small data-toggle="tooltip" data-placement="top"
                                title="Para adicionar socios, pressione mais de um ao mesmo tempo!"><i
                                    class="fas fa-info-circle"></i></small>

                            <main role="main" class="container">
                                <?php echo $__env->make('partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->yieldContent('content'); ?>
                            </main>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush table-striped table-hover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="name">ID #</th>
                                                <th scope="col" class="sort" data-sort="name">Nome do Sócio</th>
                                                <th scope="col" class="sort" data-sort="budget">Email</th>
                                                <th scope="col" class="sort" data-sort="status">Status</th>
                                                <th scope="col" class="sort">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <th scope="row">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <span class="name mb-0 text-md"
                                                                    style="text-transform: uppercase"><?php echo e($partner->id); ?></span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th scope="row">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <span class="name mb-0 text-md"
                                                                    style="text-transform: uppercase"><?php echo e($partner->name); ?></span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th scope="row">
                                                        <div class="media align-items-center">
                                                            <div class="media-body">
                                                                <span class="name mb-0 text-md"
                                                                    style="text-transform: uppercase"><?php echo e($partner->email); ?>

                                                                </span>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <?php if($partner->status === 1): ?>
                                                        <td class="budget">
                                                            <span class="badge badge-pill badge-success">Ativo</span>
                                                        </td>
                                                    <?php else: ?>
                                                        <td class="budget">
                                                            <span class="badge badge-pill badge-danger">Inativo</span>
                                                        </td>
                                                    <?php endif; ?>

                                                    <td class="justify-content-center">
                                                        <button type="button" class="btn btn-block btn-warning mb-3"
                                                    data-toggle="modal"
                                                    data-target="#modal-notification<?php echo e($partner->id); ?>"><i class="fas fa-times"></i><input type="hidden" value="<?php echo e($partner->id); ?>" name="partner"></button>
                                                    </td>
                                                </tr>
                                               
                                                <div class="modal fade" id="modal-notification<?php echo e($partner->id); ?>"
                                                    tabindex="-1" role="dialog"
                                                    aria-labelledby="modal-notification<?php echo e($partner->id); ?>"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-danger modal-dialog-centered modal-"
                                                        role="document">
                                                        <div class="modal-content bg-gradient-danger">

                                                            <div class="modal-header">
                                                                <h6 class="modal-title" id="modal-title-notification">
                                                                    Atenção</h6>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <div class="py-3 text-center">
                                                                    <i class="ni ni-bell-55 ni-3x"></i>
                                                                    <h4 class="heading mt-4">Atenção</h4>
                                                                    <p>Deseja realmente remover este sócio ?.</p>
                                                                </div>

                                                            </div>

                                                            <div class="modal-footer">
                                                                <a href="<?php echo e(route('properties.remove.partner.post', ['partner' => $partner->id])); ?>"
                                                                    class="btn btn-white">Sim, Remover</a>
                                                                <button type="button"
                                                                    class="btn btn-link text-white ml-auto"
                                                                    data-dismiss="modal">Fechar</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <hr class="my-4" />
                            </div>


                            <div class="col-md-4">                                
                                <div class="text-start">
                                    <a href="<?php echo e(route('properties')); ?>" class="btn btn-primary btn-outline-primary mt-4"
                                        type="button">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        <span class="btn-inner--text">Voltar</span>
                                    </a>
                                </div>
                            </div>
                            <hr class="my-4" />
                        </div>
                    </div>
                </div>
            </div>
            <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('Ativos')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/properties/partner/properties-update-remove-partner.blade.php ENDPATH**/ ?>