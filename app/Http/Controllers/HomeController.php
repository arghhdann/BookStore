<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Shop;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $book = Book::count();
        $shop = Shop::count();
        return view('dashboard', compact('book','shop'));
    }
}
