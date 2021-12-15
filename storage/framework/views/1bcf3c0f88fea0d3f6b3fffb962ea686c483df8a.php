<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('properties.partials.header-profile', [
    'title' => __('Ativos'),
    'description' => __('Criar Ativo'),
    'class' => 'col-lg-12'
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <style>
        .myButton {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 999;
            /*not working */
        }

        .carousel {
            height: 400px;
        }

        .carousel-inner {
            width: 100%;
            /*this must stay */
            height: 100%;
            /*this must stay */
            /* z-index: 1; //this make the carousel-control unclickable */
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
                                    <h2><i class="far fa-edit"></i> Edicao de Imagens do Ativo <?php echo e($properties->name); ?>

                                    </h2>
                                    <small data-toggle="tooltip" data-placement="top"
                                        title="Neste campo um ativo pode ser atualizado! Com todas as informações!"><i
                                            class="fas fa-info-circle"></i></small>

                                </div>

                            </div>
                            <div class="col-6">
                                <div class="row justify-content-end">
                                    <a href="<?php echo e(route('propertie.show', $properties->id)); ?>"
                                        class="btn btn-icon btn-3 btn-primary btn-outline-primary mt-4" type="button"><i
                                            class="fas fa-chevron-circle-left"></i> Voltar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form role="form" method="POST"
                            action="<?php echo e(route('properties.edit.images.put', ['properties' => $properties->id])); ?>"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="container">

                                <div class="form-group">
                                    <label for="name">Nome do Ativo</label>
                                    <input type="text" class="form-control" id="name" placeholder="Insira o nome do ativo."
                                        name="name" value="<?php echo e($properties->name); ?>" readonly>
                                </div>


                                <hr>

                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-md-8 col-sm-8">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                    class="active">
                                                </li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <?php $__currentLoopData = $properties->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $picture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="item active text-center">
                                                        <a type="submit" class="btn btn-outline-light myButton"><i
                                                                class="fas fa-times"></i></a>
                                                    </div>
                                                    <?php if($loop->first): ?>
                                                        <div class="carousel-item active">
                                                        <?php else: ?>
                                                            <div class="carousel-item">
                                                    <?php endif; ?>
                                                    <img src="<?php echo e(env('APP_URL')); ?>/storage/<?php echo e($picture->path); ?>"
                                                        class="d-block rounded img-fluid" alt="Ativo_<?php echo e($picture->id); ?>"
                                                        style="height: auto; width:100%;">
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="container">
                                <div class="text-start">
                                    <button type="button" class="btn btn-primary btn-outline-primary mt-4"><i
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
                    resultado.innerHTML = "CEP inválido ou inexistente!",
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

<?php echo $__env->make('layouts.app', ['title' => __('Ativos')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/properties/uploads/images/properties-edit-images.blade.php ENDPATH**/ ?>