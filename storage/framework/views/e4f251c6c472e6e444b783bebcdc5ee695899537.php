<table class="table table-striped table-responsive-lg">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Gender</th>
            <th scope="col">Age</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $influencers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $influencer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($influencer->id); ?></th>
                <?php if($export): ?>
                    <td><?php echo e($influencer->gender); ?></td>
                <?php else: ?>
                    <td><i class="fas fa-<?php echo e($influencer->gender); ?>"></i></td>
                <?php endif; ?>
                <td><?php echo e($influencer->age); ?></td>
                <td><?php echo e($influencer->full_name); ?></td>
                <td><?php echo e($influencer->email); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH D:\webproject\influence4you\resources\views/components/influencers_list.blade.php ENDPATH**/ ?>