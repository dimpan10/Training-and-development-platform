<?php
session_start();
if (isset($_SESSION['errorinput'])) {
    if ($_SESSION['errorinput']) {
        echo '<script>alert("Λάθος όνομα χρήστη ή λαθός κωδικός!\nΠαρακαλώ δώστε ένα έγκυρο όνομα χρήστη και κωδικό!")</script>';
        $_SESSION['errorinput'] = false;
    }
 } 
    ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Simple Login Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <style type="text/css">
  .login-form {
    width: 340px;
      margin: 50px auto;
  }
    .login-form form {
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>

<div class="login-form">
    <form action="auth.php" method="POST">
        <h2 class="text-center">Είσοδος</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Όνομα Χρήστη" name="username" id="username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Κωδικός" name="password" id="password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" value="Login" id="btn">Είσοδος</button>
        </div>       
    </form>
</div>



</body>
</html><?php
session_start();
if (isset($_SESSION['errorinput'])) {
    if ($_SESSION['errorinput']) {
        echo '<script>alert("Λάθος όνομα χρήστη ή λαθός κωδικός!\nΠαρακαλώ δώστε ένα έγκυρο όνομα χρήστη και κωδικό!")</script>';
        $_SESSION['errorinput'] = false;
    }
 } 
    ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Simple Login Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <style type="text/css">
  .login-form {
    width: 340px;
      margin: 50px auto;
  }
    .login-form form {
      margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>
</head>
<body>

<div class="login-form">
    <form action="auth.php" method="POST">
        <h2 class="text-center">Είσοδος</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Όνομα Χρήστη" name="username" id="username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Κωδικός" name="password" id="password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" value="Login" id="btn">Είσοδος</button>
        </div>       
    </form>
</div>



</body>
</html>