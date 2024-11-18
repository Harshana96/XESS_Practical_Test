@extends('tasks.layout.app')

@section('content')

    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>{{ $task->priority }}</p>
    <p>{{ $task->due_date }}</p>

    <p>Click here if task is complete</p>

    <button type="button" class="btn btn-success">Complete</button>

@endsection