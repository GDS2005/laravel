@extends('layouts.app')

@section('content')
    <h1>Task List</h1>

    <a href="{{ url('/create') }}">New task</a>

    <ul>
        @foreach($tasks as $task)
            <li>
                <a href="{{ url('/' . $task->id) }}">{{ $task->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection