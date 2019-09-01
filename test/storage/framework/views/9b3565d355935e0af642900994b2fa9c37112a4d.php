<?php
    $title = __('User') . ': ' . $user->name;
?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($title); ?></h1>

    
    <div>
        <a href="<?php echo e(url('users/'.$user->id.'/edit')); ?>" class="btn btn-primary">
            <?php echo e(__('Edit')); ?>

        </a>
            <?php $__env->startComponent('components.btn-del'); ?>
                 <?php $__env->slot('table', 'users'); ?>
                 <?php $__env->slot('id', $user->id); ?>
            <?php echo $__env->renderComponent(); ?>
    </div>

    
    <dl class="row">
        <dt class="col-md-2"><?php echo e(__('ID')); ?></dt>
        <dd class="col-md-10"><?php echo e($user->id); ?></dd>
        <dt class="col-md-2"><?php echo e(__('Name')); ?></dt>
        <dd class="col-md-10"><?php echo e($user->name); ?></dd>
        <dt class="col-md-2"><?php echo e(__('E-Mail Address')); ?></dt>
        <dd class="col-md-10"><?php echo e($user->email); ?></dd>
    </dl>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel_lessons/test/resources/views/users/show.blade.php ENDPATH**/ ?>