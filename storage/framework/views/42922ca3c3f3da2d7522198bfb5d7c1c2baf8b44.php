<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body>
        <div id="contain">
            <?php echo $__env->make('partials.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
            <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </body>
</html>
<?php /**PATH /opt/lampp/htdocs/api-generator/resources/views/layout/layout.blade.php ENDPATH**/ ?>