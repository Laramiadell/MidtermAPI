<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;


class BooksController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Books::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id'                => 'required',
            'title'             => 'required',
            'author'            => 'required',
            'date_published'    => 'required',
            'publisher'         => 'required'

        ]);

        return Books::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Books $book)
    {
        return Books::with('borrows')->where('books.id', $book->id)->get();
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $book)
    {
        $book = Books::find($book->id);
        $book->update($request->all());
        return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $book)
    {
        return Books::destroy($book->id);
    }
}
