@extends('layouts.master')

@section('content')
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">Create a post</div>

                <form action="{{ route('posts.store')}}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="title" class="form-control" required name="title" value="{{ old('title') }}" id="title">
                    </div>
                    <div class="form-group">
                        <label for="body">Body:</label>
                        <textarea class="form-control" id="body" required name="body" rows="3">{{ old('body') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="category">Category:</label>
                        <select class="form-control" id="category">
                            <option>Food</option>
                            <option>Tech</option>
                            <option>Travel</option>
                            <option>Book</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label for="hash">Hashtag:</label>
                        <input type="text" class="form-control" id="hash">
                    </div>
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <input type="color" class="form-control" id="color">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

        </div>
    </div>
</div>
@endsection
