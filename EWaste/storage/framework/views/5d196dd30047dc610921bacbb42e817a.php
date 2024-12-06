<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Welcome to Your Home Page, <?php echo e(auth()->user()->gender); ?>!</h1>
        <p>This is the user's dashboard.</p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Steven\Desktop\Web-Project\E-Waste\resources\views/userHomePage.blade.php ENDPATH**/ ?>