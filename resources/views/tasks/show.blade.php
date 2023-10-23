@extends('layouts.app')

@section('content')
    <h1>Task Details</h1>
    <p><strong>Name:</strong> {{ $task->name }}</p>
    <p><strong>Description:</strong> {{ $task->description }}</p>
@endsection