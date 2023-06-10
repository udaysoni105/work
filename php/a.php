<?php 
echo isset($_POST['submit']);
echo $_POST['firstname'];

  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];

    $last_name = $_POST['lastname'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $gender = $_POST['gender'];

    $phpconnect = mysqli_connect("localhost","root","Password123@!","mydb");
 
  if (mysqli_connect_errno())
  {
  echo "Connection Failed; " . mysqli_connect_error();
  }
  else
  {
  echo "Connection Established.<br>";
  }
 
mysqli_close($phpconnect);
echo “Connection Closed.”

    // $sql = "INSERT INTO `users`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

    // $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>