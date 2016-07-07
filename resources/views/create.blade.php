{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<meta charset="UTF-8">--}}
    {{--<title>Form trong Laravel 5</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h1>Thêm mới Hoc Sinh</h1>--}}
{{--<form method="get" action="http://localhost/quickstart/public/store">--}}
{{--<label for="name">Tên sinh viên:</label>--}}
{{--<input type="text" id="name" name="name">--}}
{{--<label for="name">Mã số giáo viên:</label>--}}
{{--<input type="" id="teacher_id" name="teacher_id" value="{{$teacherId}}">--}}
{{--<input type="submit" value="Thêm mới">--}}
{{--</form>--}}
{{--</body>--}}
{{--</html>--}}
@extends('layouts.app')

@section('content')
    <div class="" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        <h1>Thêm mới Hoc Sinh</h1>
                        <form method="get" action="http://localhost/quickstart/public/store">
                            <label for="name">Tên sinh viên:</label>
                            <input type="text" id="name" name="name">
                            <label for="name">Mã số giáo viên:</label>
                            <input type="" id="teacher_id" name="teacher_id" value="{{$teacherId}}">
                            <input type="submit" value="Thêm mới">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
