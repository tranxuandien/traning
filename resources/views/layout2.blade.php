@extends('layouts.app')
@section('content')
    <div class="" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>
                    <div class="panel-body">
                        @yield('form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection