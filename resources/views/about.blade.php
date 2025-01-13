<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('common.header',['name'=>'About'])
    <h1>About {{$name}}</h1>
    @foreach($users as $user)
    <h1>{{$user}}</h1>
    @endforeach
    @for($i=0; $i<3; $i++)
    @if($i==1)
    <h1>One</h1>
    <h1>{{$users[$i]}}</h1>
    @else
    <h1>Not One</h1>
    @endif
    @endfor
</body>
</html>