@extends('layouts.app')

@section('content')
<div>
    {{ Form::open(['route' => 'image.store', 'method' => 'post', 'files' => 'true']) }}
    {{ Form::label('name', '名前') }}<br>
    {{ Form::text('name', 'なまえ') }}<br>
    {{ Form::label('image', '画像') }}<br>
    {{ Form::file('image') }}<br>
    {{ Form::button('登録', ['type' => 'submit']) }}
    {{ Form::close() }}
    <!--<form method="POST" actopm="{{-- route('image.store') --}}" enctype="multipart/form-data">-->
    <!--    @csrf-->
    <!--    <label for="name">名前</label><br>-->
    <!--    <input type="text" name="name" id="name"><br>-->
    <!--    <label for="image">画像登録</label><br>-->
    <!--    <input type="file" name="image" id="image"><br>-->
    <!--    <button type="submit">保存</button>-->
    <!--</form>-->
</div>
<div>
    @foreach($images as $image)
        <img src="{{ '/storage/' . $image['image'] }}" class="w-100 mb-3">
    @endforeach
</div>

@endsection