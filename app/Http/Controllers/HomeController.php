<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ebook;
class HomeController extends Controller
{
    public function index(){
        $books = Ebook::all();
        return view('home', compact('books'));
    }
}
