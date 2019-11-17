<html>
<head>
<title> Signup Form Design Tutorial </title>
<script>
function myFunction() {
  x=null;
x=document.getElementById("usr").value;
if(x==null)
{alert("empty username");}

}
</script>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>

    <div id="login-box">
      <div class="left-box">
  <form action="" method="post">

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Name" name="uname" required>

      <label for="email"><b>E-mail</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
      <label for="rpsw"><b>Renter Password</b></label>
      <input type="rpassword" placeholder="Renter Password" name="rpsw" required>

      <input type="submit" value="Register" name="submit" />

    </div>


  </form>
  </div>
        <div class="right-box">
          <span class="signinwith">Sign in with<br/>Social Network     </span>

        <a href="test.php"><button class="social facebook">Homepage</button></a>
        <a href="login.php"><button class="social twitter">Login</button></a>
        <a href="courses.html"><button class="social google">Courses</button></a>


        </div>
        <div class="or">OR</div>
    </div>
<?php
if(isset($_POST["submit"])){
echo"hi";
if(!empty($_POST['uname']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    $uname=$_POST['uname'];
    $user=$_POST['email'];
    $pass=$_POST['pass'];
    $con=mysqli_connect('localhost','root','','shashank') or die(mysql_error());
    echo"connected";
    $query=mysqli_query($con ,"SELECT * FROM login WHERE user='".$user."'");
    $numrows=mysqli_num_rows($query);
    if($numrows==0)
    {
    $sql="INSERT INTO login(name,user,pass) VALUES('$uname','$user','$pass')";

    $result=mysqli_query($con,$sql);
        if($result){
    echo "Account Successfully Created";
    } else {
    echo "Failure!";
    }

    } else {
    echo "That username already exists! Please try again with another.";
    }

} else {
    echo "All fields are required!";
}
}
?>

</body>
</html>
