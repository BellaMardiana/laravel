@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Add Categories</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>

                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('admin.category.edit',$category) }}">Edit</a>
                        <form action="{{ route('admin.category.destroy', $category) }}" method="POST">
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