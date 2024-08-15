@extends('layouts.tasks')

@section('content')
    <form action="{{ route('tasks.store') }}" method="post">

        @csrf
        <div class="form-floating mb-3">
            <input name="title" type="text" class="form-control">
            <label for="floatingInputDisabled">Название</label>
        </div>
        <div class="form-floating mb-3">
            <textarea name="description" class="form-control"></textarea>
            <label for="floatingTextareaDisabled">Описание</label>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Создать задачу</button>
        </div>

    </form>

@endsection
