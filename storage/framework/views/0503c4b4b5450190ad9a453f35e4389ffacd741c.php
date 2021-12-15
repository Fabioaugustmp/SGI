<?php if($enabled): ?>
    <div class="gnw-map-service gnw-map-service__<?php echo e($service); ?>">
        <div class="gnw-map fade" data-map-<?php echo e($service); ?>="<?php echo e(json_encode(compact('lat', 'lng', 'zoom'))); ?>" data-map-service="<?php echo e(json_encode(config('vendor.maps.services.'.$service))); ?>" data-map-markers="<?php echo e(json_encode($markers ?? [])); ?>"></div>
    </div>

<?php endif; ?>
<?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/vendor/gonoware/laravel-maps/src/../resources/views/index.blade.php ENDPATH**/ ?>