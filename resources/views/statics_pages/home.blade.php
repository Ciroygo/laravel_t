@extends('layouts/deafult')


@section('title',"主页")
@section('content')
<div class="jumbotron">
    <h1>Laravel 教程</h1>
    <p class="lead">
        这个地方是laravel的训练基地
        <a href="#" "email me">Laravel 基础</a>
    </p>
    <p>一切从这个地方开始</p>
    <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}">立即注册</a>
    </p>
</div>
@stop