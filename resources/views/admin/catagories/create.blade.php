@extends('layouts.dash')

@section('content')
<div class="container">
    <h1>Add Category</h1>
    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="category_name">Category Name</label>
            <input type="text" name="category_name" id="category_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="category_photo">Category Photo</label>
            <input type="file" name="category_photo" id="category_photo" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
