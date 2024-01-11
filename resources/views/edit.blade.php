@extends('layouts.app')

@section('heading', 'Edit Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form action="{{ route('tasks.update', ['task' => $task->id]) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}" />
            @error('title')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3">{{ $task->description }}</textarea>
            @error('description')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10">{{ $task->long_description }}"</textarea>
            @error('long_description')
                <span class="error-message">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <button type="submit">Edit Task</button>
        </div>
    </form>
@endsection