@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
         {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

            <div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-6">
                {!! Form::label('status', 'ステータス:') !!}<br>
                {!! Form::text('status') !!}
            </div>
            
            <div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-6">
                {!! Form::label('content', 'メッセージ:') !!}
                {!! Form::text('content') !!}
            </div>

            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
            {!! Form::submit('更新') !!}
            </div>

         {!! Form::close() !!}
        </div>
    </div>

@endsection