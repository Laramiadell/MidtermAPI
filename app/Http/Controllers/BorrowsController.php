<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrows;

class BorrowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Borrows::all();
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
            'student_id'    => 'required',
            'book_id'       => 'required',
            'date_borrowed' => 'required',
            'date_returned' => 'required'
            
        ]);
        return Borrows::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Borrows  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show(Borrows $borrow)
    {
        return Borrows::with('student', 'book')->where('borrows.id', $borrow->id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Borrows  $borrow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Borrows $borrow)
    {
        $borrow = Borrows::find($borrow->id);
        $borrow->update($request->all());
        return $borrow;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Borrows  $borrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrows $borrow)
    {
        return Borrows::destroy($borrow->id);
    }
}
