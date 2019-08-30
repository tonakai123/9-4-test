<?php $__env->startSection('title', 'New Post'); ?>

<?php $__env->startSection('content'); ?>
<h1>
  New Post
</h1>
<form method="post" action="<?php echo e(url('/posts')); ?>">
  <?php echo e(csrf_field()); ?>

  <p>
    <input type="text" name="title" placeholder="enter title" value="<?php echo e(old('title')); ?>">
    <?php if($errors->has('title')): ?>
    <span class="error"><?php echo e($errors->first('title')); ?></span>
    <?php endif; ?>
  </p>
  <p>
    <input type="text" name="makoto" placeholder="enter URL" value="<?php echo e(old('makoto')); ?>">
    <?php if($errors->has('makoto')): ?>
    <span class="error"><?php echo e($errors->first('makoto')); ?></span>
    <?php endif; ?>
  </p>
  <p>
    <textarea name="body" placeholder="enter body"><?php echo e(old('body')); ?></textarea>
    <?php if($errors->has('body')): ?>
    <span class="error"><?php echo e($errors->first('body')); ?></span>
    <?php endif; ?>
  </p>
  <p>
    <input type="submit" value="Add">
  </p>
</form>
<a href="<?php echo e(url('/')); ?>" class="header-menu">Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel_lessons/test/resources/views/posts/create.blade.php ENDPATH**/ ?>