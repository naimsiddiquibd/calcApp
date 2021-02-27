

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Result</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style type="text/css">
body {
  background: #eee;
}
.wrapper {
  margin: 80px;
}
.form-signin {
  max-width: 380px;
  margin: 0 auto;
  background-color: #fff;
  padding: 25px 40px 30px;
  border: 1px solid #e5e5e5;
  border-radius: 10px;
}
.form-signin .form-signin-heading, .form-signin .checkbox {
  margin-bottom: 30px;
}
.form-signin input[type="text"], .form-signin input[type="password"] {
  margin-bottom: 20px;
}
.form-signin .form-control {
  padding: 10px;
}
</style>
</head>
<body>

<div class="wrapper">

<form class="form-signin">




<?php 


$a=$_GET['num1'];
$b=$_GET['num2'];
$c=$_GET['num3'];
$total=$a+($a*$b/100);
$monthly=$total/($c*12);

echo "<h4>Result Ready!</h4>";

echo "Total amount: ", $total;
echo " <br>Monthly amount: ", $monthly;

 ?>





</form>

</div>

</body>
</html>