

<?php $__env->startSection('title', 'Edit Item'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Edit Item</h1>
    <form action="<?php echo e(route('items.update', $item)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo e($item->name); ?>" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" name="category" id="category" class="form-control" value="<?php echo e($item->category); ?>" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" name="year" id="year" class="form-control" value="<?php echo e($item->year); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\soundkabumi\resources\views/items/edit.blade.php ENDPATH**/ ?>