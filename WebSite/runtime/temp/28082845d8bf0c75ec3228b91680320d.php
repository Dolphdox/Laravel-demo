<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:81:"D:\Documents\GitHub\ThinkPHP-demo\public/../application/index\view\rbac\user.html";i:1592637979;s:77:"D:\Documents\GitHub\ThinkPHP-demo\application\index\view\common\userinfo.html";i:1592551760;s:72:"D:\Documents\GitHub\ThinkPHP-demo\application\index\view\common\css.html";i:1591444200;s:72:"D:\Documents\GitHub\ThinkPHP-demo\application\index\view\common\nav.html";i:1592567320;s:71:"D:\Documents\GitHub\ThinkPHP-demo\application\index\view\common\js.html";i:1591832952;s:75:"D:\Documents\GitHub\ThinkPHP-demo\application\index\view\common\footer.html";i:1587870624;}*/ ?>
<!DOCTYPE html>
<html lang="zh_cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta http-equiv="Cache" content="no-cache">
    <title>个人信息</title>
    <!DOCTYPE html>
<link rel="stylesheet" href="/static/css/font-awesome.min.css">
<link rel="stylesheet" href="/static/css/style.css">
<link rel="stylesheet" href="/static/css/bootstrap.css">
</head>
<body>
    <!DOCTYPE html>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo url('@index/index/index'); ?>">Demo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto p">
            <li class="nav-item" id="index-page">
                <a class="nav-link" href="<?php echo url('@index/index/index'); ?>">主页</a>
            </li>
            <li class="nav-item" id="bbs-page">
                <a class="nav-link" href="<?php echo url('@index/index/bbs'); ?>">论坛</a>
            </li>
            <li class="nav-item" id="contact-page">
                <a class="nav-link" href="<?php echo url('@index/index/contact'); ?>">联系我们</a>
            </li>
            <li class="nav-item" id="about-page">
                <a class="nav-link" href="<?php echo url('@index/index/about'); ?>">关于</a>
            </li>
        </ul>
        <div class="text-center">
            <button id="login-btn" class="btn btn-outline-success btn-block my-2 my-sm-0" data-toggle="modal" data-target="#modal" type="button" data-url="<?php echo url('@index/profile/userInfo'); ?>" data-purl="<?php echo url('@index/index/checkLogined'); ?>" onload="logined()">登录</button>
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
                      <li class="breadcrumb-item"><a href="<?php echo url('@index/profile/profile'); ?>">设置</a></li>
                      <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
                    </ol>
                  </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <ul class="list-group text-center">
                    <li class="list-group-item active">设置</li>
                    <?php if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?>
                    <li class="list-group-item">
                        <a href="<?php echo url($sub_menu['auth_c'].'/'.$sub_menu['auth_a']); ?>"><?php echo $sub_menu['name']; ?></a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>


                    <!-- <li class="list-group-item"><a href="<?php echo url('@index/profile/avatar'); ?>">修改头像</a></li>
                    <li class="list-group-item"><a href="<?php echo url('@index/profile/profile'); ?>">个人资料</a></li>
                    <li class="list-group-item"><a href="<?php echo url('@index/profile/account'); ?>">账户安全</a></li>
                    <li class="list-group-item"><a href="<?php echo url('@index/index/logout'); ?>">退出登录</a></li> -->
                </ul>
            </div>
            <div class="col-10">
                <div class="bg-light shadow-sm">
                    

<table class="table table-hover table-bordered table-list">
    <thead>
    <tr>
        <th width="40">ID</th>
        <th align="left">用户名</th>
        <th width="100">权限ID</th>
        <th width="200">操作</th>

    </tr>
    </thead>
    <tbody>
    <foreach>
        <?php if(is_array($user) || $user instanceof \think\Collection || $user instanceof \think\Paginator): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr>
            <td><?php echo $vo['id']; ?></td>
            <td><?php echo $vo['username']; ?></td>
            <td><?php echo $vo['role_id']; ?></td>
            <td>
                <?php if($vo['role_id'] == 1): ?>
                    <font color="#cccccc">权限变更</font>
                    <font color="#cccccc">删除</font>
                    <?php else: ?>
                    <a href="<?php echo url('Rbac/edit',array('id'=>$vo['id'])); ?>">权限变更</a>
                    <a class="js-ajax-delete" href="<?php echo url('Rbac/userdelete',array('id'=>$vo['id'])); ?>">删除</a>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </foreach>
    </tbody>
    
</table>
<div class="container py-2">
    <?php echo $user->render(); ?>
</div>


                </div>
            </div>
        </div>
    </div>



    <!DOCTYPE html>
<script src="/static/js/jquery-3.5.1.min.js"></script>
<script src="/static/js/popper.min.js"></script>
<script src="/static/js/bootstrap.js"></script>
<script src="/static/js/common.js"></script>
<script>
    function logined(){
        $.ajax({
            type: "POST",
            url: $("#login-btn").attr("data-purl"),
            success: data=>{
                if(data=="logined"){
                    $("#login-btn").attr("onclick", "window.location.href='"+$("#login-btn").attr("data-url")+"'").removeAttr("data-toggle").html("<img style='max-width:38px;height:auto' src='/<?php echo $data['avatar_url']; ?>avatar_38.jpg'>").addClass("p-0").removeClass("btn-block")
                }else{
                    $("#login-btn").removeAttr("onclick").attr('data-togle', 'modal').html("登录").removeClass("p-0")
                };
            }
        })
    }
    
    $(document).ready(function(){
        $.ajax({
            type: "POST",
            url: "<?php echo url('@index/login/cookielogin'); ?>",
            success: data=>{
                if(data=="success"){
                    location.reload()
                }
            }
        })
    })
</script><!DOCTYPE html>

    <script src="/static/js/profile.js"></script>
    
    <script>
        $(document).ready(function(){
            logined()
        
        })
    </script>
</body>
</html>