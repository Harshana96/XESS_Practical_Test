@extends('tasks.layout.app')

@section('content')
    <h1>Edit Task</h1>

    <div class="d-flex flex-col">
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $task->title) }}" required>

            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ old('description', $task->description) }}</textarea>

            <label for="due_date">Due Date:</label>
            <input type="date" name="due_date" id="due_date" value="{{ old('due_date', $task->due_date) }}" required>

            <label for="priority">Priority:</label>
            <select name="priority" id="priority" required>
                <option value="High" {{ $task->priority == 'High' ? 'selected' : '' }}>High</option>
                <option value="Medium" {{ $task->priority == 'Medium' ? 'selected' : '' }}>Medium</option>
                <option value="Low" {{ $task->priority == 'Low' ? 'selected' : '' }}>Low</option>
            </select>

            <button type="submit">Update</button>
        </form>
    </div>
@endsection
