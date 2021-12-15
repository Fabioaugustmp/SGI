<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.header-profile', [
    'title' => __('Usuários'),
    'description' => __('Editar Usuário'),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">                   
                    <div class="card-body">
                        <form role="form" method="POST" action="<?php echo e(route('users/create')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                                    </div>
                                    <input class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>"
                                        placeholder="<?php echo e(__('Nome')); ?>" type="text" name="name"
                                        value="<?php echo e($user->name); ?>" required autofocus>
                                </div>
                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                                <div class="input-group input-group-alternative mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input readonly class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>"
                                        placeholder="<?php echo e(__('Email')); ?>" type="email" name="email"
                                        value="<?php echo e($user->email); ?>" required>
                                </div>
                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>                           
                            <div class="form-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>"
                                        placeholder="<?php echo e(__('Senha')); ?>" type="password" name="password" required>
                                </div>
                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="<?php echo e(__('Confirme a senha')); ?>"
                                        type="password" name="password_confirmation" required>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4"><i class="fa fa-user-edit"
                                        aria-hidden="true"></i> <?php echo e(__(' Atualizar ')); ?></button>
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

<?php echo $__env->make('layouts.app', ['title' => __('Usuários')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/SGI/resources/views/users/users-update.blade.php ENDPATH**/ ?>