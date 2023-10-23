@extends('layouts.app')

@section('content')
    <h1>Task List</h1>

    <ul>
        @foreach($tasks as $task)
            <li>
                <a href="{{ url('/tasks/' . $task->id) }}">{{ $task->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection