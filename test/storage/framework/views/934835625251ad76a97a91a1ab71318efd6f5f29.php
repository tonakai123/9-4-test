<?php
    $title = __('Users');
?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($title); ?></h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><?php echo e(__('ID')); ?></th>
                    <th><?php echo e(__('Name')); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?></td>
                        <td><a href="<?php echo e(url('users/'.$user->id)); ?>"><?php echo e($user->name); ?></a></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php echo $users->links('vendor/pagination.bootstrap-4'); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel_lessons/test/resources/views/users/index.blade.php ENDPATH**/ ?>