<?php
    if(isset($_POST['id'])){
        $existFlight= new flightController();
        $flight = $existFlight->getOneFlight();
    }else{
      Redirect::to('admin');
    }
    if(isset($_POST['submit'])){
        $existFlight= new flightController();
        $existFlight->updateFlight();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container" >
    <div class="row my-4" >
    <div class="card card-body bg-light">
    <div>
    <button class="btn btn-primary text-center" > <a href="<?php echo BASE_URL;?>admin"> Home </a></button>
    </div>
    <div class="col-md-11 mx-auto" >
    <div class="form-group" >
    <form method="POST" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="flightDate">Flight date:</label>
      <input type="date" class="form-control" name="flightDate" value="<?php echo $flight->flightDate ?>" >
      <input type="hidden" name="id" value="<?php echo $flight->id ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="flightTime">Flight time:</label>
      <input type="time" class="form-control" name="flightTime" value="<?php echo $flight->flightTime ?>" >
    </div>
  </div>
  <div class="form-group">
    <label for="departCity">Depart:</label>
    <input type="Text" name="departCity" class="form-control" value="<?php echo $flight->departCity ?>" >
  </div>
  <div class="form-group">
    <label for="arriveCity">Destination:</label>
    <input type="text" class="form-control" name="arriveCity" id="" value="<?php echo $flight->arriveCity ?>" >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Price">Price:</label>
      <input class="form-control" type="number" name="Price" id="" value="<?php echo $flight->Price ?>" >
    </div>
    <div class="form-group col-md-6">
      <label for="places">Places:</label>
      <input type="number" class="form-control" name="places" id="" value="<?php echo $flight->places ?>" >
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Add</button>
</form>
    
</div>
</div>
</div>
</div>
</body>
</html>