@extends('templates.default')

@section('content')
    @foreach ($posts as $post)
        <h1><a href="{{ route ('post.show', $post) }}"> {{ $post->title }}</a></h1>
        <p>{{ Str::limit ($post->content, 100) }}</p>
    @endforeach

    {{ $posts->links() }}
@endsection