<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * ブック一覧を表示する
     * 
     * @return view
     */
    public function index(){
        $value = 'Snome';
        $arr = ['Snome1', 'Snome2', 'Snome3'];
        // resources < views < book(作成する必要あり) の中の情報を読み込む
        return view('book.list', compact('value', 'arr'));
    }
}
