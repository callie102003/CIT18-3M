<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Get all tasks
    public function index()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    // Show single task
    public function show(Task $task)
    {
        return response()->json($task);
    }

    // Store new task
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    // Update a task
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_completed' => 'boolean',
        ]);

        $task->update($request->all());
        return response()->json($task);
    }

    // Delete a task
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(['message' => 'Task deleted']);
    }
}


