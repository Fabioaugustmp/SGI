<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.header-profile', [
    'title' => __('Sócios'),
    'description' => __('Lista Sócios'),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-body">
                        <form role="form" method="POST" action="">
                            <?php echo csrf_field(); ?>
                            <div class="card-header bg-white border-0">
                                <table class="table table-bordered table-hover mb-3">
                                    <thead>
                                        <tr>
                                        <th scope="col">Nome Sócio</th>
                                        <th scope="col">Total Investido</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        </tr>
                                        <tr>
                                        <th scope="row"></th>
                                        <td></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                    <nav aria-label="Navegação">
                                        <ul class="pagination">
                                            <!--<li class="page-item"><a class="page-link" href="#">Anterior</a></li>-->
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Próxima</a></li>
                                        </ul>
                                    </nav>
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

<?php echo $__env->make('layouts.app', ['title' => __('Usuários')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/partner/properties.blade.php ENDPATH**/ ?>