<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL;?>/view/style.css">
</head>
<body>
<?php  include'includes/Header.php' ?>
<div class="tdiv" >
<div class="form col-sm-8">
<form method="POST" action="availableFlights" >
  <div class="form-group">
    <label for="formGroupExampleInput">Depart city</label>
    <input name="departCity" type="text" class="form-control" id="formGroupExampleInput" placeholder="From">
    <label for="formGroupExampleInput">Arrive city</label>
    <input name="arriveCity" type="text" class="form-control" id="formGroupExampleInput" placeholder="To">
    <div class="block">
      <div class="halfone">
    <label for="formGroupExampleInput2">Departure</label>
    <input name="flightDate" type="date" class="form-control" id="formGroupExampleInput2" >
    </div>
    <div class="halftwo">
    <label id="nonee" for="formGroupExampleInput2">Return</label>
    <input name="flightDate" type="date" class="form-control" id="none" >
    </div>
  </div>
    <label for="formGroupExampleInput2">type</label> <br>
    <div>
    <input type="radio" onclick="javascript:ftype()" id="roundtrip" name="type">
  <label for="roundtrip">Round Trip</label>
  <input type="radio" onclick="javascript:ftype()" id="oneway" name="type" >
  <label for="oneway">One Way</label><br>
    </div>
    <button class="btn" name="find" type="submit">Reserve</button>
</div>
</form>
  <script>
  function ftype(){
  if (document.getElementById("oneway").checked) {
    document.getElementById('none').style.display = 'none';
    document.getElementById('nonee').style.display = 'none';
    document.getElementById("roundtrip").checked = false
  }else if (document.getElementById("roundtrip").checked){
    document.getElementById("oneway").checked = false
    document.getElementById('none').style.display = 'block';
    document.getElementById('nonee').style.display = 'block';

  }
}
  </script>
</div>
<div class="text" >
  <h1>Reserve Now</h1>
  <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet aliquid, est unde repudiandae harum consequuntur.</span>
  </div>
</div>

</body>
</html>