

<?php $__env->startSection('title', 'Welcome to SoundKabumi'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <!-- Heading Section -->
    <div class="text-center mb-4">
        <h1 class="display-4">Welcome to SoundKabumi</h1>
        <p class="lead">Explore the best vinyl records, CDs, and cassettes!</p>
    </div>

    <!-- Best Sellers Section -->
    <h2 class="mt-5">Best Sellers</h2>
    <div class="row">
        <?php $__currentLoopData = $bestSellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm w-100">
                    <img src="<?php echo e($item->image_url); ?>" class="card-img-top" alt="<?php echo e($item->name); ?>" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo e($item->name); ?></h5>
                        <p class="card-text text-muted"><?php echo e($item->category); ?> - <?php echo e($item->year); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- All Items Section -->
    <h2 class="mt-5">All Items</h2>
    <div class="row">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm w-100">
                    <img src="<?php echo e($item->image_url); ?>" class="card-img-top" alt="<?php echo e($item->name); ?>" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo e($item->name); ?></h5>
                        <p class="card-text text-muted"><?php echo e($item->category); ?> - <?php echo e($item->year); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\soundkabumi\resources\views/home.blade.php ENDPATH**/ ?>