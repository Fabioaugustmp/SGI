    

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('partner.partials.header-profile', [
        'title' => __('Sócios'),
        'description' => __('Editar Sócio'),
        'class' => 'col-lg-12'
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="row justify-content-start m-4">
                                        <h3><i class="fas fa-user"></i> <?php echo e($partner->name); ?></h3>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="row justify-content-end mr-3">
                                        <a href="<?php echo e(route('partners')); ?>" class="btn btn-primary btn-outline-primary mt-4"
                                            type="button">
                                            <i class="fas fa-chevron-circle-left" aria-hidden="true"></i> Voltar                                            
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <form role="form" method="POST"
                                action="<?php echo e(route('partner.edit.put', ['partner' => $partner->id])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <div class="card-header bg-white border-0">
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="partner">Nome</label>
                                            <div class="input-group mb-4" id="partner">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Nome do Sócio" type="text"
                                                    name="name" value="<?php echo e($partner->name); ?>" readonly>
                                            </div>
                                            <?php if($errors->has('name')): ?>
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong><?php echo e($errors->first('name')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="partner">Email</label>
                                                    <div class="input-group mb-4" id="partner">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="far fa-envelope-open"></i></span>
                                                        </div>
                                                        <input class="form-control" placeholder="Email do Sócio" type="text"
                                                            name="email" value="<?php echo e($partner->email); ?>" readonly>
                                                    </div>
                                                    <?php if($errors->has('email')): ?>
                                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label for="partner">CPF</label>
                                                    <div class="input-group mb-4" id="partner">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i
                                                                    class="far fa-address-card"></i></span>
                                                        </div>
                                                        <input class="form-control" placeholder="CPF do Sócio" type="numer"
                                                            maxlength="11" name="cpf" value="<?php echo e($partner->cpf); ?>"
                                                            readonly>
                                                    </div>
                                                    <?php if($errors->has('cpf')): ?>
                                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                                            <strong><?php echo e($errors->first('cpf')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="checkbox">Status Sócio</label>
                                            <div class="col-12 mb-4">
                                                <?php if($partner->status === 1): ?>
                                                    <span class="badge badge-pill badge-success">Ativo</span>
                                                <?php else: ?>
                                                    <span class="badge badge-pill badge-danger">Inativo</span>
                                                <?php endif; ?>
                                                <span class="clearfix"></span>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>

                                    <div class="container">
                                        <div class="col-12 m-4">
                                            <h3><i class="fas fa-home"></i> Ativos</h3>
                                        </div>

                                        <table id="datatable" class="display table-responsive " style="width:100%">
                                            <thead>
                                                <tr align="center">
                                                    <th>Nome do Ativo</th>
                                                    <th>Valor Venal</th>
                                                    <th>Vl Aquisição</th>
                                                    <th>Vl Venda</th>
                                                    <th>Porcentagem%</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $properties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $propertie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr align="center">
                                                        <td><?php echo e($propertie->name); ?></td>
                                                        <td><?php echo e($propertie->valorvenal); ?></td>
                                                        <td><?php echo e($propertie->valordaaquisicao); ?></td>
                                                        <td><?php echo e($propertie->valordevenda); ?></td>
                                                        <td><?php echo e($propertie->valordavenda); ?></td>
                                                        <td align="center"><a class="mr-2"
                                                                href="<?php echo e(route('propertie.show', $propertie->id)); ?>"><i
                                                                    class="far fa-eye"></i></a>
                                                            <a href="<?php echo e(route('propertie.edit', $propertie->id)); ?>"><i
                                                                    class="far fa-edit"></i></a>
                                                        </td>
                                                        <td align="center"> </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                            <tfoot>
                                                <tr align="center">
                                                    <th>Nome do Ativo</th>
                                                    <th>Valor Venal</th>
                                                    <th>Vl Aquisição</th>
                                                    <th>Vl Venda</th>
                                                    <th>Porcentagem%</th>
                                                    <th>Ações</th>
                                                </tr>
                                            </tfoot>
                                        </table>
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

<?php echo $__env->make('layouts.app', ['title' => __('Sócios')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/SGI/resources/views/partner/partner-show.blade.php ENDPATH**/ ?>