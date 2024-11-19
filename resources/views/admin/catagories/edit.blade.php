@extends('layouts.dash')

@section('content')
<div class="container">
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="category_name">Category Name</label>
            <input type="text" name="category_name" id="category_name" value="{{ $category->category_name }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="category_photo">Category Photo</label>
            <input type="file" name="category_photo" id="category_photo" class="form-control">
            @if ($category->category_photo)
                <img src="{{ asset('storage/' . $category->category_photo) }}" width="50" height="50" alt="Category Photo">
            @endif
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
