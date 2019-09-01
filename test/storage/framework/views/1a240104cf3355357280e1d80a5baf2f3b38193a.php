<form style="display:inline" action="<?php echo e(url($table.'/'.$id)); ?>" method="post">
    <?php echo csrf_field(); ?>
    <?php echo method_field('DELETE'); ?>
    <button type="submit" class="btn btn-danger">
        <?php echo e(__('Delete')); ?>

    </button>
</form><?php /**PATH /home/vagrant/laravel_lessons/test/resources/views/components/btn-del.blade.php ENDPATH**/ ?>