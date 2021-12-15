<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('expenses.partials.header-profile', [
    'title' => __('Despesas'),
    'description' => __('Editar Despesa'),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-body">
                        <form role="form" method="POST" action="<?php echo e(route('expense.edit.put', ['expenses' => $expenses->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="card-header bg-white border-0">
                                <div class="container">
                                    <div class="form-group">
                                        <label for="id_propertie">Ativo</label>
                                        <div class="input-group mb-4" id="id_propertie">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="fas fa-home"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Inclusao"
                                                 name="id_propertie" value="<?php echo e($expenses->id_propertie); ?>" readonly>
                                        </div>                              
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="partner">Tipo de Despesa</label>
                                                <div class="input-group mb-4" id="partner">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-money-coins"></i></span>
                                                    </div>
                                                    <select class="form-control"  name="expensetype">  
                                                        <option selected><?php echo e($expenses->expensetype); ?></option>                                                      
                                                        <?php $__currentLoopData = $expensetypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expensetype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                                      
                                                            <?php if($expensetype->status === 1): ?>
                                                                <option value="<?php echo e($expensetype->name); ?>">
                                                                    <?php echo e($expensetype->name); ?>

                                                                </option>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <?php if($errors->has('expensetype')): ?>
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong><?php echo e($errors->first('expensetype')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="partner">Classe de Despesa</label>
                                                <div class="input-group mb-4" id="partner">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                                    </div>
                                                    <select class="form-control" name="classexpense">
                                                        <option selected><?php echo e($expenses->classexpense); ?></option>                                                                                                                
                                                        <?php $__currentLoopData = $classexpenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classexpense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($classexpense->status === 1): ?>
                                                                <option value="<?php echo e($classexpense->name); ?>">
                                                                    <?php echo e($classexpense->name); ?>

                                                                </option>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                                <?php if($errors->has('classexpense')): ?>
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong><?php echo e($errors->first('classexpense')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="partner">Data de Inclusão</label>
                                                <div class="input-group mb-4" id="partner">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="far fa-calendar-check"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" placeholder="Inclusao"
                                                        aria-label="DtInclusao" aria-describedby="addon-wrapping" name="includedate" value="<?php echo e($expenses->includedate); ?>" >
                                                </div>
                                                <?php if($errors->has('includedate')): ?>
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong><?php echo e($errors->first('includedate')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="partner">Data Vencimento</label>
                                                <div class="input-group mb-4" id="partner">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="far fa-calendar-times"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" placeholder="Vencimento"
                                                        aria-label="DtVencimento" aria-describedby="addon-wrapping" name="expiredate" value="<?php echo e($expenses->expiredate); ?>" >
                                                    </select>
                                                </div>
                                                <?php if($errors->has('expiredate')): ?>
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong><?php echo e($errors->first('expiredate')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="partner">Data de Pagamento</label>
                                                <div class="input-group mb-4" id="partner">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="far fa-calendar-minus"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" placeholder="Inclusao"
                                                        aria-label="DtInclusao" aria-describedby="addon-wrapping" name="paymentdate" value="<?php echo e($expenses->paymentdate); ?>" >
                                                </div>
                                                <?php if($errors->has('paymentdate')): ?>
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong><?php echo e($errors->first('paymentdate')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="partner">Competência
                                                </label>
                                                <div class="input-group mb-4" id="partner">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="far fa-calendar"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" placeholder="Competência"
                                                        aria-label="" aria-describedby="addon-wrapping" name="competence" value="<?php echo e($expenses->competence); ?>">
                                                </div>
                                                <?php if($errors->has('competence')): ?>
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong><?php echo e($errors->first('competence')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="partner">Valor
                                        </label>
                                        <div class="input-group mb-4" id="partner">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-money-bill-wave"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Valor da Despesa" name="value" value="<?php echo e($expenses->value); ?>" type="text" data-affixes-stay="true" data-prefix="R$ " data-thousands="."
                                            data-decimal="," class="form-control" aria-label="Amount" id="valor">
                                        </div>
                                        <?php if($errors->has('value')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong><?php echo e($errors->first('value')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="partner">Observações
                                        </label>
                                        <div class="input-group mb-4" id="observations">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-stream"></i></span>
                                            </div>
                                            <textarea class="form-control" placeholder="Observações gerais da despesa..." name="observations"><?php echo e($expenses->observations); ?></textarea>
                                        </div>                                      
                                    </div>
                                    <div class="text-start">
                                        <button type="submit" class="btn btn-primary btn-outline-primary mt-4"><i class="fa fa-edit"
                                                aria-hidden="true"></i> <?php echo e(__(' Atualizar')); ?></button>
                                                <a href="<?php echo e(route('expense.show.propertie', $expenses->id_propertie)); ?>" class="btn btn-primary btn-outline-primary mt-4"><i class="fas fa-chevron-circle-left" aria-hidden="true"></i> Voltar</a>
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
    <script>
        $(function() {
            $('#valor').maskMoney();           
        })

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('Despesas')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/expenses/expense-edit.blade.php ENDPATH**/ ?>