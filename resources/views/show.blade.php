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

    <div>
        <form action="{{route('tasks.destroy', ['task' => $task->id])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Delete Task</button>
        </form>
    </div>

    <div><a href="{{route('tasks.index')}}">Home</a></div>
@endsection