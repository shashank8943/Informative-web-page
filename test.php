<html>
<head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <style>body{
  background-image: url("images/bg3.jpg");
  opacity:1;
  padding:5;
}
hr.style2 {
	border-top: 3px double #8c8b8b;
}
h1{
  text-decoration:underline;
  text-decoration-color:#aaaaaa;
  font-family: Helvetica, Times, fantasy;
  font-style:italic;
  color:white;
  text-align:center;
  font-size:100px;
}
p.a {border: 2px solid cyan;
  border-radius: 5px;}
p.a ,p.a1,p.a2,p.a3{
  font-family: Courier new, Times, serif;
  color:white;
  font-size: 20;
  padding: 20px;
}
p.a1 {border: 2px solid red;
  border-radius: 5px;}
p.a2 {border: 2px solid green;
    border-radius: 5px;}
p.a3 {border: 2px solid pink;
      border-radius: 5px;}
.aa{
width:1000px;
  height:500px;
  display: block;
 margin-left: auto;
 margin-right: auto;
}
.aaa{
width:600px;
  height:400px;
  display: block;
 margin-left: auto;
 margin-right: auto;

}
.aaa:hover{
  transform: scale(1.1);
  transition:all 0.7s;
}
h3{
  text-decoration: underline;
  font-family: Courier new, Times, serif;
  text-align:center;
}
.img-responsive{
  border: 2pc solid yellow;
  border-radius: 5px;
  border-width: 1px;
}
.zoom {
  padding: 5;
  width:500px;
  margin: 0 auto;
    border-radius: 10%;
}
.img-responsive{
  padding:100;
  align:center;

}
.zoom:hover {
  transform: scale(1.1);
  transition:all 0.7s; /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
<title>
  INFORMATIVE PAGE
</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Machine Learning</a>
    </div>
    <ul class="nav navbar-nav mr-auto">
      <li class="active"><a href="#1">What is Machine Learning</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#2">Types of Learning
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="https://www.geeksforgeeks.org/ml-types-learning-supervised-learning/">Supervised Learning</a></li>
          <li><a href="https://www.geeksforgeeks.org/supervised-unsupervised-learning/">Unsupervised Learning</a></li>
          <li><a href="https://www.geeksforgeeks.org/what-is-reinforcement-learning/">Reinforcement Learning</a></li>
        </ul>

      </li>
      <li><a href="#3">Neural Networks</a></li>
      <li class="active"><a href="courses.html">Courses</a></li>
      <li class="active"><a href="form.html">Feedback</a></li>
    </ul>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    session_start();
if ($_SESSION['sess_user']==NULL) { ?>
  <ul class="nav navbar-nav navbar-right">
    <li class="active" align="right"><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
    <li class="active"><a href="signup.php"><span class="glyphicon glyphicon-log-in"></span> Signup</a></li>
  </ul>
<?php } else {?>
  <ul class="nav navbar-nav navbar-right">
  <li>  <?php
echo "<div style ='font:25px/21px Arial,tahoma,sans-serif;color:#ff0000'>".$_SESSION['sess_user']."</div>";?>
</li>
</ul>
<?php  } ?>
  </div>
</nav>


<div class="container">
<div id="1" class="row">
<h1 class="hero-title">Machine learning</h1>
<br>
<div class="col-md-6">
  <br><br>
<p class="a" >

  Machine learning is an application of artificial intelligence (AI) that provides systems the
  ability to automatically learn and improve from experience without being explicitly programmed.
  Machine learning focuses on the development of computer programs that can access data and use
  it learn for themselves.
</p>
<br><br>
</div>
  <div class="col-md-6"><img src="images/ml1.jpg" class="zoom"></div>
</div></div>
<br><br>
<h3 style="color:grey">TYPES OF LEARNING</h3>
<div class="row">
<div class="col-md-6"><a href="https://www.geeksforgeeks.org/ml-types-learning-supervised-learning/"><img class="aaa" src="images/s.png"></a></div>
<div class="col-md-6"><a href="https://www.geeksforgeeks.org/supervised-unsupervised-learning/"><img class="aaa" src="images/us.png"></a></div>
</div><br><br>
  <h3 style="color:cyan">MACHINE LEARNING ALGORITHMS</h3>
<div class="al">
<img class="aa" src="images/cheat.png">
</div><br><br>


<div class="container">
  <h3 style="color:red">REGRESSION</h3>
  <div class="row">
    <div class="col-md-6">
    <p class="a1">A regression problem is when the output variable is a real or continuous value, such as “salary” or “weight”. Many different models can be used, the simplest is the linear regression. It tries to fit data with the best hyper-plane which goes through the points.</p></div>
    <div class="col-md-6"><img src="images/ex2regression.jpg" class="zoom"></div>
  </div><br><br>

  <div class="container">
    <h3 style="color:green">CLASSIFICATION</h3>
    <div class="row">
      <div class="col-md-6">
      <p class="a2">A classification problem is when the output variable is a category, such as “red” or “blue” or “disease” and “no disease”. A classification model attempts to draw some conclusion from observed values. Given one or more inputs a classification model will try to predict the value of one or more outcomes.</p></div>
      <div class="col-md-6"><img src="images/classification.jpg" class="zoom"></div>
    </div>

<br><br>
<div class="container">
<h3 style="color:pink">NEURAL NETWORKS</h3>
<div class="row">
  <div class="col-md-6"><p class="a3">An artificial neuron network (ANN) is a computational model based on the structure and functions of biological neural networks. Information that flows through the network affects the structure of the ANN because a neural network changes - or learns, in a sense - based on that input and output.

<br>ANNs are considered nonlinear statistical data modeling tools where the complex relationships between inputs and outputs are modeled or patterns are found.</p></div>
<div class="col-md-6"><img src="images/ann.jpg" class="zoom"></div>
</div>
<div id="3" class="row">
  <h3 style="color:yellow">TYPES OF NEURAL NETWORKS</h3>
<a href="https://skymind.ai/wiki/machine-learning-algorithms"> <img class="img-responsive" src="images/LEARN.png"> </a>
</div>
<a href="logout.php"><button type="button" class="btn btn-primary" > Logout</button></a>
</body>
</html>
