<?php if($errors->any()): ?>
<div class="error">
    <ul>
        <?php foreach($errors->all() as $error): ?>
            <li>{{ $error }}</li>
        <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>