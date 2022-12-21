

<?php $__env->startSection('tresc'); ?>
    <a class="btn btn-default" href="/">
        Wstecz
    </a>

    <form
    class="container"
    action="/cel"
    method="POST">

        <?php echo e(csrf_field()); ?>


        <div class="form-group">
            <label>Nazwa</label>
            <input type="text" name="nazwa" class="form-control">
        </div>

        <div class="form-group">
            <label>Tresc</label>
            <input type="text" name="tresc" class="form-control">
        </div>

        <div class="form-group">
            <label>termin</label>
            <input type="text" name="termin" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-success">Zapisz</button>
        </div>

    </form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\wzr_student.IT\Downloads\cele-zadania-app\cele-zadania-app\resources\views/cel/create.blade.php ENDPATH**/ ?>