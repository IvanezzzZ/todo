@extends('layouts.tasks')

@section('content')

    <div class="form-floating mb-3">
        <input name="title" type="text" class="form-control" value="{{ $task->title }}">
        <label for="floatingInputDisabled">Название</label>
    </div>
    <div class="form-floating mb-3">
        <textarea name="description" class="form-control">{{ $task->description }}</textarea>
        <label for="floatingTextareaDisabled">Описание</label>
    </div>
    <a href="{{ route('tasks.index') }}" class="btn btn-primary">Назад</a>


@endsection
