<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    public function addBook(Request $request){
        $book = new Book;

        $book->Title = $request->title;
        $book->Category = $request->category;
        $book->Author = $request->author;
        $book->Price = $request->price;
        $book->Quantity = $request->quantity;

        $book->save();
        return redirect()->back()->with('success', 'new record added.');
    }

    public function delBook($id){
        $book = Book::find($id);
        $book->delete();
        return redirect()->back()->with('success', '1 record has removed from the system.');

    }

    public function editBook($id){
        $book = Book::find($id);
        return view('admin.books.edit_book', compact('book'));

    }

    public function updateBook(Request $request, $id){
        $book = Book::find($id);

        $book->Title = $request->title;
        $book->Category = $request->category;
        $book->Author = $request->author;
        $book->Price = $request->price;
        $book->Quantity = $request->quantity;


        $book->save();
        return redirect()->route('books')->with('success', '1 record has been updated.');
    }

    // public function previousPage(){
    //     return redirect()
    // }
}
