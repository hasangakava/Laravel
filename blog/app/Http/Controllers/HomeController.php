<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function merhaba(){
        //$users = DB::table('users')->get();
        //$users = User::all();
        //dd($users);
        $products = Product::with(['user'])->get();
        dd($products);
        return view('index', compact('users'));
        // return "Hello World";
    }
}
