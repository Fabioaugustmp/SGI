<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('expenses.partials.header-profile', [
    'title' => __('Despesas'),
    'description' => __('Lista Despesas'),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-body">
                        <div class="card-header bg-white border-0">
                            <div class="row justify-content-end">
                                <a href="<?php echo e(route('expense.create')); ?>"
                                    class="btn btn-icon btn-3 btn-primary btn-outline-primary" type="button"><i
                                        class="fas fa-plus-square"></i> Nova despesa
                                </a>
                            </div>
                        </div>
                        <form role="form" method="POST" action="">
                            <?php echo csrf_field(); ?>
                            <div class="card-header bg-white border-0">
                                <div class="container">
                                    <table id="datatable" class="display table-responsive " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Ativo</th>
                                                <th>Classe Despesa</th>
                                                <th>Tipo Despesa</th>
                                                <th>Data Inclusao</th>
                                                <th>Data Final</th>
                                                <th>Data Pagamento</th>
                                                <th>Competencia</th>
                                                <th>Valor</th>
                                                <th>Visualizar</th>
                                                <th>Editar</th>
                                            </tr>
                                        </thead>
                                        <tbody>                                               
                                            <?php $__currentLoopData = $expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr align="center">
                                                <td><?php echo e($expense->id_propertie); ?></td>
                                                <td><?php echo e($expense->classexpense); ?></td>
                                                <td><?php echo e($expense->expensetype); ?></td>
                                                <td><?php echo e(date('d-m-Y', strtotime($expense->includedate))); ?></td>
                                                <td><?php echo e(date('d-m-Y', strtotime($expense->expiredate))); ?></td>
                                                <td><?php echo e(date('d-m-Y', strtotime($expense->paymentdate))); ?></td>
                                                <td><?php echo e(date('d-m-Y', strtotime($expense->competence))); ?></td>
                                                <td>R$ <?php echo e($expense->value); ?></td>
                                                <td class="justify-content-center"><a href="<?php echo e(route('expense.show.unique', $expense->id)); ?>"><i class="far fa-eye"></i></a> </td>
                                                <td class="justify-content-center"><a href="<?php echo e(route('expense.edit', $expense->id)); ?>"><i class="far fa-edit"></i></a> </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Ativo</th>
                                                <th>Classe Despesa</th>
                                                <th>Tipo Despesa</th>
                                                <th>Data Inclusao</th>
                                                <th>Data Final</th>
                                                <th>Data Pagamento</th>
                                                <th>Competencia</th>
                                                <th>Valor</th>
                                                <th>Visualizar</th>
                                                <th>Editar</th>
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

<?php echo $__env->make('layouts.app', ['title' => __('Despesas')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/expenses/expenses.blade.php ENDPATH**/ ?>