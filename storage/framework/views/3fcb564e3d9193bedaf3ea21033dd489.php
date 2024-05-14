<?php if( Session::get('success') ): ?>
<div class="alert alert-success"> <?php echo e(Session::get('success')); ?></div>
<?php endif; ?>

<?php if( $errors->any() ): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li> <?php echo e($error); ?> </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?><?php /**PATH /srv/www/ilmakaun/resources/views/partials/message.blade.php ENDPATH**/ ?>