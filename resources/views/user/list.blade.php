<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
<table border="1">
        <tr>
            <td> ID </td>
            <td> Name </td>
            <td> Email </td>
            <td> Type </td>
            <td> Action </td>
        </tr>
    
    @foreach ($userList as $user) 
        <tr>
            <td>{{$user['user_id']}}</td>
            <td>{{$user['username']}}</td>
            <td>{{$user['password']}}</td>
            <td>{{$user['type']}}</td>  
            <td>
                <a href="/user/details/{{$user['user_id']}}"> Details </a>|
                <!-- <a href="/{{route('user.index')}}">Details </a>| -->
                <!-- <a href="/user/edit/{{$user['user_id']}}"> Edit </a> |
                <a href="/user/delete/{{$user['user_id']}}"> Delete </a> | -->
            </td>
        </tr>
    @endforeach  
    </table>
</body>
</html>