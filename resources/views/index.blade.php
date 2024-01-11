@extends('layouts.app')

@section('heading', 'Hello, welcome to Task list')

@section('content')
    <a href="{{route('tasks.create')}}">Create task</a>
    @forelse ($tasks as $task)
    <div>
        <h2><a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a></h2>
    </div>
    @empty
    <p>There are no tasks!</p>
    @endforelse
@endsection