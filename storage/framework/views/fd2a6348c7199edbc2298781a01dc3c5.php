<?php $__env->startSection('content'); ?>
<h1 class="text-center">چک لیست روزانه</h1>


<br></br>

<div class="d-flex justify-content-center mb-3">
    <a href="<?php echo e(route('tasks.create')); ?>" class="btn btn-primary">اضافه کردن یادآور جدید</a>
</div>

<br></br>
<?php if(session('success')): ?>
<div class="alert alert-success text-center"><?php echo e(session('success')); ?></div>
<?php endif; ?>

<ul class="list-group">
    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="list-group-item d-flex justify-content-between align-items-center text-end">
        <div class="flex-fill">
            <form action="<?php echo e(route('tasks.update', $task)); ?>" method="POST" class="d-inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <input type="hidden" name="title" value="<?php echo e($task->title); ?>">
                <input type="hidden" name="description" value="<?php echo e($task->description); ?>">
                <input type="checkbox" name="completed" onchange="this.form.submit()" <?php echo e($task->completed ? 'checked' : ''); ?>>
                <strong class="<?php echo e($task->completed ? 'text-decoration-line-through' : ''); ?>">
                    <?php echo e($task->title); ?>

                </strong><br>
                <?php echo e($task->description); ?>

            </form>
        </div>
        <div class="ms-2">
            <a href="<?php echo e(route('tasks.edit', $task)); ?>" class="btn btn-sm btn-warning">ویرایش</a>
            <form action="<?php echo e(route('tasks.destroy', $task)); ?>" method="POST" class="d-inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">حذف</button>
            </form>
        </div>
    </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/ali/todo-app/resources/views/tasks/index.blade.php ENDPATH**/ ?>