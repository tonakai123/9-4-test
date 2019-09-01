
    <h2><?php echo e(__('Posts')); ?></h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><?php echo e(__('Title')); ?></th>
                    <th><?php echo e(__('Body')); ?></th>
                    <th><?php echo e(__('Created')); ?></th>
                    <th><?php echo e(__('Updated')); ?></th>

                    
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <a href="<?php echo e(url('posts/' . $post->id)); ?>">
                                <?php echo e($post->title); ?>

                            </a>
                        </td>
                        <td><?php echo e($post->body); ?></td>
                        <td><?php echo e($post->created_at); ?></td>
                        <td><?php echo e($post->updated_at); ?></td>
                        <td nowrap>
                            <a href="<?php echo e(url('posts/' . $post->id . '/edit')); ?>" class="btn btn-primary">
                                <?php echo e(__('編集')); ?>

                            </a>
                            <?php $__env->startComponent('components.btn-del'); ?>
                                <?php $__env->slot('table', 'posts'); ?>
                                <?php $__env->slot('id', $post->id); ?>
                            <?php echo $__env->renderComponent(); ?>
                        </td>
                     </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php echo e($user->posts->links()); ?><?php /**PATH /home/vagrant/laravel_lessons/test/resources/views/users/show.blade.php ENDPATH**/ ?>