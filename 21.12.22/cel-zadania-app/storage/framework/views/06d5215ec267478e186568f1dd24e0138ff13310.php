

<?php $__env->startSection('tresc'); ?>
    <a class="btn btn-default" href="/">
        Wstecz
    </a>

    <h1>
        <a href="cel/<?php echo e($cel->id); ?>">
            <?php echo e($cel->nazwa); ?>

        </a>
    </h1>
    <span class="badge badge-danger">
        <?php echo e($cel->termin); ?>

    </span>
    <hr>
    <p><?php echo e($cel->tresc); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wzr_student.IT\Downloads\cele-zadania-app\cele-zadania-app\resources\views/cel/show.blade.php ENDPATH**/ ?>