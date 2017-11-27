@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>
    <table class="table table-bordered container">
        <tr class="row">
            <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6">id</th>
            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">{{ $task->id }}</td>
        </tr>
        <tr class="row">
            <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6">ステータス</th>
            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">{{ $task->status }}</td>
        </tr>
        <tr class="row">
            <th class="col-lg-6 col-md-6 col-sm-6 col-xs-6">タスク</th>
            <td class="col-lg-6 col-md-6 col-sm-6 col-xs-6">{{ $task->content }}</td>
        </tr>
    </table>

    {!! link_to_route('tasks.edit', 'このタスク編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
    
     {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection