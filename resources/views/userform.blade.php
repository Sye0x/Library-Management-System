<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="adduser" method="post">
        @csrf
        
        <div>
        <label for="">Name:</label>
        <br>
        <input type="text" name="name">
        </div>
        <div>
        <label for="">Email:</label>
        <br>
        <input type="Email" name="email">
        </div>
        <div>
        <label for="">Password:</label>
        <br>
        <input type="password" name="password">
        </div>
        <br>
        <button>Submit</button>
    </form>
</body>
</html>