<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * ブック一覧を表示する
     * 
     * @return view
     */
    public function index(){
        $onebook = Book::find(1);
        $books = Book::all();
        // resources < views < book(作成する必要あり) の中の情報を読み込む
        return view('book.list', compact('onebook', 'books'));
    }
    
    public function new(){
        return view('book.new');
    }
    
    public function create(Request $request){
        $request-> validate([
            'name' => 'required|max:20',
            'content' => 'required|min:5',
        ]);
        $book = new Book;
        $book->title = $request->input(["name"]);
        $book->content = $request->input(["content"]);
        $book->save();
        
        return redirect()->route('book.index');
    }
}
