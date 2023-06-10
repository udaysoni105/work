<h1>User Login</h1>
{{-- {{$errors}} --}}
{{-- @if($errors->any())
@foreach ($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif --}}
<form action="users" method="post">
    @csrf
    <input type="text" name="username" placeholder="enter user id"><br><br>
    <span style="color:red">@error('username'){{$message}}@enderror</span><br>
    <input type="password" name="userpassword" placeholder="enter user password"><br><br>
    <span style="color:red">@error('userpassword'){{$message}}@enderror</span><br>
    <button type="submit">login</button>
</form>