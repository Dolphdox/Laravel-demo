@extends('index.layout')

@section('title')
Grizzly
@endsection

@section('maintext')
@parent
<div class="container">
    <div class="jumbotron my-4">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">这是我用来学习WEB相关技术的案例.</p>
        <hr class="my-4">
        <h5>todo</h5>
        <ul>
            <li>账号安全验证</li>
            <li>论坛功能</li>
            <li>聊天系统</li>
            <li>电商功能</li>
            <li>Redis</li>
            <li>队列</li>
            <li>优化登录与个人资料后台</li>
            <li>打包工具, 优化css与js</li>
        </ul>
        <a class="btn btn-primary btn-lg" href="vscode:" role="button">Just do it</a>
      </div>
  </div>
@endsection
