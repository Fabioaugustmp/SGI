<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('properties.partials.header-profile', [
    'title' => __('Ativos'),
    'description' => __('Lista Despesas'),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-body">
                        <div class="card-header bg-white border-0">
                            <div class="row">
                                <div class="col-6">
                                    <div class="row justify-content-start">
                                        <h2><i class="far fa-hand-point-right"></i> <?php echo e($properties->name); ?></h2>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="row justify-content-end">
                                        <a href="<?php echo e(route('propertie.show', $properties->id)); ?>"
                                            class="btn btn-icon btn-3 btn-primary btn-outline-primary" type="button"><i
                                                class="fas fa-chevron-circle-left"></i> Voltar
                                        </a>
                                        <a href="<?php echo e(route('expense.create', $properties->id)); ?>"
                                            class="btn btn-icon btn-3 btn-primary btn-outline-primary" type="button"><i
                                                class="fas fa-plus-square"></i> Nova despesa
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <form role="form" method="POST"
                            action="<?php echo e(route('expense.show.propertie.search', ['properties' => $properties->id])); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="card-header bg-white border-0">
                                <div class="container">
                                    <p>
                                        <button class="btn btn-primary btn-outline-primary" type="button"
                                            data-toggle="collapse" data-target="#pesquisaDetalhada" aria-expanded="false"
                                            aria-controls="pesquisaDetalhada">
                                            <i class="fas fa-filter"></i> Filtrar
                                        </button>
                                    </p>
                                    <div class="row collapse" id="pesquisaDetalhada">
                                        <div class="col-12">
                                            <label for="partner">Selecione o tipo de data, para pesquisa.</label>
                                            <select class="custom-select" id="dates" name="dates">
                                                <option value="includedate">Data de Inclusão</option>
                                                <option value="expiredate">Data Vencimento
                                                </option>
                                                <option value="paymentdate">Data de Pagamento
                                                </option>
                                                <option value="competence">Competência</option>
                                            </select>
                                            <?php if($errors->has('dates')): ?>
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong><?php echo e($errors->first('dates')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <hr>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                            <div class="form-group">
                                                <label for="partner">Data Inicial
                                                </label>
                                                <div class="input-group mb-4" id="partner">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="far fa-calendar-minus"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" placeholder="Data Inicial"
                                                        aria-label="DtInclusao" aria-describedby="addon-wrapping"
                                                        name="datainicial" value="<?php echo e(old('datainicial')); ?>">
                                                </div>
                                                <?php if($errors->has('datainicial')): ?>
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong><?php echo e($errors->first('datainicial')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                                            <div class="form-group">
                                                <label for="partner">Data Final
                                                </label>
                                                <div class="input-group mb-4" id="partner">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="far fa-calendar"></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" placeholder="Data Final"
                                                        aria-label="" aria-describedby="addon-wrapping" name="datafinal"
                                                        value="<?php echo e(old('datafinal')); ?>">
                                                </div>
                                                <?php if($errors->has('datafinal')): ?>
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong><?php echo e($errors->first('datafinal')); ?></strong>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-success btn-outline-success"><i
                                                    class="fas fa-search"></i> Pesquisar</button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="container-fluid">
                                    
                                    <div class="col-md-6">
                                        <div id="chart"></div>
                                    </div>
                                    <div class="col-md-6">
                                        
                                    </div>
                                    <table id="datatable" class="display table-responsive table-striped table-bordered"
                                        style="width:100%">
                                        <thead>
                                            <tr align="center">
                                                <th>Tipo Despesa</th>
                                                <th>Classe Despesa</th>
                                                <th>Data Inclusao</th>
                                                <th>Data Final</th>
                                                <th>Data Pagamento</th>
                                                <th>Competencia</th>
                                                <th>Valor</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr align="center">
                                                    <td><?php echo e($expense->expensetype); ?></td>
                                                    <td><?php echo e($expense->classexpense); ?></td>
                                                    <td><?php echo e(date('d/m/Y', strtotime($expense->includedate))); ?></td>
                                                    <td><?php echo e(date('d/m/Y', strtotime($expense->expiredate))); ?></td>
                                                    <td><?php echo e(date('d/m/Y', strtotime($expense->paymentdate))); ?></td>
                                                    <td><?php echo e(date('d/m/Y', strtotime($expense->competence))); ?></td>
                                                    <td>R$ <?php echo e($expense->value); ?></td>
                                                    <td align="center"><a class="m-2 btn btn-outline-primary"
                                                            href="<?php echo e(route('expense.show.unique', $expense->id)); ?>"><i
                                                                class="far fa-eye"></i></a>
                                                        <a class="btn btn-outline-info" href="<?php echo e(route('expense.edit', $expense->id)); ?>"><i
                                                                class="far fa-edit"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <tfoot>
                                            <tr align="center">
                                                <th>Tipo Despesa</th>
                                                <th>Classe Despesa</th>
                                                <th>Data Inclusao</th>
                                                <th>Data Final</th>
                                                <th>Data Pagamento</th>
                                                <th>Competencia</th>
                                                <th>Valor</th>
                                                <th>Ações</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <?php echo e($labels); ?>


                        </form>
                        <hr class="my-4" />
                    </div>
                </div>
            </div>
        </div>

        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script>
            var options = {
                series: [44, 55, 41, 17, 15],
                labels: [1, 2, 3, 4, 5],
                chart: {
                    type: 'donut',
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        </script>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('Ativos')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/properties/properties-show-expenses.blade.php ENDPATH**/ ?>