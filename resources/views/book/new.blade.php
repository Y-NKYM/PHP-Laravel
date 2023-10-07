@extends('layout')
@section('content')
    <form action="{{ route('book.create') }}" method="POST">
        @csrf
        <div>
            <label for="bookTitle">本のタイトル</label>
        	<input type="text" name="name" id="bookTitle" placeholder="タイトル"><br>
        	@error('title')
        	    <p style="color:red;">タイトル２０文字まで</p>
        	@enderror
        	<label for="bookContent">本のコンテンツ</label>
        	<input type="text" name="content" id="bookContent" placeholder="コンテンツ"><br>
        	@error('content')
        	    <p style="color:red;">コンテンツ3文字以上</p>
        	@enderror
        	<button type="submit" class="btn btn-primary">送信</button>
        </div>
    	
    </form>
@endsection