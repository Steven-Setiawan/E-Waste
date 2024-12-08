<?php $__env->startSection('content'); ?>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-10 col-lg-9 col-xl-7">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Login</h3>
                            <form action="<?php echo e(route('login.submit')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div data-mdb-input-init class="form-outline">
                                        <label class="form-label" for="email">Email</label>
                                            <input type="text" id="email" class="form-control form-control-lg" name="email" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4 d-flex align-items-center">
                                        <div data-mdb-input-init class="form-outline datepicker w-100">
                                        <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control form-control-lg" id="password" name="password" required />
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h5>Don't have an account? <a href="<?php echo e(route('Register.create')); ?>">Register</a></h5>
                                </div>

                                <div class="mt-4 pt-2">
                                    <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\OneDrive - Bina Nusantara\Documents\Laravel Projects\Final Project Web Prog\E-Waste\resources\views/LoginPage.blade.php ENDPATH**/ ?>