<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="view/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-right">
  <a class="navbar-brand" href="#"> <img class="image" src="Images/Untitled-1.png" alt="" srcset=""> </a>
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
<div class="form col-sm-8">
<form>
  <div class="form-group">
    <label for="formGroupExampleInput">Depart city</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="From">
    <label for="formGroupExampleInput">Arrive city</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="To">
    <div class="block">
      <div class="halfone">
    <label for="formGroupExampleInput2">label</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" >
    </div>
    <div class="halftwo">
    <label for="formGroupExampleInput2">label</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" >
    </div>
  </div>
    <label for="formGroupExampleInput2">label</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    <label for="formGroupExampleInput2">label</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
    <button class="btn">Reserve</button>
</div>
</form>
</div>
</body>
</html>