<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:96:"C:\Users\wcz\Documents\GitHub\ThinkPHP-demo\public/../application/index\view\profile\avatar.html";i:1591834423;s:87:"C:\Users\wcz\Documents\GitHub\ThinkPHP-demo\application\index\view\common\userinfo.html";i:1592551760;s:82:"C:\Users\wcz\Documents\GitHub\ThinkPHP-demo\application\index\view\common\css.html";i:1591444200;s:82:"C:\Users\wcz\Documents\GitHub\ThinkPHP-demo\application\index\view\common\nav.html";i:1592567320;s:81:"C:\Users\wcz\Documents\GitHub\ThinkPHP-demo\application\index\view\common\js.html";i:1591832952;s:85:"C:\Users\wcz\Documents\GitHub\ThinkPHP-demo\application\index\view\common\footer.html";i:1587870624;}*/ ?>
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
                    
    <div class="container bg-light shadow-sm">
        <div class="row-cols-1 py-2">
            <h4>当前的头像</h4>
            <small>如果您还没有设置自己的头像，系统会显示为默认头像，您需要自己上传一张新照片来作为自己的个人头像</small>
            <div class="my-4" style="max-width:200px;height:200px">
                <img class="border border-dark" style="width: 100%;height: auto;" src="/<?php echo $data['avatar_url']; ?>avatar_200.jpg" alt="头像">
            </div>
        </div>
        <div class="row-cols-1">
            <h4>设置新头像</h4>
            <small>请选择一个新照片进行上传编辑</small>
            <br>
            <small>头像保存后，您可能需要刷新一下本页面(按F5键)，才能查看最新的头像效果</small>
            <form>
                <div class="custom-file my-4">
                    <input type="file" name class="custom-file-input" id="avatar" >
                    <label class="custom-file-label col-6" for="customFile"  data-browse="浏览">选择文件</label>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="text-center col-6 pb-4">
                    <button id="avatar-upload" class="btn btn-primary col-3 text-center" type="submit" data-purl="<?php echo url('@index/profile/avatarUpload'); ?>">上传</button>
                </div>
            </form> 
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">提示</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="window.location.href='<?php echo url('@index/profile/avatar'); ?>?id='+Math.random()">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <p>图片上传成功</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="window.location.href='<?php echo url('@index/profile/avatar'); ?>?id='+Math.random()">完成</button>
            </div>
        </div>
        </div>
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