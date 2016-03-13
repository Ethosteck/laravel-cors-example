<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Book;

class BooksController extends Controller
{
    //
    public function index()
    {
    	$books = Book::orderBy('title')->get();
        return $books;
    }
}
