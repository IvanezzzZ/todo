@extends('layouts.tasks')

@section('content')
    <a href="{{ route('tasks.create') }}" class="btn btn-success">Добавить задачу</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Задача</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>

        @foreach($tasks as $task)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{$task->title}}</td>
            <td>
                <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-primary">Подробнее</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
@endsection
