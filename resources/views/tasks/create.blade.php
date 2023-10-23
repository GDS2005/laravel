@extends('layouts.app')

@section('content')
    <h1>Create Task</h1>

    <form action="{{ url('/tasks') }}" method="post">
        @csrf
        <label for="name">Task Name</label>
        <input type="text" name="name" required>
        <br>
        <label for="description">Task Description</label>
        <textarea name="description" required></textarea>
        <br>
        <label for="completed">Completed:</label>
        <textarea name="completed" required></textarea>
        <br>
        <button type="submit">Create Task</button>
    </form>
@endsection