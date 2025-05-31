@extends('layouts.app')

@section('content')
<h1>Edit Task</h1>
<form action="{{ route('tasks.update', $task) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">عنوان</label>
        <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">توضیحات</label>
        <textarea name="description" class="form-control">{{ $task->description }}</textarea>
    </div>
    <button class="btn btn-success">Update</button>
</form>
@endsection