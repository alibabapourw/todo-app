<?php $__env->startSection('content'); ?>
<h1>اضافه کردن لیست جدید </h1>
<form action="<?php echo e(route('tasks.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
        <label for="title" class="form-label">عنوان</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">توضیحات</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <button class="btn btn-success">ذخیره</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/ali/todo-app/resources/views/tasks/create.blade.php ENDPATH**/ ?>