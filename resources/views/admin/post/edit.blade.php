@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.post.update', $post) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for=""> Title</label>
                    <input type="text" name="title" placeholder="Your title here" 
                    class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                    value="{{ old('title') ?? $post->title }}">
                    <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="">Content</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}">{{ old('content') ??
                $post->content }}</textarea>
                        <div class="invalid-feedback">
                                {{ $errors->first('content') }}
                        </div>
                </div>

                <div class="frorm-group">
                    <input type="submit" value="Save" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection