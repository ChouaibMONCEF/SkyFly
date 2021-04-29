<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="view/login.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-right">
  <a class="navbar-brand" href="#"> <img class="image" src='images/Untitled-1.png' alt="" srcset=""> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto ">
      <a class="nav-item nav-link " href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link " href="#">Register</a>
      <a class="nav-item nav-link " href="#">Login</a>
      
    </div>
  </div>
  
</nav>
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
    <input type="radio" id="Male" name="r" value="m">
    <input type="radio" id="Female" name="r" value="f">
    <label for="Male">Male</label>
    <label for="Female">Female</label>
    <button class="btn" type="submit">Register</button>
</div>
</form>
</div>
</body>
</html>