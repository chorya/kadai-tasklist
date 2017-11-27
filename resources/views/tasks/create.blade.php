@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-6">
            {!! Form::label('status', 'ステータス:') !!} <br>
            {!! Form::text('status') !!}
        </div>
        
        <div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-6">
        {!! Form::label('content', 'タスク:') !!} <br>
        {!! Form::text('content') !!}
        </div>
        
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
        </div>
    </div>

@endsection