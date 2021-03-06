@extends('layout2')

@section('form')
    <h4><b>Danh sách sinh viên đang theo học:</b></h4>
    <table class="table table-bordered">
        <thead>
        <th>Họ và tên</th>
        <th></th>
        <th></th>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>
                    <a href="http://localhost/quickstart/public/students/{{$student->id}}/edit">Sửa</a>
                </td>
                <td><a onclick="deleteItem({{$student->id}})">Xóa</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
