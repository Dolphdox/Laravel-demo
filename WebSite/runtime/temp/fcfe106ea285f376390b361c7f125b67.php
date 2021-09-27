<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"C:\Users\wcz\Documents\GitHub\thinkphp-dome\public/../application/index\view\test\upload.html";i:1591241905;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改头像</title>
</head>
<body>
    <p>头像上传</p>
    <form action="upload" enctype="multipart/form-data" method="post">
        <input type="file" name="image" /> <br> 
        <input type="submit" value="上传" /> 
    </form>
</body>
</html>