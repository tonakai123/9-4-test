<?php
    $title = __('Edit').': '.$user->name;
?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($title); ?></h1>
    <form action="<?php echo e(url('users/'.$user->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="name"><?php echo e(__('Name')); ?></label>
            <input id="name" type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>" required autofocus>
        </div>
        <button type="submit" name="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel_lessons/test/resources/views/users/edit.blade.php ENDPATH**/ ?>