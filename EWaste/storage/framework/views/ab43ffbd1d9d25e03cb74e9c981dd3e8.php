<?php $__env->startSection('content'); ?>
    <header>
        <?php echo $__env->make('component.navBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>

    <body>
        <style>
            body {
                background-image: url('<?php echo e(asset('img/bg/Landing_enhanced.png')); ?>');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                height: 100%;
                margin: 0;/ color: white;
            }

            .landing-page-text {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                font-size: 2rem;
            }
        </style>
        <div class="container" style="height: 60vh;">
            <div class="row h-100 justify-content-end align-items-center" style="margin-top: 20%">
                <div class="col-6 text-center">
                    <a href="<?php echo e(route('Login.index')); ?>" class="btn btn-primary rounded-pill" data-mdb-ripple-init
                        style="width: 200px; height: 50px; font-size: 25px;">
                        Login
                    </a>
                    <a href="<?php echo e(route('Register.create')); ?>" class="btn btn-primary rounded-pill" data-mdb-ripple-init
                        style="width: 200px; height: 50px; font-size: 25px; margin-left: 20px">
                        Register
                    </a>
                </div>
            </div>
        </div>

    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Steven\Desktop\Web-Project\E-Waste\resources\views/LandingPage.blade.php ENDPATH**/ ?>