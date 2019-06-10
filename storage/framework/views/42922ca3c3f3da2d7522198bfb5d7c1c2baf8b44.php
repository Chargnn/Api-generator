<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <?php echo $__env->yieldContent('header'); ?>
    </head>
    <body>
        <div id="contain">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <?php echo $__env->yieldContent('footer'); ?>
    </body>
</html>
<?php /**PATH /opt/lampp/htdocs/api-generator/resources/views/layout/layout.blade.php ENDPATH**/ ?>