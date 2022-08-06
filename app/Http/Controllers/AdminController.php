<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Sale;

use Auth;

class AdminController extends Controller
{

    public function index(){
        

        $books = Book::All();
        $latest_book = Book::latest()->first();
        $users = User::All()->where('role_id', 2);
        $latest_user = User::latest()->where('role_id', 2)->first();
        $sales = Sale::All();
        $latest = Sale::latest()->first();

        $total = 0;
        foreach($sales as $s){
            $total += $s->total_payment;
        }
        return view('admin.index', compact('books', 'users', 'sales', 'latest', 'total', 'latest_book', 'latest_user'));
    }

    public function userInfo(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.user_info', compact('user'));
    }

    // public function returnHome(){
    //     return redirect()->back();
    // }
}
