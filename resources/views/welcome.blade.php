@extends('layouts.app')

@section('content')
    <div class="" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        <div class="">
                            <div class="content">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
