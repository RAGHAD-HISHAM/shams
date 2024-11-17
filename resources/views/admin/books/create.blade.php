@extends('layouts.dash')
@section('page pretitle', 'Shams Library')
@section('page title', $book ?? 'Add New Book')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ isset($book) ? 'Edit Book' : 'Add New Book' }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ isset($book) ? route('books.update', $book->id) : route('books.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($book))
                @method('PUT')
            @endif
            <div class="mb-3">
                <label class="form-label">Book Title</label>
                <input type="text" class="form-control" name="Book_title" value="{{ $book->Book_title ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Author</label>
                <input type="text" class="form-control" name="Book_Author" value="{{ $book->Book_Author ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Price</label>
                <input type="number" class="form-control" name="Book_Price" value="{{ $book->Book_Price ?? '' }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Cover Image</label>
                <input type="file" class="form-control" name="Book_cover_image">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
