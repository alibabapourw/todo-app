<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <title>reminders</title>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .btn-purple {
            background-color: #6f42c1;
            /* رنگ بنفش */
            color: white;
        }

        .btn-purple:hover {
            background-color: #5a32a3;
            /* رنگ بنفش تیره‌تر */
            color: white;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="text-center">
        <h1 class="mb-4">به برنامه چک لیست روزانه من خوش امدید </h1>
        <a href="<?php echo e(route('tasks.index')); ?>" class="btn btn-purple btn-lg">
            بریم به یاداوری های روزانه </a>
    </div>
</body>

</html><?php /**PATH /home/ali/todo-app/resources/views/welcome.blade.php ENDPATH**/ ?>