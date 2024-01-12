@extends('layouts.app')

@section('heading', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}" method="post">
        @csrf
        @isset($task)
            @method('put')
        @endisset
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}" />
            @error('title')
                <span class="error-message">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3">{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <span class="error-message">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10">{{ $task->long_description ?? old('long_description')}}</textarea>
            @error('long_description')
                <span class="error-message">{{$message}}</span>
            @enderror
        </div>
        <div>
            <button type="submit">{{ isset($task) ? 'Update Task' : 'Add Task' }}</button>
        </div>
    </form>
@endsection