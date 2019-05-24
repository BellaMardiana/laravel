@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
           
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>

                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td><img src="{{asset($post->image)}}" height="100px" alt=""></td>
                    <td><a href="{{ route('admin.category.post', $post->category) }}">{{ $post->category->name }}</a></td>
                    <td>{{ $post->content }}</td>
                    <td><a href="{{ route('admin.post.edit',$post) }}">Edit</a>
                        <form action="{{ route('admin.post.destroy', $post) }}" method="POST">
                            @method("DELETE")
                            @csrf
                            <input type="submit" value="HAPUS" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection