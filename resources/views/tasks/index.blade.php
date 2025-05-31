@extends('layouts.app')

@section('content')
<h1 class="text-center">چک لیست روزانه</h1>


<br></br>

<div class="d-flex justify-content-center mb-3">
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">اضافه کردن یادآور جدید</a>
</div>

<br></br>
@if(session('success'))
<div class="alert alert-success text-center">{{ session('success') }}</div>
@endif

<ul class="list-group">
    @foreach($tasks as $task)
    <li class="list-group-item d-flex justify-content-between align-items-center text-end">
        <div class="flex-fill">
            <form action="{{ route('tasks.update', $task) }}" method="POST" class="d-inline">
                @csrf
                @method('PUT')
                <input type="hidden" name="title" value="{{ $task->title }}">
                <input type="hidden" name="description" value="{{ $task->description }}">
                <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                <strong class="{{ $task->completed ? 'text-decoration-line-through' : '' }}">
                    {{ $task->title }}
                </strong><br>
                {{ $task->description }}
            </form>
        </div>
        <div class="ms-2">
            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-warning">ویرایش</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">حذف</button>
            </form>
        </div>
    </li>
    @endforeach
</ul>
@endsection