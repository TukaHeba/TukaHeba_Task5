<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book\Book;
use App\Models\Book\MainClassification;
use App\Models\Book\SubClassification;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::with(['mainClassification', 'subClassification', 'favorites', 'rates', 'reviews'])->get();
        return view('book.show', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mainClassifications = MainClassification::all();
        // $subClassifications = SubClassification::all();
        //  return view('books.create', compact('mainClassifications', 'subClassifications'));
        return view('book.add', compact('mainClassifications'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'author' => ['required', 'string', 'max:255'],
            'publisher' => ['string', 'max:255'],
            'price' => ['required', 'numeric'],
            'main_classification_id' => ['required', 'string', 'max:255'],
            //    'sub_classification_id' => ['required', 'string', 'max:255'],
        ]);

        $new_book = new Book();
        $new_book->title = $request->title;
        $new_book->author = $request->author;
        $new_book->publisher = $request->publisher;
        $new_book->price = $request->price;
        $new_book->main_classification_id = $request->main_classification_id;

        $new_book->save();
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
