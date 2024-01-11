@extends('layouts.app')

@section('heading', $task->title)

@section('content')
    <p>{{ $task->description }}</p>
    @if ($task->long_description)
        <p>{{ $task->long_description }}</p>
    @endif
    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p>

    <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit</a>
@endsection