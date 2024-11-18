<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'due_date' => 'required',
        ]);

        Task::create($validated);

        return redirect()->route('tasks.index');
    }


    public function show(Task $task)
    {
        //
    }


    public function edit(Task $task)
    {
        return view('tasks.edit', compact('tasks'));
    }


    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([]);
    }


    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
