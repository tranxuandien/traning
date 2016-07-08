@extends('layout2')
@section('form')
    <h1 class="container">Thêm mới Hoc Sinh</h1>
    {!! Form::open(['url'=>'store','method'=>'get','class'=>'form']) !!}
    <div class="form-group">
        {!! Form::label('name','Tên sinh viên:',['class'=>'col-md-2 control-label']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::label('teacher_id','Mã số giáo viên:',['class'=>'col-md-2 control-label']) !!}
    </div>
    <div class="col-md-2">
    {!! Form::text('teacher_id',$teacherId,['class'=>'form-control']) !!}<br>
    </div>
    {!! Form::submit('Thêm mới',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
