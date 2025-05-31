<?php $__env->startSection('content'); ?>
<h1>Edit Task</h1>
<form action="<?php echo e(route('tasks.update', $task)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" value="<?php echo e($task->title); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control"><?php echo e($task->description); ?></textarea>
    </div>
    <button class="btn btn-success">Update</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/ali/todo-app/resources/views/tasks/edit.blade.php ENDPATH**/ ?>