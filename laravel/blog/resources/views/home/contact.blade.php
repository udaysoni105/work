<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center">contact page...</h1>
    <form action="{{ url('contact')}}" method="post">
        @csrf
        Name: <input type="text" name="name">
        Email: <input type="text" name="email">
        <input type="submit" value="submit">
    </form>
</body>
</html>