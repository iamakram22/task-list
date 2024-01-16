@extends('layouts.app')

@section('heading', 'Hello, welcome to Task list')

@section('content')
    <nav class="mb-4">
        <a href="{{route('tasks.create')}}" class="link">Create task</a>
    </nav>
    @forelse ($tasks as $task)
    <div>
        <h2>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}" 
                @class(['line-through' => $task->completed])>{{ $task->title }}</a>
        </h2>
    </div>
    @empty
    <p class="font-bold">There are no tasks!</p>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-4">
            {{$tasks->links()}}
        </nav>
    @endif
@endsection