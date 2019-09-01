<?php
    $title = $post->title;
?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 id="post-title"><?php echo e($title); ?></h1>

    
    <div class="edit">
        <a href="<?php echo e(url('posts/'.$post->id.'/edit')); ?>" class="btn btn-primary">
            <?php echo e(__('編集')); ?>

        </a>
        <?php $__env->startComponent('components.btn-del'); ?>
            <?php $__env->slot('table', 'posts'); ?>
            <?php $__env->slot('id', $post->id); ?>
        <?php echo $__env->renderComponent(); ?>
    </div>

    
    <dl class="row">
        <dt class="col-md-2"><?php echo e(__('Created')); ?>:</dt>
        <dd class="col-md-10">
            <time itemprop="dateCreated" datetime="<?php echo e($post->created_at); ?>">
                <?php echo e($post->created_at); ?>

            </time>
        </dd>
        <dt class="col-md-2"><?php echo e(__('Updated')); ?>:</dt>
        <dd class="col-md-10">
            <time itemprop="dateModified" datetime="<?php echo e($post->updated_at); ?>">
                <?php echo e($post->updated_at); ?>

            </time>
        </dd>
    </dl>
    <hr>
    <div id="post-body">
        <?php echo e($post->body); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel_lessons/test/resources/views/posts/show.blade.php ENDPATH**/ ?>