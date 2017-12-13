@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} の編集ページ</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-lg-6">
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        <div class="form-group">
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content') !!}
        </div>
        
        {!! Form::submit('更新') !!}

    {!! Form::close() !!}
        </div>
    </div>
@endsection