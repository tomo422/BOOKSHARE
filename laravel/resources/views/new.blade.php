@extends('layout')

@section('content')
    <p>{{ $message }}</p>
    {{ Form::open(['route' => 'book.store']) }}
        <div class='form-group'>
            {{ Form::label('title', 'タイトル:') }}
            {{ Form::text('title', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('owner', 'オーナー（所有者）:') }}
            {{ Form::text('owner', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('writer', '執筆者:') }}
            {{ Form::text('writer', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('publisher', '出版社:') }}
            {{ Form::text('publisher', null) }}
        </div>
        <div class='form-group'>
            {{ Form::label('day', '貸出期間:') }}
            {{ Form::text('day', 14) }}
        </div>
        <div class="form-group">
            {{ Form::submit('作成する', ['class' => 'btn btn-primary']) }}
            <a href={{ route('book.list') }}>一覧に戻る</a>
        </div>
    {{ Form::close() }}
@endsection