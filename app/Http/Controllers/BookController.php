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
        $books = Book::all();
        // resources < views < book(作成する必要あり) の中の情報を読み込む
        return view('book.list', compact('books'));
    }
    
    public function new(){
        return view('book.new');
    }
    
    public function create(Request $request){
        $request-> validate([
            'title' => 'required|max:20',
            'content' => 'required|min:5',
        ]);
        $book = new Book;
        $book->title = $request->input(["title"]);
        $book->content = $request->input(["content"]);
        $book->save();
        
        return redirect()->route('book.index');
    }
    
    public function edit(Book $book){
        return view('book.edit', compact('book'));
    }
    
    public function update(Request $request, Book $book){
        $data = $request-> validate([
            'title' => 'required|max:20',
            'content' => 'required|min:5',
        ]);
        $book->update($data);
        
        return redirect()->route('book.index');
    }
    
    public function destroy(Request $request, Book $book){
        $book->delete();
        return redirect()->route('book.index');
            // ->with('success', $book->title.'を削除しました');
    }
}
