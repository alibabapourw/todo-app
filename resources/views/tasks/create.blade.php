@extends('layouts.app')

@section('content')
<h1>اضافه کردن لیست جدید </h1>
<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
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
@endsection