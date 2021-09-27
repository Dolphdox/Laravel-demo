<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:92:"C:\Users\wcz\Documents\GitHub\thinkphp-dome\public/../application/index\view\index\test.html";i:1588739274;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>品字形框架页面</title>
    <style>
        body
        {
            margin: 0;
            padding: 0;
            background-color:#f7f8f9;
        }
        div
        {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        #topFrame{
            width:100%;
            height:110px;
        }
        #leftFrame{
            width:18%;
            float:left;
            min-height:520px;
        }
        #mainFrame{
            width:82%;
            float:right;
            min-height:520px;
        }
        #bottomFrame{
            width:100%;
            height:35px;
        }
    </style>
</head>
<body>
    <h1><?php echo $str; ?></h1>
    <div>
        <iframe id="topFrame" name="topFrame" frameboder="0" style="border:none;!important" scrolling="no" src="top"></iframe>
        <iframe id="leftFrame" name="leftFrame" frameboder="0" style="border:none;!important" src="left"></iframe>
        <iframe id="mainFrame" name="mainFrame" frameboder="0" style="border:none;!important" src="right"></iframe>
        <iframe id="bottomFrame" name="bottomFrame" frameboder="0" style="border:none;!important" scrolling="no" src="bottom"></iframe>
    </div>
</body>
</html>
