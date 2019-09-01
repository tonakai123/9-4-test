<?php
    $title = __('Edit') . ': ' . $post->title;
?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($title); ?></h1>
    <form action="<?php echo e(url('posts/'.$post->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="title"><?php echo e(__('Title')); ?></label>
            <input id="title" type="text" class="form-control" name="title" value="<?php echo e($post->title); ?>" required autofocus>
        </div>
        <div class="form-group">
            <label for="body"><?php echo e(__('Body')); ?></label>
            <textarea id="body" class="form-control" name="body" rows="8" required><?php echo e($post->body); ?></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel_lessons/test/resources/views/posts/edit.blade.php ENDPATH**/ ?>