<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Book;
use App\Models\AuthorBook;

use Illuminate\Http\Request;

class AuthorBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();
        $books = Book::all();
        $author_books = AuthorBook::all();
        return view('author_books.datos', compact('authors', 'books', 'author_books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $author_book = new AuthorBook;
        $author_book->author_id = $request->author_id;
        $author_book->book_id = $request->book_id;
        $author_book->save();

        return redirect()->route("author_books.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author_book = AuthorBook::find($id);
        $authors = Author::all();
        $books = Book::all();
        return view("author_books.update", compact("author_book", "authors", "books"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $author_book = AuthorBook::find($id);
        $author_book->author_id = $request->author_id;
        $author_book->book_id = $request->book_id;
        $author_book->save();
        return redirect()->route("author_books.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author_book= AuthorBook::find($id);
        $author_book->delete();

        return redirect()->route("author_books.index");
    }
}
