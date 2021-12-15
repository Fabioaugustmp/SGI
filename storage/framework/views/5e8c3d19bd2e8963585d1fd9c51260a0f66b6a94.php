<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('properties.partials.header-profile', [
    'title' => __('Ativos'),
    'description' => __('Adicionar Participação Societária'),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row m-2">
                            <div class="col-6">
                                <div class="row justify-content-start">
                                    <h2><i class="fas fa-user-tag"></i> Participação dos Sócios</h2>
                                    <small data-toggle="tooltip" data-placement="top"
                                        title="Neste campo socios sao adicionados no ativo!"><i
                                            class="fas fa-info-circle"></i></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" method="POST"
                            action="<?php echo e(route('properties.insert.value.partner.post', $properties->id)); ?>"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="container">
                                <hr>

                                <div class="row">
                                    <div class="col-12">
                                        <?php if($errors->has('properties')): ?>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <h4 class="alert-heading"><i class="fas fa-exclamation-triangle"></i>
                                                    Atenção!</h4>
                                                <p>
                                                    Para realizar o cadastro de sócios, é nescessário cadastrar um ativo,
                                                    volte ao primeiro passo!
                                                </p>
                                                <p>
                                                    Ou <a href="<?php echo e(route('properties.create')); ?>">clique aqui.</a>
                                                </p>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <hr>
                                        <?php endif; ?>
                                    </div>


                                </div>

                                <div class="row">

                                    <div class="col-lg-8 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Nome do Ativo</label>
                                            <div class="input-group mb-4" id="name">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                                                </div>
                                                <input type="hidden" value="<?php echo e($properties->id); ?>" name="properties">
                                                <input class="form-control" placeholder="Nome do Ativo" type="text"
                                                    name="name" value="<?php echo e($properties->name); ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="partner">Valor da Aquisição</label>
                                            <div class="input-group mb-4" id="valordaaquisicao">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                                </div>
                                                <input class="form-control" placeholder="Valor societário" type="text"
                                                    name="valordaaquisicao" value="<?php echo e($properties->valordaaquisicao); ?>"
                                                    readonly>
                                            </div>
                                            <?php if($errors->has('valordaaquisicao')): ?>
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong><?php echo e($errors->first('valordaaquisicao')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <label for="partner">Lista de Socios</label>

                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="partner">Nome do Socio</label>
                                            <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="input-group mb-4" id="partner">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="fas fa-user-tie"></i></span>
                                                    </div>

                                                    <!--<input type="hidden" value="<?php echo e($partner->id); ?>"
                                                                        name="partner<?php echo e(count($partners)); ?>">
                                                                    <input class="form-control" placeholder="<?php echo e($partner->name); ?>"
                                                                        type="text" name="partnerName<?php echo e(count($partners)); ?>"
                                                                        value="<?php echo e($partner->name); ?>" readonly
                                                                        style="text-transform: uppercase">-->

                                                    <input class="form-control" type="text" value="<?php echo e($partner->id); ?>"
                                                        name="partnerId[]" hidden>
                                                    <input class="form-control" type="text" value="<?php echo e($partner->name); ?>"
                                                        name="partnerName[]" readonly>

                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($errors->has('partner')): ?>
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong><?php echo e($errors->first('partner')); ?></strong>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="partner">Valor Societário</label>
                                            <?php $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="input-group mb-4" id="partner">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                                    </div>
                                                    <!--<input class="form-control" placeholder="Valor da Aquisição"
                                                                    id="partial_value_<?php echo e(count($partners)); ?>" type="text"
                                                                    name="partial_value_<?php echo e(count($partners)); ?>"
                                                                    data-affixes-stay="true" data-prefix="R$ " data-thousands="."
                                                                    data-decimal="," aria-label="Amount">-->
                                                    <input class="form-control" type="number" name="partnerValue[]"
                                                        id="price">
                                                </div>
                                                <script>
                                                    $(function() {
                                                        $("#partial_value_<?php echo e(count($partners)); ?>").maskMoney();
                                                        $("#valordevenda").maskMoney();
                                                    })

                                                </script>


                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($errors->has('cpf')): ?>
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong><?php echo e($errors->first('cpf')); ?></strong>
                                                </span>
                                            <?php endif; ?>

                                        </div>
                                    </div>

                                    <!-- <div class="col-lg-6 col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="partner">Somatória valor da aquisição</label>
                                                                <div class="input-group mb-4" id="partner">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                                                    </div>
                                                                    <input class="form-control" placeholder="Valor da Aquisição" type="numer"
                                                                        maxlength="11" name="cpf" value="<?php echo e(old('cpf')); ?>">
                                                                </div>
                                                                <span id="resultado"></span>
                                                                <?php if($errors->has('cpf')): ?>
                                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                                        <strong><?php echo e($errors->first('cpf')); ?></strong>
                                                                    </span>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>-->
                                </div>
                                <div class="text-start">
                                    <button type="submit" class="btn btn-primary btn-outline-primary mt-4"><i
                                            class="fas fa-user-plus" aria-hidden="true"></i>
                                        <?php echo e(__(' Inserir Participação ')); ?></button>
                                    <a href="<?php echo e(route('properties')); ?>" class="btn btn-primary btn-outline-primary mt-4"
                                        type="button">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        <span class="btn-inner--text">Cancelar</span>
                                    </a>
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
        function calcular() {
            var valor1 = parseInt(document.getElementById('txt1').value, 10);
            var valor2 = parseInt(document.getElementById('txt2').value, 10);
            document.getElementById('result').value = valor1 + valor2;
        }

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('Ativos')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/properties/partner/properties-add-partner-value.blade.php ENDPATH**/ ?>