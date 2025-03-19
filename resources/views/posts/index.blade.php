@extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
    @foreach ($posts as $post)
        <div class="border p-3 mb-2">
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->content }}</p>
            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">View</a>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </div>
    @endforeach
@endsection
