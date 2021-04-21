<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $dataBooks['book'] = Book::paginate(2);
        // return view('Book.index',$dataBooks);
        return view('Boo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Book.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $DataBook = request()->all();

        // if ($request ->hasFile('caratula_img')) {
        //     $DataBook['caratula'] =$request->file('caratula_img')->store('Caratula_img','public');
        // }

        // Book::insert($DataBook);
        // return response()->json($DataBook);

        return view('Book.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $Book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $Book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $Book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $Book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $Book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $Book)
    {
        return view('Book.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $Book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $Book)
    {
        //
    }
}
