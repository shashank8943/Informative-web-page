<html>
<head>
  <link rel="stylesheet" type="text/css" href="signup.css"><title>login</title>
<script>

</script>
</head>
<body>
  <div id="login-box">
    <div class="left-box">
<form action="" method="post">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <input type="submit" value="Login" name="submit"/>

  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"><a href="test.html">Cancel</a></button>

  </div>
</div>
<div class="right-box">
  <img src="logo.jpg">

</div>
</div>
</form>
<?php
if(isset($_POST["submit"])){
if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $con=new mysqli('localhost','root','','shashank') or die(mysql_error());

    $query=mysqli_query($con,"SELECT * FROM login WHERE user='".$user."' AND pass='".$pass."'");
    $numrows=mysqli_num_rows($query);
    if($numrows!=0)
    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbname=$row['name'];
    $dbusername=$row['user'];
    $dbpassword=$row['pass'];
    }

    if($user == $dbusername && $pass == $dbpassword)
    {
    session_start();
    $_SESSION['sess_user']=$dbname;

    /* Redirect browser */
    header("Location: test.php");
    }
    } else {
    echo "Invalid username or password!";
    }

} else {
    echo "All fields are required!";
}
}
?>
</body>
</html>
