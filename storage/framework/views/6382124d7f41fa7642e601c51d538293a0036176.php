    

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('partner.partials.header-profile', [
        'title' => __('Sócios'),
        'description' => __('Incluir Sócio'),
        'class' => 'col-lg-12'
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container-fluid mt--7">
            <div class="row">
                <div class="col-xl-12 order-xl-1">
                    <div class="card bg-secondary shadow">
                        <div class="card-body">
                            <form role="form" method="POST" action="<?php echo e(route('partner.create')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="card-header bg-white border-0">
                                    <div class="container">
                                        <div class="form-group">
                                            <label for="partner">Nome</label>
                                            <div class="input-group mb-4" id="partner">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-signature"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Nome do Sócio" type="text"
                                                    name="name" value="<?php echo e(old('name')); ?>">
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
                                                            name="email" value="<?php echo e(old('email')); ?>">
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
                                                            maxlength="11" name="cpf" value="<?php echo e(old('cpf')); ?>">
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
                                            <label for="checkbox">Ativar Sócio</label>
                                            <div>
                                                <label class="custom-toggle" id="checkbox">
                                                    <input type="checkbox" name="status">
                                                    <span class="custom-toggle-slider rounded-circle"></span>
                                                </label>
                                                <span class="clearfix"></span>
                                            </div>
                                        </div>
                                        <div class="text-start">
                                            <button type="submit" class="btn btn-primary mt-4"><i class="fa fa-save"
                                                    aria-hidden="true"></i> <?php echo e(__(' Gravar Sócio')); ?></button>
                                            <a href="<?php echo e(route('partners')); ?>" class="btn btn-primary mt-4" type="button">
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                <span class="btn-inner--text">Cancelar</span>
                                            </a>
                                        </div>
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

<?php echo $__env->make('layouts.app', ['title' => __('Sócios')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/SGI/resources/views/partner/partner-create.blade.php ENDPATH**/ ?>