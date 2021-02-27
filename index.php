<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Total & Monthly Amount</title>
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
  padding: 15px 40px 50px;
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

<form class="form-signin" action="machine.php">
  <h4 class="form-signin-heading text-center">TOTAL & MONTHLY AMOUNT</h4>
  <div class="form-group">
    <label for="">Enter the loan amount:</label>
    <input type="number" class="form-control" name="num1" id="" placeholder="">
  </div>
    <div class="form-group">
    <label for="">Enter the interest rate:</label>
    <input type="number" class="form-control" name="num2" id="" placeholder="">
  </div>
    <div class="form-group">
    <label for="">Number of years:</label>
    <input type="number" class="form-control" name="num3" id="" placeholder="">
  </div>
  <button class="btn btn-lg btn-primary btn-block">SUBMIT</button>
</form>

</div>

</body>
</html>











