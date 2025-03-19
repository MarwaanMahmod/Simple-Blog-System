@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <input type="text" name="title" class="form-control mb-2" placeholder="Title">
        <textarea name="content" class="form-control mb-2" placeholder="Content"></textarea>
        <button class="btn btn-success">Submit</button>
    </form>
@endsection
