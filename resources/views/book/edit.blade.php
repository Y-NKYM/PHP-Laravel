@extends('layout')
@section('content')
    <form action="{{ route('book.update', $book->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div>
            <label for="bookTitle">本のタイトル</label>
        	<input type="text" name="title" value="{{$book->title}}" id="bookTitle" placeholder="タイトル"><br>
        	@error('title')
        	    <p style="color:red;">タイトル２０文字まで</p>
        	@enderror
        	<label for="bookContent">本のコンテンツ</label>
        	<input type="text" name="content" value="{{$book->content}}" id="bookContent" placeholder="コンテンツ"><br>
        	@error('content')
        	    <p style="color:red;">コンテンツ3文字以上</p>
        	@enderror
        	<button type="submit" class="btn btn-primary">更新</button>
        </div>
    	
    </form>
@endsection