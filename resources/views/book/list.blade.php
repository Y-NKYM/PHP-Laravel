@extends('layout')
<h1>Hello</h1>
<h2>{{ $value }}</h2>
<h3>{{ $arr[0] }}</h3>
<h4>{{ $arr[1] }}</h4>
<h5>{{ $arr[2] }}</h5>
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