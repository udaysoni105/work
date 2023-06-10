<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <form action="{{url('/')}}/register"method="post">
     @csrf
    <div class="container">
        <h1 class="Text-center">Registration</h1>
        <div class="form-group">
            <label for="">customer_id</label>
            <input type="text" name="name" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">name</label>
            <input type="text" name="name" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">mail_id</label>
            <input type="mail_id" name="mail_id" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">password</label>
            <input type="password" name="password" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">city</label>
            <input type="city" name="city" id="" class="form-control">
        </div>
        <button>Submit</button>
    </div>
</form>
</body>
</html>