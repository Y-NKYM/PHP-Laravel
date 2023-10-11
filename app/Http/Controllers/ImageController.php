<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index(){
      $images = Image::all();
      return view('create', compact('images'));
    }
    
    public function store(Request $request)
    {
        $data = $request->all();
        //アップロードした画像の取得
        $image = $request->file('image');
        
        if($request->hasFile('image')){
            //storage < app < public内に画像を保存
            //$pathにはパス："public/画像ファイル名"が入っている。
            $path = \Storage::put('/public', $image);
            //画像ファイル名のみ保存したいので、explode()で名前のみに変換している。
            $path = explode('/', $path);
        } else {
            $path = null;
        }
        
        //データをデータベースに保存
        $image = new Image;
        $image->name = $data["name"];
        $image->image = $path[1];
        $image->save();
        
        return redirect()->route('image.index');
    }
}
