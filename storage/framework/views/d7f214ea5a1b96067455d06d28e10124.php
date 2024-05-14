<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('partials.home_style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('stylesheets'); ?>
</head>
<body>
    <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.home_script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH /srv/www/ilmakaun/resources/views/home.blade.php ENDPATH**/ ?>