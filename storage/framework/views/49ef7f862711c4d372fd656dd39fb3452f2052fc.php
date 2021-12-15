<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('classexpenses.partials.header-profile', [
    'title' => __('Classe de Despesa'),
    'description' => __('Listar Classes de Despesa'),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-body">
                        <div class="card-header bg-white border-0 justify-content-end">
                            <main role="main" class="container">
                                <?php echo $__env->make('partials.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php echo $__env->yieldContent('content'); ?>
                            </main>

                            <div class="row justify-content-end">
                                <a href="<?php echo e(route('classexpenses.create')); ?>" class="btn btn-icon btn-3 btn-primary btn-outline-primary"
                                    type="button"> <i class="fas fa-plus-square"></i> Novo
                                </a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-items-center table-flush table-striped table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col" class="sort" data-sort="name">ID #</th>
                                        <th scope="col" class="sort" data-sort="name">Classe de Despesa</th>
                                        <th scope="col" class="sort" data-sort="budget">Descrição</th>
                                        <th scope="col" class="sort" data-sort="status">Status</th>
                                        <th scope="col" class="sort">Ações</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    <?php $__currentLoopData = $classexpenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-md"
                                                            style="text-transform: uppercase"><?php echo e($type->id); ?></span>
                                                    </div>
                                                </div>
                                            </th>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-md"
                                                            style="text-transform: uppercase"><?php echo e($type->name); ?></span>
                                                    </div>
                                                </div>
                                            </th>
                                            <th scope="row">
                                                <div class="media align-items-center">
                                                    <div class="media-body">
                                                        <span class="name mb-0 text-md"
                                                            style="text-transform: uppercase"><?php echo e($type->description); ?>

                                                        </span>
                                                    </div>
                                                </div>
                                            </th>
                                            <?php if($type->status === 1): ?>
                                                <td class="budget">
                                                    <span class="badge badge-pill badge-success">Ativo</span>
                                                </td>
                                            <?php else: ?>
                                                <td class="budget">
                                                    <span class="badge badge-pill badge-danger">Inativo</span>
                                                </td>
                                            <?php endif; ?>

                                            <td class="justify-content-center">
                                                <a class="btn btn-outline-primary" href="<?php echo e(route('classexpenses.show' , $type->id )); ?>"><i class="fas fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
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

<?php echo $__env->make('layouts.app', ['title' => __('Classes de Despesa')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/SGI/resources/views/classexpenses/classexpenses.blade.php ENDPATH**/ ?>