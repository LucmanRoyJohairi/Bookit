<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\User;

class SalesController extends Controller
{
    //
    public function index(){
        $sales = Sale::All();
        $latest = Sale::latest()->first();
        $total = 0;
        foreach($sales as $s){
            $total += $s->total_payment;
            // echo $s->total_payment;

        }
        // return $total;
        // return $total;
        return view('admin.sales.index', compact('sales', 'total', 'latest'));
    }
}
