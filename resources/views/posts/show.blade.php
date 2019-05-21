@extends('templates.default')

@section('content')
    <h3>{{$posts->title}}</h3>
    <p>{{$posts->content}}</p>
@endsection