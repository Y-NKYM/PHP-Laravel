@extends('layout')
<h1>Hello @auth{{ $username }}@endauth</h1>
<a class="btn btn-primary" href="{{ route('book.new') }}">新規登録</a>
<div>
    @foreach($books as $book)
        <p>Title: {{ $book->title }} has content {{ $book->content }}
            <a class="btn btn-primary" href="{{ route('book.edit', $book->id) }}">編集</a>
            <p>投稿者：{{ $book->username }}</p>
            <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick='return confirm("削除しますか")'>削除</button>
            </form>
        </p>
        
    @endforeach
</div>
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ブログ記事一覧</h2>
        <table class="table table-striped">
            <tr>
                <th>記事番号</th>
                <th>日付</th>
                <th>タイトル</th>
                <th></th>
            </tr>
            <tr>
                <td>1</td>
                <td>2020/06/30</td>
                <td>テスト</td>
                <td></td>
            </tr>
        </table>
    </div>
</div>
@endsection