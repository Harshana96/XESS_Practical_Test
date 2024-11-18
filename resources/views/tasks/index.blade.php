@extends('tasks.layout.app')

@section('content')
    <table class="w-100">
        <thead>
            <tr>
                <th>title</th>
                <th>Description</th>
                <th>Due Date</th>
                <th>Priority</th>
                <th>Status</th>
                <th>Paid or Not</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>{{ $task->due_date }}</td>
                    <td>{{ $task->priority }}</td>
                    <td>{{ $task->is_completed }}</td>
                    <td>{{ $task->is_paid }}</td>
                    <td>
                        <a href="{{ route('tasks.show', $task->id) }}">Show</a>
                        <a href="{{ route('tasks.edit', $task->id) }}">Edit</a>
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            {{-- <div class="width:20px">
                {{ $tasks->links() }}
            </div> --}}
        </tbody>
    </table>
@endsection
