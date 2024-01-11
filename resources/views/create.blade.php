@extends('layouts.app')

@section('heading', 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    {{-- {{ $errors }} --}}
    <form action="{{route('tasks.store')}}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" />
            @error('title')
                <span class="error-message">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3"></textarea>
            @error('description')
                <span class="error-message">{{$message}}</span>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10"></textarea>
            @error('long_description')
                <span class="error-message">{{$message}}</span>
            @enderror
        </div>
        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>
@endsection