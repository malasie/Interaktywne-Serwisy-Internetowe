

<?php $__env->startSection('tresc'); ?>

<h1>Cele 2022</h1>

<?php if(count($cele) > 0): ?>
    <?php $__currentLoopData = $cele; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="cel/<?php echo e($cel->id); ?>"> <h2> <?php echo e($cel->nazwa); ?></h2> </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wzr_student.IT\Downloads\cele-zadania-app\cele-zadania-app\resources\views/cel/index.blade.php ENDPATH**/ ?>