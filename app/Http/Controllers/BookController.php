<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function getList()
    {
        $data = Book::all();
        return view('admin.books.list', ['data' => $data]);
    }

    public function search(Request $request)
    {
        $search = $request->get('keyword');
        $data = Book::where('title', 'like', '%' . $search . '%')->get();
        return view('admin.books.list', ['data' => $data]);
    }
}
