<?php $__env->startSection('additional_css'); ?>
    <link href="<?php echo e(asset('css/welcome.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content">
        <h1 class="title m-b-md">
            Influence<span class="text-pink font-weight-bold">4</span>You
        </h1>
        <?php if(auth()->guard()->check()): ?>
        <div class="links">
            <a href="<?php echo e(route('influencers.index')); ?>" class="btn btn-outline-pink">View influencers list</a>
        </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\webproject\influence4you\resources\views/welcome.blade.php ENDPATH**/ ?>