<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('expenses.partials.header-profile', [
    'title' => __('Despesas'),
    'description' => __('Visualizar Despesa'),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-body">
                        <form role="form" method="POST" action="#">
                            <?php echo csrf_field(); ?>
                            <div class="card-header bg-white border-0">
                                <div class="container">
                                    <div class="form-group">
                                        <label for="id_propertie">Ativo</label>
                                        <div class="input-group mb-4" id="id_propertie">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="far fa-home"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Inclusao"
                                                 name="id_propertie" value="<?php echo e($expenses->id_propertie); ?>" readonly>
                                        </div>                              
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="partner">Tipo de Despesa</label>
                                                <div class="input-group mb-4" id="id_propertie">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-money-coins"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Inclusao"
                                                        name="id_propertie" value="<?php echo e($expenses->expensetype); ?>" readonly>
                                                </div>                                                      
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="partner">Classe de Despesa</label>
                                                <div class="input-group mb-4" id="id_propertie">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="ni ni-money-coins"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Inclusao"
                                                        name="id_propertie" value="<?php echo e($expenses->classexpense); ?>" readonly>
                                                </div>                                                  
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
                                                        aria-label="DtInclusao" aria-describedby="addon-wrapping" name="includedate" value="<?php echo e($expenses->includedate); ?>" readonly>
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
                                                        aria-label="DtVencimento" aria-describedby="addon-wrapping" name="expiredate" value="<?php echo e($expenses->expiredate); ?>" readonly>
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
                                                        aria-label="DtInclusao" aria-describedby="addon-wrapping" name="paymentdate" value="<?php echo e($expenses->paymentdate); ?>" readonly>
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
                                                        aria-label="" aria-describedby="addon-wrapping" name="competence" value="<?php echo e($expenses->competence); ?>" readonly>
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
                                            data-decimal="," class="form-control" aria-label="Amount" id="valor" readonly>
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
                                            <textarea class="form-control" placeholder="Observações gerais da despesa..." name="observations" readonly><?php echo e($expenses->observations); ?></textarea>
                                        </div>                                      
                                    </div>
                                    <div class="text-start">                                        
                                        <a href="<?php echo e(route('expense.show.propertie', $expenses->id_propertie )); ?>" class="btn btn-primary btn-outline-primary mt-4" type="button">
                                            <i class="fas fa-chevron-circle-left" aria-hidden="true"></i>
                                            <span class="btn-inner--text">Voltar</span>
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
    <script>
        $(function() {
            $('#valor').maskMoney();           
        })

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('Despesas')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/expenses/expenses-show-unique.blade.php ENDPATH**/ ?>