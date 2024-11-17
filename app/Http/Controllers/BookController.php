<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

          return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.books.create');    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Book_ISPN' => 'required|unique:books',
            'Book_title' => 'required|max:255',
            'Book_Price' => 'required|numeric',
            'Book_publication_date' => 'required|date',
            'Book_Author' => 'required|max:255',
            'book_qty' => 'required|integer|min:1',
        ]);
    
        $book = new Book($validated);
        if ($request->hasFile('Book_cover_image')) {
            $book->Book_cover_image = $request->file('Book_cover_image')->store('covers', 'public');
        }
        $book->save();
    
        return redirect()->route('books.index')->with('success', 'Book added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
    return view('admin.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'Book_ISPN' => 'required|unique:books,Book_ISPN,' . $id,
            'Book_title' => 'required|max:255',
            'Book_Price' => 'required|numeric',
            'Book_publication_date' => 'required|date',
            'Book_Author' => 'required|max:255',
            'book_qty' => 'required|integer|min:1',
        ]);
    
        $book = Book::findOrFail($id);
        $book->update($validated);
    
        if ($request->hasFile('Book_cover_image')) {
            $book->Book_cover_image = $request->file('Book_cover_image')->store('covers', 'public');
        }
        $book->save();
    
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        if ($book->Book_cover_image) {
            Storage::delete('public/' . $book->Book_cover_image);
        }
        $book->delete();
    
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
