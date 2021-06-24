<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>
<body>
        <h1>Welcome home, {{session('username')}} :: {{$id}}</h1>
        <!-- <img src="{{asset('upload/abc.png')}}" height="100px" width="100px"/> -->
        <!-- <a href="/user/create"> Create New </a>| -->
        <a href="/user/list"> User List </a>| 
        <!-- <a href="{{route('user.index')}}">User List</a>| -->
        <a href="/logout"> Logout </a>
</body>
</html>