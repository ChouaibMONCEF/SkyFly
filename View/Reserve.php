<?php
    if(isset($_POST['submit'])){
        $newFlight= new reservationscontoller();
        $newFlight->add();
        
    }
?>

<?php
    if(isset($_POST['id'])){
        $existFlight= new flightController();
        $flight = $existFlight->getOneFlight();
    }
    $id = $_SESSION['id'];
    $passengers=$_POST['passengers'];

     
    //   Redirect::to(admin);
    // }
    // if(isset($_POST[submit])){
    //     $existFlight= new flightController();
    //     $existFlight->updateFlight();
    // }
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
        <form method="POST" >
      <?php
      $counter=1;
      while($counter<=$passengers) { ?>
<body>

<div class="container" >
<div class="row my-4" >
<div class="card card-body bg-light">
<div>

</div>
<div class="col-md-11 mx-auto" >
<div class="form-group" >

<div class="form-row">
<div class="form-group col-md-6">
<label for="flightDate">Full name:</label>
<input type="text" class="form-control"  name="fullname[]" placeholder="Full name here" >
</div>
<div class="form-group col-md-6">
<label for="flightTime">Email:</label>
<input type="text" class="form-control" name="email[]" placeholder="Email here" >
</div>
</div>
<div class="form-group">
<label for="departCity">Passport Id:</label>
<input type="Text" name="passportid[]" class="form-control" placeholder="Passport Id here" >
</div>
<div class="form-row">
<div class="form-group col-md-6">

<input type="date" hidden  name="flightDate[]" value="<?php echo $flight->flightDate; ?>" >
<input type="hidden" name="id[]" value="<?php echo $flight->id; ?>">
</div>
<div class="form-group col-md-6">

<input type="time" hidden class="form-control" name="flightTime[]" value="<?php echo $flight->flightTime; ?>" >
</div>
<div class="form-group col-md-6">

<input type="text" hidden class="form-control" name="userid[]" value="<?php echo $_SESSION["id"] ?>" >
</div>
</div>
<div class="form-group">

<input type="Text" hidden name="departCity[]" class="form-control" value="<?php echo $flight->departCity; ?>" >
</div>
<div class="form-group">

<input type="text" hidden class="form-control" name="arriveCity[]" id="" value="<?php echo $flight->arriveCity; ?>" >
</div>
<div class="form-row">
<div class="form-group col-md-6">
<input class="form-control" hidden type="number" name="counter" id="" value="<?php echo $passengers?>" >
<input class="form-control" hidden type="number" name="Price[]" id="" value="<?php echo $flight->Price; ?>" >
</div>
</div>



</div>
</div>
</div>
</div>
</body>
<?php
$counter=$counter+1;
}

?>

<button type="submit" name="submit" class="btn btn-primary">Add</button>
</form>
</html>