<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; // Make sure to import the Task model

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); // Retrieve all tasks from the database
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'completed' => 'required',
        ]);

        Task::create($request->all()); // Create a new task in the database

        return redirect('/tasks')->with('success', 'Task created successfully!');
    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $task->update($request->all()); // Update the task in the database

        return redirect('/tasks')->with('success', 'Task updated successfully!');
    }

    public function destroy(Task $task)
    {
        $task->delete(); // Delete the task from the database

        return redirect('/tasks')->with('success', 'Task deleted successfully!');
    }
}
