<?php 

    if(isset($_POST['submit'])){
    $loginAdmin = new admincontroller();
    $loginAdmin->adminauth();
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
<div class="hdr"> <h2> Admin login </h2> </div>
<div class="form col-sm-8">
<form action="" method="POST" >
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" placeholder="From">
    <label for="pswrd">Password</label>
    <input type="password" placeholder="To" name="pswrd" class="form-control">
    <button class="btn" name="submit" type="submit">Connect</button>
</div>
</form>
<div>
<a href="<?php echo BASE_URL;?>Register" class="black" >Register</a>
</div>
</div>
</body>
  <?php include'includes/Footer.php' ?>
</html>