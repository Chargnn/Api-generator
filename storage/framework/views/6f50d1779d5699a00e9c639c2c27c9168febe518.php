


<?php $__env->startSection('title', 'Add route'); ?>

<?php $__env->startSection('content'); ?>
    <div id="content">
        <h2 class="style5">Add api!</h2>

        <form action="/api/add" method="POST">
            <?php echo csrf_field(); ?>
            <input name="api_name" placeholder="Name" required/>
            <input type="submit" />
        </form>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/api-generator/resources/views/add.blade.php ENDPATH**/ ?>