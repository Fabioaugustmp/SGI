<!-- Live reload script -->
<script>
    (new WebSocket('ws://<?php echo e($host); ?>:<?php echo e($port); ?>')).onmessage = function (message) {
        if (message.data === 'reload') {
            window.location.reload(true);
        }
    };
</script><?php /**PATH /home/fabio/Documentos/Projetos/iMCLG/vendor/bangnokia/laravel-serve-livereload/src/../views//script.blade.php ENDPATH**/ ?>