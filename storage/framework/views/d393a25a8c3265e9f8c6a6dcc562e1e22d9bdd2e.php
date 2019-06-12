

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <div id="content">
        <?php if($api_list && count($api_list) > 0): ?>
        <h2 class="style5">API list <a href="/add"><button>Add</button></a></h2>
        <table>
            <tr>
                <th>API name</th>
                <th>Routes count</th>
                <th>Actions</th>
            </tr>
            <?php foreach($api_list as $api): ?>
            <tr>
                <td><?php echo e($api->name); ?></td>
                <td>15</td>
                <td>
                    <button>Edit</button>
                    <a href="/api/delete/<?php echo e($api->id); ?>" onclick="return confirm('Are you sure to delete this api?');"><button>Delete</button>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
        <h2 class="style5">No api ! <button>Add</button></h2>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/api-generator/resources/views/index.blade.php ENDPATH**/ ?>