@extends('layouts.app')

@section('heading', 'Add Task')

@section('content')
    {{-- {{ $errors }} --}}
    <form action="{{route('tasks.store')}}" method="post">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" />
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="3"></textarea>
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>
@endsection