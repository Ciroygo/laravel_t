@extends('layouts.deafult')

@section('title','登录页面')

@section('content')

<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            登录
        </div>
        <div class="panel-body">

            @include('shared._errors')
            <form action="{{ route('login') }}" method="POST" accept-charset="utf-8">

                {{ csrf_field() }}
                <div class="form-group">
                    <label for="emalil">邮箱：</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">密码：</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> 记住我</label>
                </div>

                <button type="submit" class="btn btn-primary">登录</button>

            </form>

            <hr>

            <p>还没账号？<a href="{{ route('signup') }}" title="注册按钮">立即注册！</a></p>

        </div>
    </div>
</div>

@stop