@extends('layouts.dash')
@section('page pretitle', 'shams library')
@section('page tite', 'books')

@section('first btn', 'add new')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Books</h3>
        </div>
        <div class="card-body border-bottom py-3">
            <div class="d-flex">
                <div class="text-secondary">
                    Show
                    <div class="mx-2 d-inline-block">
                        <input type="text" class="form-control form-control-sm" value="8" size="3"
                            aria-label="Invoices count">
                    </div>
                    books
                </div>
                <div class="ms-auto text-secondary">
                    Search:
                    <div class="ms-2 d-inline-block">
                        <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table card-table table-vcenter text-nowrap datatable">
                <thead>
            <tr>
            <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                aria-label="Select all invoices"></th>
                        <th class="w-1">Id <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24"
                                height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 15l6 -6l6 6" />
                            </svg>
                        </th>
                <th>Name</th>
                <th>Photo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                <td><input class="form-check-input m-0 align-middle" type="checkbox"

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->category_name }}</td>
                    <td>
                        @if ($category->category_photo)
                            <img src="{{ asset('storage/' . $category->category_photo) }}" width="50" height="50"
                                alt="Category Photo">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection