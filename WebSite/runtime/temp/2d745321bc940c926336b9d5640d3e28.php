<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:93:"C:\Users\wcz\Documents\GitHub\ThinkPHP-demo\public/../application/index\view\index\index.html";i:1592639638;s:82:"C:\Users\wcz\Documents\GitHub\ThinkPHP-demo\application\index\view\common\css.html";i:1591444200;s:82:"C:\Users\wcz\Documents\GitHub\ThinkPHP-demo\application\index\view\common\nav.html";i:1592567320;s:87:"C:\Users\wcz\Documents\GitHub\ThinkPHP-demo\application\index\view\common\reglogin.html";i:1591796950;s:85:"C:\Users\wcz\Documents\GitHub\ThinkPHP-demo\application\index\view\common\footer.html";i:1587870624;s:81:"C:\Users\wcz\Documents\GitHub\ThinkPHP-demo\application\index\view\common\js.html";i:1591832952;}*/ ?>
<!DOCTYPE html>
<html lang="zh_cn">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!DOCTYPE html>
<link rel="stylesheet" href="/static/css/font-awesome.min.css">
<link rel="stylesheet" href="/static/css/style.css">
<link rel="stylesheet" href="/static/css/bootstrap.css">
    <title>thinkphp-dome</title>
</head>
<body>
    <!-- nav -->
    <!-- loging & register  -->
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
</nav><!DOCTYPE html>
<!-- login&reg1 -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- <div class="modal-header">
        </div> -->
        <div class="modal-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login-page" role="tab" aria-controls="login-page" aria-selected="true">登录</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="reg-tab" data-toggle="tab" href="#reg-page1" role="tab" aria-controls="reg-page1" aria-selected="false">注册</a>
                </li>
                <li class="nav-item ml-auto">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="p-2" aria-hidden="true">&times;</span>
                    </button>
                </li>
              </ul>
              <!-- login -->
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active mt-2" id="login-page" role="tabpanel" aria-labelledby="login-tab">
                    
                    <form class="container-lg">
                        <div class="form-group">
                            <label for="login-phone">手机/邮箱/用户名</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="login-phone" placeholder="请输入手机号, 邮箱或者用户名"/>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">密码</label>
                            <input type="password" class="form-control" id="login-password" placeholder="请输入密码"/>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="login_state" >
                            <label class="form-check-label" for="login_state">7天内自动登录</label>
                        </div>
                        <small class="mt-2 mb-3 form-text text-muted">还没注册?<a href="#reg" onclick="document.getElementById('reg-tab').click()">点击注册</a></small>
                        <button id="login" type="submit" class="btn btn-primary btn-block mb-2" data-purl="<?php echo url('@index/login/login'); ?>">登录</button>
                        <button id="login-reset" type="reset" class="invisible position-absolute" aria-hidden="true"></button>
                    </form>
                </div>
                <!-- reg1 -->
                <div class="tab-pane fade mt-2" id="reg-page1" role="tabpanel" aria-labelledby="reg-tab">
                    <form class="container-lg">
                        <div class="form-group">
                            <label for="reg-phone-email">手机/邮箱</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="reg-phone-email" placeholder="请输入手机号或者邮箱"/>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="code">验证码</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="code" placeholder="请输入验证码" maxlength="4" data-purl="<?php echo url('@index/login/checkCode'); ?>"/>
                                
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="refresh">
                                        <i class="fa fa-refresh" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><img id="code-img" src="<?php echo url('index/login/verify'); ?>" alt="captcha" onclick="this.setAttribute('src', '<?php echo url('index/login/verify'); ?>?id=\'+Math.random()');"></span>
                                </div>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="reg-license">
                            <label class="form-check-label" for="reg-license">同意注册协议</label>
                            <div class="invalid-feedback">你必须同意注册协议</div>
                        </div>
                        <button id="reg-submit" type="submit" class="btn btn-primary btn-block mb-2" data-target="#staticBackdrop" data-purl="<?php echo url('@index/login/register'); ?>">注册</button>
                        <button id="reg-reset" type="reset" class="invisible position-absolute" aria-hidden="true"></button>
                    </form>
                </div>
            
            </div>
        </div>
        <!-- <div class="modal-footer">
        </div> -->
      </div>
    </div>
  </div>

  
  <!-- reg-page2 -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">
            <h4 class="text-center">填写验证码和密码完成注册</h4>
            <p class="text-center">验证码已发送至 <span id="feedback-phone-email"></span></p>
            
            <form class="container-lg">
                <div class="form-group">
                    <label for="sms-code">验证码</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="sms-code" placeholder="请输入6位验证码" maxlength="6"/>
                        <div class="input-group-prepend">
                            <button class="input-group-text" id="resend" type="button" data-purl="<?php echo url('@index/login/sendCodeSmsEmail'); ?>">重新发送验证码</button>
                        </div>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="reg-password">密码</label>
                    <input type="password" class="form-control" id="reg-password" placeholder="请输入8-20位字母/数字/符号,至少包含两种的密码" data-purl="<?php echo url('login/register2'); ?>"/>
                    <div class="invalid-feedback"></div>
                </div>
                <button id="reg-submit2" type="submit" class="btn btn-primary btn-block mb-2 mt-4" data-dismiss="modal" data-purl="<?php echo url('@index/login/register2'); ?>">完成</button>
                <button id="reg2-reset" type="reset" class="invisible position-absolute" aria-hidden="true"></button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <!-- notice -->
  <!-- Modal -->
  <div class="modal fade" id="notice" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">提示</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="location.reload()">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body text-center">
            <p>登录成功!</p>
        </div>
        <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="location.reload()">关闭</button>
        </div>
    </div>
    </div>
</div>

    


  <!-- mainText -->
  <div class="container">
    <div class="jumbotron my-4">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">这是一个thinkphp项目.</p>
        <hr class="my-4">
        <h5>已实现功能</h5>
        <ul>
            <li>注册登录</li>
            <li>个人资料修改(表单提交)</li>
            <li>修改头像(文件上传缩略图功能)</li>
            <li>记住登录状态(cookie实现)</li>
            <li>权限管理</li>
        </ul>
        <a class="btn btn-primary btn-lg" href="vscode:" role="button">Just do it</a>
      </div>
  </div>
  
    <!-- footer -->
    <!DOCTYPE html>
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
</script>
    <script>
        $(document).ready(function(){
            logined()
            $("#index-page").addClass("active")
        })
    </script>
    
</body>

</html>