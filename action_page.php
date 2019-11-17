
<!DOCTYPE html>
<html>
<body>

<h1>Welcome</h1>
<?php
$email = "shashank8943@gmail.com";

if ($email == $_POST["uname"]) {
    echo "Have a good day Shashank Sharma!";
}
else{
  echo "Incorrect Email";
}
?>
<a href="test.html"><button>Home</button></a>
<a href="test.html"><button>Courses</button></a>
</body>
</html>
