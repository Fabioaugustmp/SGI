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

                        <div class="row mx-2 px-2">                            
                            <div class="col-12">

                                <div class="row justify-content-end">
                                    <a href="<?php echo e(route('properties')); ?>"
                                        class="btn btn-outline-primary btn-icon btn-3 btn-primary" type="button">
                                        <i class="fab fa-buromobelexperte"></i> Card
                                    </a>
                                    <a href="<?php echo e(route('properties.create')); ?>"
                                        class="btn btn-outline-primary btn-icon btn-3 btn-primary" type="button">
                                        <i class="fas fa-plus-square"></i> Novo Ativo
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        <div class="container">
                            <table id="datatable" class="display table-responsive " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Tipo</th>
                                        <th>Status</th>
                                        <th>CEP</th>
                                        <th>Estado</th>
                                        <th>Valor Venal</th>
                                        <th>Área Total</th>
                                        <th>Construção</th>
                                        <th>Visualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propertie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="justify-cotent-center">
                                            <td><?php echo e($propertie->name); ?></td>
                                            <td><?php echo e($propertie->realestate); ?></td>
                                            <td><?php echo e($propertie->statusproperties); ?></td>
                                            <td><?php echo e($propertie->cep); ?></td>
                                            <td><?php echo e($propertie->uf); ?></td>
                                            <td><?php echo e($propertie->valorvenal); ?></td>
                                            <td><?php echo e($propertie->areatotal); ?></td>
                                            <td><?php echo e($propertie->construction); ?></td>
                                            <td align="center"><a href="<?php echo e(route('propertie.show', $propertie->id)); ?>"><i
                                                        class="far fa-eye"></i></a> </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Tipo</th>
                                        <th>Status</th>
                                        <th>CEP</th>
                                        <th>Estado</th>
                                        <th>Valor Venal</th>
                                        <th>Área Total</th>
                                        <th>Construção</th>
                                        <th>Visualizar</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('Ativos')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/properties/properties-list.blade.php ENDPATH**/ ?>