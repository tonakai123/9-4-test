<?php $__env->startSection('title', 'koresawa portfolio'); ?>

<?php $__env->startSection('content'); ?>
<h1>
  おすすめ動画
</h1>
<ul>
<div class="movie-wrap">
<iframe width="560" height="315" src="https://www.youtube.com/embed/PgAzHovs_fU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <li>
      <?php echo e(csrf_field()); ?>

      <?php echo e(method_field('delete')); ?>

    </form>
  </li>

  <li>No posts yet</li>

</ul>
<script src="/js/main.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/laravel_lessons/test/resources/views/Home.blade.php ENDPATH**/ ?>