<!DOCTYPE html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo e($setting->title ?? env('APP_NAME')); ?></title>
    <link rel="icon" href="<?php echo e($setting->favicon ?? '/images/favicon.png'); ?>">
    <?php echo $__env->make('partials.style', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('stylesheets'); ?>
</head>

<body>
    <?php echo $__env->make('dashboard.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="br-mainpanel">
        <?php echo $__env->make('partials.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('dashboard.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo $__env->make('partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('scripts'); ?>
</body> 
</html><?php /**PATH /srv/www/ilmakaun/resources/views/dashboard.blade.php ENDPATH**/ ?>