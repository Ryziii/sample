@extends('layouts.default')
@section('content')
    <div class="jumbotron">
        <h1 >Hello Laravel</h1>
        <p class="lead">
            你现在所看到的是<a href="http://ryziiisample.hersoku.com">我的主页</a>
        </p>
        <p>
            一切从这里开始
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">注册</a>
        </p>
    </div>
@stop