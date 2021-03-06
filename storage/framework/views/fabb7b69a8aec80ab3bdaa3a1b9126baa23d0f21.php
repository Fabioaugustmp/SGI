<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('properties.partials.header-profile', [
    'title' => __('Ativos'),
    'description' => __('Criar Ativo'),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--https://stackoverflow.com/questions/51287100/laravel-ajax-search-in-bootstrap-modal-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#imgInp").change(function() {
            readURL(this);
        });
    </script>



    <style>
        /*!
                                                 * bsStepper v{version} (https://github.com/Johann-S/bs-stepper)
                                                 * Copyright 2018 - {year} Johann-S <johann.servoire@gmail.com>
                                                 * Licensed under MIT (https://github.com/Johann-S/bs-stepper/blob/master/LICENSE)
                                                 */

        .bs-stepper .step-trigger {
            display: inline-flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-size: 1rem;
            font-weight: 700;
            line-height: 1.5;
            color: #6c757d;
            text-align: center;
            text-decoration: none;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            background-color: transparent;
            border: none;
            border-radius: .25rem;
            transition: background-color .15s ease-out, color .15s ease-out;
        }

        .bs-stepper .step-trigger:not(:disabled):not(.disabled) {
            cursor: pointer;
        }

        .bs-stepper .step-trigger:disabled,
        .bs-stepper .step-trigger.disabled {
            pointer-events: none;
            opacity: .65;
        }

        .bs-stepper .step-trigger:focus {
            color: #007bff;
            outline: none;
        }

        .bs-stepper .step-trigger:hover {
            text-decoration: none;
            background-color: rgba(0, 0, 0, .06);
        }

        @media (max-width: 520px) {
            .bs-stepper .step-trigger {
                flex-direction: column;
                padding: 10px;
            }
        }

        .bs-stepper-label {
            display: inline-block;
            margin: .25rem;
        }

        .bs-stepper-header {
            display: flex;
            align-items: center;
        }

        @media (max-width: 520px) {
            .bs-stepper-header {
                margin: 0 -10px;
                text-align: center;
            }
        }

        .bs-stepper-line,
        .bs-stepper .line {
            flex: 1 0 32px;
            min-width: 1px;
            min-height: 1px;
            margin: auto;
            background-color: rgba(0, 0, 0, .12);
        }

        @media (max-width: 400px) {

            .bs-stepper-line,
            .bs-stepper .line {
                flex-basis: 20px;
            }
        }

        .bs-stepper-circle {
            display: inline-flex;
            align-content: center;
            justify-content: center;
            width: 2em;
            height: 2em;
            padding: .5em 0;
            margin: .25rem;
            line-height: 1em;
            color: #fff;
            background-color: #6c757d;
            border-radius: 1em;
        }

        .active .bs-stepper-circle {
            background-color: #007bff;
        }

        .bs-stepper-content {
            padding: 0 20px 20px;
        }

        @media (max-width: 520px) {
            .bs-stepper-content {
                padding: 0;
            }
        }

        .bs-stepper.vertical {
            display: flex;
        }

        .bs-stepper.vertical .bs-stepper-header {
            flex-direction: column;
            align-items: stretch;
            margin: 0;
        }

        .bs-stepper.vertical .bs-stepper-pane,
        .bs-stepper.vertical .content {
            display: block;
        }

        .bs-stepper.vertical .bs-stepper-pane:not(.fade),
        .bs-stepper.vertical .content:not(.fade) {
            display: block;
            visibility: hidden;
        }

        .bs-stepper-pane:not(.fade),
        .bs-stepper .content:not(.fade) {
            display: none;
        }

        .bs-stepper .content.fade,
        .bs-stepper-pane.fade {
            visibility: hidden;
            transition-duration: .3s;
            transition-property: opacity;
        }

        .bs-stepper-pane.fade.active,
        .bs-stepper .content.fade.active {
            visibility: visible;
            opacity: 1;
        }

        .bs-stepper-pane.active:not(.fade),
        .bs-stepper .content.active:not(.fade) {
            display: block;
            visibility: visible;
        }

        .bs-stepper-pane.dstepper-block,
        .bs-stepper .content.dstepper-block {
            display: block;
        }

        .bs-stepper:not(.vertical) .bs-stepper-pane.dstepper-none,
        .bs-stepper:not(.vertical) .content.dstepper-none {
            display: none;
        }

        .vertical .bs-stepper-pane.fade.dstepper-none,
        .vertical .content.fade.dstepper-none {
            visibility: hidden;
        }

    </style>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row m-2">
                            <div class="col-6">
                                <div class="row justify-content-start">
                                    <h2><i class="fas fa-plus-square"></i> Cadastro de Ativo</h2>
                                    <small data-toggle="tooltip" data-placement="top"
                                        title="Neste campo um ativo ?? cadastrado! Com todas as informa????es!"><i
                                            class="fas fa-info-circle"></i></small>

                                </div>
                            </div>
                            <div class="col-6">
                                <!--<div class="row justify-content-end">
                                                <a href="<?php echo e('/expense'); ?>" class="btn btn-icon btn-3 btn-primary btn-outline-primary"
                                                    type="button">
                                                    <i class="fas fa-coins"></i> Hist??rico de Despesas
                                                </a>
                                            </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" method="POST" action="<?php echo e(route('properties.create.post')); ?>"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="container">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="bs-stepper">
                                        <div class="bs-stepper-header" role="tablist">
                                            <!-- your steps here -->
                                            <div class="step" data-target="#logins-part">
                                                <button type="button" class="step-trigger" role="tab"
                                                    aria-controls="logins-part" id="logins-part-trigger">
                                                    <span class="bs-stepper-circle bg-primary">1</span>
                                                    <span class="bs-stepper-label text-primary">Dados do Ativo</span>
                                                </button>
                                            </div>
                                            <div class="line"></div>
                                            <div class="step" data-target="#information-part">
                                                <a type="button" class="step-trigger" role="tab"
                                                    href="<?php echo e(route('properties.show.partner')); ?>"
                                                    aria-controls="information-part" id="information-part-trigger">
                                                    <span class="bs-stepper-circle">2</span>
                                                    <span class="bs-stepper-label">Inclus??o de S??cios</span>
                                                </a>
                                            </div>
                                            <!--   <div class="line"></div>
                                                    <div class="step" data-target="#information-part">
                                                        <button type="button" class="step-trigger" role="tab"
                                                            aria-controls="information-part" id="information-part-trigger">
                                                            <span class="bs-stepper-circle">3</span>
                                                            <span class="bs-stepper-label">Hist??rico de Despesas</span>
                                                        </button>
                                                    </div> -->
                                            <div class="line"></div>
                                            <div class="step" data-target="#information-part">
                                                <button type="button" class="step-trigger" role="tab"
                                                    aria-controls="information-part" id="information-part-trigger">
                                                    <span class="bs-stepper-circle">3</span>
                                                    <span class="bs-stepper-label">Salvar Ativo</span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="bs-stepper-content">
                                            <!-- your steps content here -->
                                            <div id="logins-part" class="content" role="tabpanel"
                                                aria-labelledby="logins-part-trigger"></div>
                                            <div id="information-part" class="content" role="tabpanel"
                                                aria-labelledby="information-part-trigger"></div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label for="name">Nome do Ativo</label>
                                    <input type="text" class="form-control" id="name" placeholder="Insira o nome do ativo."
                                        name="name" value="<?php echo e(old('name')); ?>">
                                </div>
                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                                <hr>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="company">
                                            Empresa</label>
                                    </div>
                                    <select class="custom-select" id="company" name="company">
                                        <option selected>Selecione</option>
                                        <option value="MCLG">MCLG Empreendimentos e Participa????es LTDA</option>
                                        <option value="MARCELO LIMIRIO">Marcelo Henrique Limirio Gon??alves
                                        </option>
                                        <option value="CLEONICE LIMIRIO">Cleonice Barbosa Limirio Gon??alves
                                        </option>
                                        <option value="NEO AVIACAO">Neo Avia????o</option>
                                        <option value="AGROPECUARIA">Agropecu??ria Limirio</option>
                                    </select>
                                    <?php if($errors->has('company')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('company')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="realestate">
                                            Tipo do Ativo</label>
                                    </div>
                                    <select class="custom-select" id="realestate" name="realestate">
                                        <!--<option selected>Selecione</option>-->
                                        <?php $__currentLoopData = $realestate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($estate->status === 1): ?>
                                                <option value="<?php echo e($estate->realestate); ?>"><?php echo e($estate->realestate); ?>

                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('realestate')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('realestate')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="statusproperties">
                                            Status do Ativos</label>
                                    </div>
                                    <select class="custom-select" id="statusproperties" name="statusproperties">
                                        <!--<option selected>Selecione</option>-->
                                        <?php $__currentLoopData = $statusproperties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($status->status === 1): ?>
                                                <option value="<?php echo e($status->name); ?>"><?php echo e($status->name); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('statusproperties')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('statusproperties')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="cep">CEP</label>
                                            <input type="text" class="form-control" maxlength="9" id="cep" placeholder="CEP"
                                                name="cep" value="<?php echo e(old('cep')); ?>">
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong id="resultado"></strong>
                                            </span>
                                        </div>

                                        <?php if($errors->has('cep')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong><?php echo e($errors->first('cep')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-8 col-md-8 col-sm-6">
                                        <div class="form-group">
                                            <label for="logradouro">Logradouro/Rua</label>
                                            <input type="text" class="form-control" id="logradouro"
                                                placeholder="Logradouro / Rua" name="logradouro"
                                                value="<?php echo e(old('logradouro')); ?>">
                                        </div>
                                        <?php if($errors->has('logradouro')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong><?php echo e($errors->first('logradouro')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>


                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <div class="form-group">
                                            <label for="bairro">Bairro</label>
                                            <input type="text" class="form-control" id="bairro" placeholder="Bairro"
                                                name="bairro" value="<?php echo e(old('bairro')); ?>">
                                        </div>
                                        <?php if($errors->has('logradouro')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong><?php echo e($errors->first('logradouro')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="localidade">Cidade / Localidade</label>
                                            <input type="text" class="form-control" id="localidade"
                                                placeholder="Cidade / Localidade" name="cidade"
                                                value="<?php echo e(old('cidade')); ?>">
                                        </div>
                                        <?php if($errors->has('cidade')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong><?php echo e($errors->first('cidade')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-6">
                                        <div class="form-group">
                                            <label for="uf">Estado</label>
                                            <input type="text" class="form-control" id="uf" placeholder="Estado / UF"
                                                name="uf" value="<?php echo e(old('uf')); ?>">
                                        </div>
                                    </div>
                                    <?php if($errors->has('uf')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('uf')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="localidade">Latitude</label>
                                        <input type="text" class="form-control" id="latitude" placeholder="Latitude"
                                            name="latitude" value="<?php echo e(old('Latitude')); ?>">
                                    </div>
                                    <?php if($errors->has('latitude')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('latitude')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                    <div class="col-md-6 mb-3">
                                        <label for="localidade">Longitude</label>
                                        <input type="text" class="form-control" id="longitude" placeholder="Longitude"
                                            name="longitude" value="<?php echo e(old('longitude')); ?>">
                                    </div>
                                    <?php if($errors->has('longitude')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('longitude')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="areatotal">??rea Total</label>
                                        <input type="text" class="form-control" id="areatotal" name="areatotal"
                                            data-affixes-stay="true" " data-thousands=" ." data-decimal=","
                                            value="<?php echo e(old('areatotal')); ?>">
                                    </div>
                                    <?php if($errors->has('areatotal')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('areatotal')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationDefault02">??rea Constru??da</label>
                                        <input type="text" class="form-control" id="areaconstruida" name="areaconstruida"
                                            value="<?php echo e(old('areaconstruida')); ?>"
                                            data-affixes-stay="true" " data-thousands=" ." data-decimal=",">
                                    </div>
                                    <?php if($errors->has('areaconstruida')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('areaconstruida')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <hr>

                                <div class="form-row">
                                    <div class="col-4">
                                        <label for="valorvenal">Valor Venal</label>
                                        <div class="input-group mb-3">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                            </div>
                                            <input type="text" data-affixes-stay="true" data-prefix="R$ " data-thousands="."
                                                data-decimal="," class="form-control" aria-label="Amount" name="valorvenal"
                                                id="valorvenal" value="<?php echo e(old('valorvenal')); ?>">
                                        </div>
                                        <?php if($errors->has('valorvenal')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong><?php echo e($errors->first('valorvenal')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-4">
                                        <label for="valordaaquisicao">Valor da Aquisi????o</label>
                                        <div class="input-group mb-3">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-money-bill"></i></span>
                                            </div>
                                            <input type="text" data-affixes-stay="true" data-prefix="R$ " data-thousands="."
                                                data-decimal="," class="form-control" aria-label="Amount"
                                                name="valordaaquisicao" id="valordaaquisicao"
                                                value="<?php echo e(old('valordaaquisicao')); ?>">
                                        </div>
                                        <?php if($errors->has('valordaaquisicao')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong><?php echo e($errors->first('valordaaquisicao')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-4">
                                        <label for="valordevenda">Valor de Venda</label>
                                        <div class="input-group mb-3">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="fas fa-hand-holding-usd"></i></span>
                                            </div>
                                            <input type="text" data-affixes-stay="true" data-prefix="R$ " data-thousands="."
                                                data-decimal="," class="form-control" aria-label="Amount"
                                                name="valordevenda" id="valordevenda" value="<?php echo e(old('valordevenda')); ?>">
                                        </div>
                                        <?php if($errors->has('valordevenda')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong><?php echo e($errors->first('valordevenda')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="dataaquisicao">Data da Aquisi????o</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                                </div>
                                                <input type="date" class="form-control" id="dataaquisicao"
                                                    name="dataaquisicao" required>
                                            </div>
                                        </div>
                                        <?php if($errors->has('dataaquisicao')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong><?php echo e($errors->first('dataaquisicao')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="dataavaliacao">Data Venda/Avalia????o</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                                </div>
                                                <input type="date" class="form-control" id="dataavaliacao"
                                                    name="dataavaliacao">
                                            </div>
                                        </div>
                                        <?php if($errors->has('dataavaliacao')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong><?php echo e($errors->first('dataavaliacao')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>

                                </div>

                                <hr>

                                <div class="form-row">

                                    <label for="construction" class="col-form-label">Que tipo de constru????o existe no
                                        ativo</label>
                                    <div class="col-sm-12">
                                        <select class="custom-select form-control" id="construction" required
                                            name="construction">
                                            <?php $__currentLoopData = $constructions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $construction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($construction->status === 1): ?>
                                                    <option value="<?php echo e($construction->name); ?>">
                                                        <?php echo e($construction->name); ?>

                                                    </option>
                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                        <?php if($errors->has('construction')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong><?php echo e($errors->first('construction')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>

                                </div>

                                <hr>

                                <div class="form-row">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-outline-primary" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <i class="fas fa-upload"></i> Upload de Imagens
                                    </button>

                                    <?php if($errors->has('pictures')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('pictures')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                    <!--
                                            <button type="button" class="btn btn-primary btn-outline-primary" data-toggle="modal"
                                                data-target="#filesModal">
                                                <i class="fas fa-folder-plus"></i> Upload de Arquivos
                                            </button>
                                            -->
                                    <?php if($errors->has('files')): ?>
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong><?php echo e($errors->first('files')); ?></strong>
                                        </span>
                                    <?php endif; ?>

                                    <!-- Modal Images-->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel"><i
                                                            class="fas fa-image"></i>
                                                        Upload de Imagens</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <input type='file' id="imgInp" name="pictures[]" accept="image/*"
                                                        multiple />
                                                    <?php if($errors->has('pictures')): ?>
                                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                                            <strong><?php echo e($errors->first('pictures')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                    <!--<img id="blah" src="#" alt="your image" />-->

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                                            class="far fa-times-circle"></i> Fechar</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                                            class="far fa-save"></i> Salvar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Files -->
                                    <div class="modal fade" id="filesModal" tabindex="-1" role="dialog"
                                        aria-labelledby="filesModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="filesModalLabel"><i class="fas fa-file"></i>
                                                        Upload de Arquivos</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <input type='file' id="imgInp" name="files[]" multiple />
                                                    <?php if($errors->has('files')): ?>
                                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                                            <strong><?php echo e($errors->first('files')); ?></strong>
                                                        </span>
                                                    <?php endif; ?>
                                                    <!--<img id="blah" src="#" alt="your image" />-->

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                                            class="far fa-times-circle"></i> Fechar</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                                            class="far fa-save"></i> Salvar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <!--  <div class="input-group mb-3">
                                                                                                                                            <div class="input-group-prepend">
                                                                                                                                                <span class="input-group-text" id="pictures">Fotos</span>
                                                                                                                                            </div>
                                                                                                                                            <div class="custom-file">
                                                                                                                                                <input type="file" class="custom-file-input" id="pictures"
                                                                                                                                                    aria-describedby="pictures" name="pictures[]" accept="image/*" multiple>
                                                                                                                                                <label class="custom-file-label" for="pictures">Selecionar Foto(s)</label>
                                                                                                                                            </div>
                                                                                                                                            <?php if($errors->has('pictures')): ?>
                                                                                                                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                                                                                                                    <strong><?php echo e($errors->first('pictures')); ?></strong>
                                                                                                                                                </span>
                                                                                                                                            <?php endif; ?>
                                                                                                                                        </div>
                                                                                                                                        <div class="input-group mb-3">
                                                                                                                                                                                    <div class="input-group-prepend">
                                                                                                                                                                                        <span class="input-group-text" id="inputGroupFileAddon01">Anexos</span>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="custom-file">
                                                                                                                                                                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                                                                                                                                                            aria-describedby="inputGroupFileAddon01">
                                                                                                                                                                                        <label class="custom-file-label" for="inputGroupFile01">Selecionar
                                                                                                                                                                                            Arquivo(s)</label>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>-->
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="validationTextarea">Observa????es</label>
                                            <textarea class="form-control" id="validationTextarea"
                                                placeholder="Observa????es gerais do ativo"
                                                name="feedback"><?php echo e(old('feedback')); ?></textarea>

                                        </div>
                                        <?php if($errors->has('feedback')): ?>
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong><?php echo e($errors->first('feedback')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <hr>

                            </div>
                            <div class="container">
                                <div class="text-start">
                                    <button type="submit" class="btn btn-primary btn-outline-primary mt-4"><i
                                            class="fas fa-check" aria-hidden="true"></i>
                                        <?php echo e(__(' Gravar Ativo')); ?></button>
                                    <a href="<?php echo e(route('properties')); ?>" class="btn btn-primary btn-outline-primary mt-4"
                                        type="button">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                        <span class="btn-inner--text">Cancelar</span>
                                    </a>
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
        const cep = document.querySelector("#cep")

        const showData = (result) => {
            for (const campo in result) {
                if (document.querySelector("#" + campo)) {
                    document.querySelector("#" + campo).value = result[campo]
                }
            }
        }

        cep.addEventListener("blur", (e) => {
            let search = cep.value.replace("-", "")
            const options = {
                method: 'GET',
                mode: 'cors', //Alterar para cors posteriorment
                cache: 'default'
            }

            const resultado = document.getElementById('resultado')

            fetch(`https://viacep.com.br/ws/${search}/json/`, options)
                .then(response => {
                    response.json().then(data => showData(data))
                })
                .catch(e => {
                    resultado.innerHTML = "CEP inv??lido ou inexistente!",
                        console.log('Deu Erro: ' + e.message)
                })
        })
    </script>
    <script>
        $(function() {
            $('#valorvenal').maskMoney();
            $('#valordaaquisicao').maskMoney();
            $('#valordevenda').maskMoney();
            $('#areatotal').maskMoney();
            $('#areaconstruida').maskMoney();
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('Ativos')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/properties/properties-create.blade.php ENDPATH**/ ?>