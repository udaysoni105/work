<?php
$x = 300;
$y = 200;
function multiplication(){
    $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
}
 
multiplication();
echo $z;
echo"======";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo"======";
$nm=$_POST['name'];
$age=$_POST['age'];
echo "<strong>".$nm." is $age years old.</strong>";
echo "<br>";
echo"======";
$name = $_GET['name'];
$city = $_GET['city'];
echo "<h1>This is ".$name." of ".$city."</h1><br>";
?>
<!DOCTYPE html>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 NAME: <input type="text" name="fname">
 <button type="submit">SUBMIT</button>
</form>
</body>
</html>

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<label for="name">Please enter your name: </label>
<input name="name" type="text"><br>
<label for="age">Please enter your age: </label>
<input name="age" type="text"><br>
<input type="submit" value="Submit">
<button type="submit">SUBMIT</button>
</form>
</body>
</html>
