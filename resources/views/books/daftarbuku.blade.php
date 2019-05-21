@extends('templates.default')

@section('content')
   @foreach('$books' as $book)
    <h3><a href="{{route('tampil',$book)}}">{{$book->title}}</a></h3>
   @endforeach
@endsection