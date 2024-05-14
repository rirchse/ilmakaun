<?php $__env->startSection('title', 'View Customer'); ?>
<?php $__env->startSection('content'); ?>

<div class="pd-30">
    <h4 class="tx-gray-800 mg-b-5">View Customers</h4>
</div><!-- d-flex -->

<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="col py-3">

            <div class="col-md-12 whitebox">
                <div class="widget logincontainer">
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Room</th>
                            <th>Arrival</th>
                            <th>Departure</th>
                            <th>Adult</th>
                            <th>Children</th>
                            <th>Message</th>
                            <th>Status</th>
                            
                        </tr>
                        <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($blog->id); ?></td>
                            <td><?php echo e($blog->first_name); ?></td>
                            <td><?php echo e($blog->last_name); ?></td>
                            <td><?php echo e($blog->email); ?></td>
                            <td><?php echo e($blog->room); ?></td>
                            <td><?php echo e($blog->arrival); ?></td>
                            <td><?php echo e($blog->departure); ?></td>
                            <td><?php echo e($blog->adult); ?></td>
                            <td><?php echo e($blog->children); ?></td>
                            <td><?php echo e($blog->message); ?></td>
                            <td class="<?php echo e($blog->status == 'Deactive' ? 'text-danger' : 'text-success'); ?>">
                                <?php echo e($blog->status); ?>

                            </td>
                            
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php echo $customers->withQueryString()->links('pagination::bootstrap-5'); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /srv/www/ilmakaun/resources/views/dashboard/customer/view.blade.php ENDPATH**/ ?>