@extends('layouts.app')

@section('heading', isset($task) ? 'Edit Task' : 'Add Task')

@section('content')
    <form action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}" method="post">
        @csrf
        @isset($task)
            @method('put')
        @endisset
        <div class="mb-4">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" @class(['border-red-500' => $errors->has('title')]) value="{{ $task->title ?? old('title') }}" />
            @error('title')
                <span class="error-message">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3" @class(['border-red-500' => $errors->has('description')])>{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <span class="error-message">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-4">
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10" @class(['border-red-500' => $errors->has('long_description')])>{{ $task->long_description ?? old('long_description')}}</textarea>
            @error('long_description')
                <span class="error-message">{{$message}}</span>
            @enderror
        </div>
        <div class="flex gap-2 items-center">
            <button type="submit" class="btn">{{ isset($task) ? 'Update Task' : 'Add Task' }}</button>
            <a href="{{route('tasks.index')}}" class="link">Cancel</a>
        </div>
    </form>
@endsection