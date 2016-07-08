@extends('layout2')
@section('form')
    <h1>Chỉnh sửa Hoc Sinh</h1>
    {!! Form::model( $student,['url'=>'update','method'=>'get','class'=>'form']) !!}
    <div>
    <div class="form-group">
        {!! Form::label('name','Tên Sinh Viên:',['class'=>'col-md-2 control-label']) !!}
    </div>
    <div class="col-md-4">
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    </div>
    <div>
    <div class="form-group">
        {!! Form::label('teacher_id','Mã số giáo viên:',['class'=>'col-md-2 control-label']) !!}
    </div>
    <div class="col-md-2">
        {!! Form::text('teacher_id',null,['class'=>'form-control']) !!}
        {!! Form::hidden('id') !!}
    </div>
    </div>
    {!! Form::submit('Chỉnh sửa',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

    {{--{!! Form::open( ['url'=>'update','method'=>'get']) !!}--}}
    {{--{!! Form::label('name','Tên Sinh Viên:') !!}--}}
    {{--{!! Form::text('name',$student->name) !!}<br>--}}
    {{--{!! Form::label('teacher_id','Mã số giáo viên:') !!}--}}
    {{--{!! Form::text('teacher_id',$student->teacher_id) !!}<br>--}}
    {{--{!! Form::hidden('teacher_id',$student->id) !!}<br>--}}
    {{--{!! Form::submit('Chỉnh sửa') !!}--}}
    {{--{!! Form::close() !!}--}}
    {{--<form method="get" action="http://localhost/quickstart/public/update">--}}
    {{--<label for="name">Tên sinh viên:</label>--}}
    {{--<input type="text" id="name" name="name" value="{{$student->name}}">--}}
    {{--<label for="name">Mã số giáo viên:</label>--}}
    {{--<input type="" id="teacher_id" name="teacher_id" value="{{$student->teacher_id}}">--}}
    {{--<input type="hidden" id="id" name="id" value="{{$student->id}}">--}}
    {{--<input type="submit" value="Chỉnh sửa">--}}
    {{--</form>--}}
@endsection
