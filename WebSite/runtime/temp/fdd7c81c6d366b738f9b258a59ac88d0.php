<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:97:"C:\Users\wcz\Documents\GitHub\thinkphp-dome\public/../application/index\view\index\user_info.html";i:1591497758;s:82:"C:\Users\wcz\Documents\GitHub\thinkphp-dome\application\index\view\common\css.html";i:1591444200;s:82:"C:\Users\wcz\Documents\GitHub\thinkphp-dome\application\index\view\common\nav.html";i:1591497320;s:81:"C:\Users\wcz\Documents\GitHub\thinkphp-dome\application\index\view\common\js.html";i:1591444165;s:85:"C:\Users\wcz\Documents\GitHub\thinkphp-dome\application\index\view\common\footer.html";i:1587870624;}*/ ?>
<!DOCTYPE html>
<html lang="zh_cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>个人信息</title>
    <!DOCTYPE html>
<link rel="stylesheet" href="/static/css/font-awesome.min.css">
<link rel="stylesheet" href="/static/css/style.css">
<link rel="stylesheet" href="/static/css/bootstrap.css">
</head>
<body>
    <!DOCTYPE html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Dome</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto p">
            <li class="nav-item" id="index-page">
                <a class="nav-link" href="<?php echo url('@index/index/index'); ?>">主页</a>
            </li>
            <li class="nav-item" id="contact-page">
                <a class="nav-link" href="<?php echo url('@index/index/contact'); ?>">联系我们</a>
            </li>
            <li class="nav-item" id="about-page">
                <a class="nav-link" href="<?php echo url('@index/index/about'); ?>">关于</a>
            </li>
        </ul>
        <div>
            <button id="login-btn" class="btn btn-outline-success btn-block my-2 my-sm-0" data-toggle="modal" data-target="#modal" type="button" data-url="<?php echo url('/index/index/userInfo'); ?>" data-purl="<?php echo url('/index/index/checkLogined'); ?>" onload="lodined()">登录</button>
        </div>
    </div>
</nav>

    <div class="container-xl">
        <div class="row my-4">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="<?php echo url('@index/index/index'); ?>">
                        <svg class="bi bi-house" width="1em" height="1em" viewbox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                          </svg>
                      </a></li>
                      <li class="breadcrumb-item"><a href="#">设置</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
                    </ol>
                  </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <ul class="list-group text-center">
                    <li class="list-group-item active">设置</li>
                    <li class="list-group-item"><a href="">修改头像</a></li>
                    <li class="list-group-item"><a href="">个人资料</a></li>
                    <li class="list-group-item"><a href="">账户管理</a></li>
                    <li class="list-group-item"><a href="<?php echo url('@index/index/logout'); ?>">退出登录</a></li>
                </ul>
            </div>
            <div class="col-10">

            </div>
        </div>
    </div>



    <!DOCTYPE html>
<script src="/static/js/jquery-3.5.1.min.js"></script>
<script src="/static/js/popper.min.js"></script>
<script src="/static/js/bootstrap.js"></script>
<script src="/static/js/index.js"></script><!DOCTYPE html>

    <script>
        $(document).ready(function(){
            logined()
        })
    </script>
</body>
</html>