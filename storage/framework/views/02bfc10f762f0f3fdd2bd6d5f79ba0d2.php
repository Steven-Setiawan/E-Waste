<?php $__env->startSection('content'); ?>
    <div class="row mx-1">
        <div class="col-12">
            <img src="<?php echo e(asset('img/bg/Landing_enhanced.png')); ?>" class="mx-auto d-block" width="50%" alt="">
        </div>
    </div>
    
    <!-- Hapus <?php /* */ ?> untuk uncomment bagian card -->
    <!-- Disini mau nampilin collection center kah? -->

    <?php /*
    <div class="row">
        @foreach (SOMETHING as SOMETHING)
            <div class="card" style="width: 18rem;">
                <img src="{{asset(ASSET_LOCATION)}}" class="card-img-top" alt="" height="400px" width="100%">
                <div class="card-body">
                    <h5 class="card-title">{{}}</h5>
                    <h6 class="card-text">{{}}</h6>
                    <p class="card-text">{{}}</p>
                    <div class="d-grid mx-auto">
                        <a href="#" class="btn btn-danger">Update</a>
                    </div>
                    <div class="d-grid mx-auto">
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    */ ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive - Bina Nusantara\Documents\Laravel Projects\Final Project Web Prog\E-Waste\resources\views/userHomePage.blade.php ENDPATH**/ ?>