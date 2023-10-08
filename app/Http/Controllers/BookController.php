<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * ブック一覧を表示する
     * 
     * @return view
     */
    public function index(){
        $books = DB::table('books')
            ->join('users', 'users.id', '=', 'books.user_id')
            ->select('books.*', 'users.name as username')
            ->orderByDesc('books.id')
            ->get();
        // $books = Book::select([
        //         'b.id',
        //         'b.title',
        //         'b.content',
        //         'b.user_id',  //使用しない
        //         'u.name as user_name',
        //     ])
        //     ->from('books as b')
        //     ->join('users as u', function($join){
        //         $join->on('b.user_id', '=', 'u.id');
        //     })
        //     ->orderBy('b.id', 'DESC');
        // resources < views < book(作成する必要あり) の中の情報を読み込む
        if(isset(\Auth::user()->name)){
            return view('book.list', compact('books'))
                ->with('username', \Auth::user()->name);
        } else {
            return view('book.list', compact('books'));
        }
        
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
        $book->user_id = \Auth::user()->id;
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
        $book->user_id = \Auth::user()->id;
        $book->update($data);
        
        return redirect()->route('book.index');
    }
    
    public function destroy(Request $request, Book $book){
        $book->delete();
        return redirect()->route('book.index');
            // ->with('success', $book->title.'を削除しました');
    }
}
