<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form trong Laravel 5</title>
</head>
<body>
<h1>Chỉnh sửa Hoc Sinh</h1>

<form method="get" action="http://localhost/quickstart/public/update">
    <label for="name">Tên sinh viên:</label>
    <input type="text" id="name" name="name" value="{{$student->name}}">
    <label for="name">Mã số giáo viên:</label>
    <input type="" id="teacher_id" name="teacher_id" value="{{$student->teacher_id}}">
    <input type="hidden" id="id" name="id" value="{{$student->id}}">
    <input type="submit" value="Chỉnh sửa">
</form>
{{--{!! Form::open() !!}--}}

{{--{!! Form::close() !!}--}}
</body>
</html>

{{--trang chinh sua--}}
{{--ma so sinh vien {{$student->name}}--}}