<?php 

  if(isset($_POST['submit'])){
    $createUser = new userscontroller();
    $createUser->register();
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/view/register.css">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/view/footer.css">
</head>
<body>
<?php  include'includes/Header.php' ?>
<div class="hdr"> <h2> Register </h2> </div>
<div class="form col-sm-8">
<form action="" method="POST" >
  <div class="form-group">
    <label for="fullname">Full name:</label>
    <input type="Text" class="form-control" name="fullname" placeholder="Full name" >
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" placeholder="From">
    <label for="pswrd">Password</label>
    <input type="password" placeholder="To" name="pswrd" class="form-control">
    <label for="passportid">Passport Id:</label>
    <input type="text" class="form-control" name="passportid" placeholder="Passport Id">
    <label for="birthdate">Birthdate</label>
    <input type="date" name="birthdate" class="form-control">
    <button class="btn" name="submit" type="submit">Register</button>
</div>
</form>
<div>
<a href="<?php echo BASE_URL;?>login" class="black" >Connect</a>
</div>
</div>
</body>
  <?php include'includes/Footer.php' ?>
</html>