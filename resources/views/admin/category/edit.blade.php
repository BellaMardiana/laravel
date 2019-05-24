@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.category.update', $category) }}" method="POST"
            enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for=""> Name</label>
                    <input type="text" name="name" placeholder="Your title here" 
                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                    value="{{ old('name') ?? $category->name }}">
                    <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                    </div>
                </div>

                <div class="form-group">
                    <input type="submit" value="Save" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection