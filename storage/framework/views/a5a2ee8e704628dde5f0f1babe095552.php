<?php $__env->startSection('title', 'View Product'); ?>
<?php $__env->startSection('content'); ?>

<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">View Items</h4>
</div><!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="col py-3">
            <div class="whitebox">
                <div class="widget logincontainer">
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Home</th>
                            <th>Action</th>
                        </tr>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->id); ?></td>
                            <td><?php echo e($product->title); ?></td>
                            <td class="<?php echo e($product->status == 'Deactive' ? 'text-danger' : 'text-success'); ?>">
                                <?php echo e($product->status); ?>

                            </td>
                            <td class="<?php echo e($product->home == 'No' ? 'text-danger' : 'text-success'); ?>">
                                <?php echo e($product->home); ?>

                            </td>
                            <td>
                                <a class="text-warning" style="float:left" href="<?php echo e(route('product.edit', $product->id)); ?>"><i class="fa fa-edit"></i></a>
                                <form style="width:10px;float:left" action="<?php echo e(route('product.destroy', $product->id)); ?>" method="POST">
                                <?php echo method_field('delete'); ?> <?php echo csrf_field(); ?> 
                                <button type="submit" class="text-danger del-btn" onclick="return confirm('Are you sure, you want to delete the product?')"><i class="fa fa-trash"></i></button></form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php echo $products->withQueryString()->links('pagination::bootstrap-5'); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/www/ilmakaun/resources/views/dashboard/product/view.blade.php ENDPATH**/ ?>