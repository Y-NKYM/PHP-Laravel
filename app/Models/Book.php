<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    // テーブル名の指定
    protected $table = 'books';
    
    // fillable or guarded
    protected $fillable = 
    [
        'title',
        'content'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
