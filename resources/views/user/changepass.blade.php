<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('changepass')}}" method="post">
        @csrf
        <input type="password" name="pass">旧密码 <br>
        <input type="password" name="newpass">新密码 <br>
        <input type="password" name="newpass2">确认新密码 <br>
        <input type="submit" value="修改">
    </form>
</body>
</html>