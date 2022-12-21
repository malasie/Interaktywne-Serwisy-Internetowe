<h1>Cele 2022</h1>

<?php if(count($cele) > 0): ?>
    <?php $__currentLoopData = $cele; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2><?php echo e($cel->nazwa); ?></h2>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH C:\Users\wzr_student.IT\cele-zadania-app\resources\views/cel/index.blade.php ENDPATH**/ ?>