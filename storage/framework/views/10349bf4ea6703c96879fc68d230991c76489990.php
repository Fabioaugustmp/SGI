<?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-inner--text"><strong><?php echo e(session()->get('success')); ?></strong></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<?php if(session()->has('warning')): ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <span class="alert-inner--icon"><i class="fas fa-info-circle"></i></span>
    <span class="alert-inner--text"><strong><?php echo e(session()->get('warning')); ?></strong></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
<?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/resources/views/partials/alerts.blade.php ENDPATH**/ ?>