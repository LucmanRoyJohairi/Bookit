<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Sale;
use Auth;
class CustomerController extends Controller
{
    //admin
    public function showCustomers(){
        $users = User::All()->where('role_id',2);
        return view('admin.customers.index', compact('users'));
    }

    //customer
    public function index(){
        $books = Book::All();
        // return $books;
        return view('customer.index', compact('books'));
    }
    //

    public function viewBook($id){
        $book = Book::find($id);
        return view('customer.viewBook', compact('book'));
    }

    public function purchaseBook(Request $request, $id){
        $sales = new Sale;
        $book = Book::find($id);

        $sales->book_Id = $request->book_id;
        $sales->book_name = $request->title;
        $sales->user_id = $request->user_id;
        $sales->price = $request->price;
        $sales->quantity = $request->quantity;
        $sales->total_payment = $request->quantity * $request->price;
        $book->Quantity = $book->Quantity - $request->quantity ;
        // return $book->Quantity;

        $book->save();
        $sales->save();
        return redirect()->route('customer-dashboard')->with('success', 'An item has been purchased. ');
    }       

    public function viewOrders(){
        $sales = Sale::All()->where('user_id',Auth::user()->id);

        return view('customer.view_orders', compact('sales'));

    }
}
