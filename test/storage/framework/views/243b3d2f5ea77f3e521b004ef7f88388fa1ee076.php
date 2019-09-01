<?php if($paginator->lastPage() > 1): ?>
<ul class="pagination">
    <li class="page-item <?php echo e(($paginator->perPage(6)) ? ' disabled' : ''); ?>">
        <a class="page-link" href="<?php echo e($paginator->url(1)); ?>">First Page</a>
     </li>
    <li class="page-item <?php echo e(($paginator->currentPage() == 1) ? ' disabled' : ''); ?>">
        <a class="page-link" href="<?php echo e($paginator->url(1)); ?>">
            <span aria-hidden="true">«</span>
            
        </a>
    </li>
    <?php for($i = 1; $i <= $paginator->lastPage(); $i++): ?>
        <li class="page-item <?php echo e(($paginator->currentPage() == $i) ? ' active' : ''); ?>">
            <a class="page-link" href="<?php echo e($paginator->url($i)); ?>"><?php echo e($i); ?></a>
        </li>
    <?php endfor; ?>
    <li class="page-item <?php echo e(($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : ''); ?>">
        <a class="page-link" href="<?php echo e($paginator->url($paginator->currentPage()+1)); ?>" >
            <span aria-hidden="true">»</span>
            
        </a>
    </li>
    <li class="page-item <?php echo e(($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : ''); ?>">
        <a class="page-link" href="<?php echo e($paginator->url($paginator->lastPage())); ?>">Last Page</a>
    </li>
</ul>
<?php endif; ?><?php /**PATH /home/vagrant/laravel_lessons/test/resources/views/vendor/pagination/default.blade.php ENDPATH**/ ?>