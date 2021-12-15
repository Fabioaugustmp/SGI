<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('classexpenses.partials.header-profile', [
    'title' => __('Classe de Despesa'),
    'description' => __('Criar Classe de Despesa'),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-body">
                        
                        <div class="card-body">
                            <form role="form" method="POST" action="<?php echo e(route('classexpenses.add')); ?>">
                                <?php echo csrf_field(); ?>

                                <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                    <label for="name">Classe de Despesa</label>
                                    <div class="input-group input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-flag"></i></span>
                                        </div>
                                        <input class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                            placeholder="<?php echo e(__('Classe')); ?>" type="text" name="name"
                                            value="<?php echo e(old('name')); ?>" required autofocus>
                                    </div>
                                    <?php if($errors->has('name')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('name')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label for="description">Descricao</label>
                                    <textarea class="form-control <?php echo e($errors->has('description') ? ' has-danger' : ''); ?>" id="description" rows="5" name="description"
                                        placeholder="Informe uma breve descricao da classe de despesa ..." required value="<?php echo e(old('description')); ?>"></textarea>
                                    <?php if($errors->has('description')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('description')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <div>
                                        <select class="custom-select" id="status" name="status" required> 
                                            <option selected disabled>Selecione...</option>
                                            <option value="1">Ativo</option>
                                            <option value="0">Inativo</option>
                                        </select>
                                    </div>
                                    <?php if($errors->has('status')): ?>
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('status')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                </div>

                                <div class="text-start">
                                    <button type="submit" class="btn btn-primary mt-4 btn-outline-primary"><i class="fa fa-plus"
                                            aria-hidden="true"></i> <?php echo e(__(' Gravar')); ?></button>
                                    <a href="<?php echo e(route('classexpenses')); ?>" class="btn btn-primary mt-4 btn-outline-primary"><i class="fa fa-times" aria-hidden="true"></i> Cancelar</a>
                                </div>
                            </form>
                        </div>
                        <hr class="my-4" />
                    </div>
                </div>
            </div>
        </div>

        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('Classe de Despesa')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/SGI/resources/views/classexpenses/classexpenses-create.blade.php ENDPATH**/ ?>