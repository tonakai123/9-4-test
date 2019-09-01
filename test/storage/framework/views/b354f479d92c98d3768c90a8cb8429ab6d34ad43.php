<?php
    $title = __('Create Post');
?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($title); ?></h1>
    <form action="<?php echo e(url('posts')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('POST'); ?>
        <div class="form-group">
            <label for="title"><?php echo e(__('Title')); ?></label>
            <input id="title" type="text" class="form-control" name="title" required autofocus>
        </div>
        <div class="form-group">
            <label for="body"><?php echo e(__('Body')); ?></label>
            <textarea id="body" class="form-control" name="body" rows="8" required></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel_lessons/test/resources/views/posts/create.blade.php ENDPATH**/ ?>