<!doctype html>
<html>
    <head>
        <title>Influencers list</title>
    </head>
    <body>
        <h1>Influencers list</h1>
        <h2>from <?php echo e(now()); ?></h2>
        <?php echo $__env->make('components.influencers_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH /app/resources/views/components/influencers_export.blade.php ENDPATH**/ ?>